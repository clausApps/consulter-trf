<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;
use App\Models\Processo;
use App\CaptchaSolver\CaptchaSolver;
use Symfony\Component\DomCrawler\Crawler;

class ProcessoController extends Controller
{
    public function buscarForm()
    {
        $sites = Site::all();
        return view('processos.buscar', compact('sites'));
    }

    public function buscar(Request $request)
    {
        $numero = $request->input('numero_processo');
        $site = Site::find($request->input('site_id'));

        // Simulação de scraping real com HTML fictício
        $html = file_get_contents(base_path('resources/stubs/exemplo_processo.html'));

        $crawler = new Crawler($html);

        $dados = collect($site->campos_interesse ?? [])->mapWithKeys(function ($selector, $campo) use ($crawler) {
            return [$campo => $crawler->filter($selector)->count() ? $crawler->filter($selector)->text() : null];
        })->toArray();

        // Simula extração de PDFs (fictício)
        $arquivos = [
            'decisao.pdf',
            'sentenca.pdf'
        ];

        // Salva no banco
        Processo::create([
            'numero' => $numero,
            'site_id' => $site->_id,
            'user_id' => auth()->id(),
            'dados_extras' => $dados,
            'arquivos' => $arquivos,
        ]);

        return redirect()->route('processos.form')->with('resultado', 'Processo salvo com sucesso com dados: ' . json_encode($dados));
    }
}


use App\Models\Processo;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProcessosExport;
use Barryvdh\DomPDF\Facade\Pdf;

public function listar()
{
    
    $query = Processo::query();
    if (!auth()->user() || auth()->user()->role !== 'admin') {
        $query->where('user_id', auth()->id());
    }
    $processos = $query->get();

    return view('processos.listar', compact('processos'));
}

public function exportExcel()
{
    return Excel::download(new ProcessosExport, 'processos.xlsx');
}

public function exportPdf()
{
    
    $query = Processo::query();
    if (!auth()->user() || auth()->user()->role !== 'admin') {
        $query->where('user_id', auth()->id());
    }
    $processos = $query->get();

    $pdf = Pdf::loadView('processos.listar', compact('processos'));
    return $pdf->download('processos.pdf');
}
