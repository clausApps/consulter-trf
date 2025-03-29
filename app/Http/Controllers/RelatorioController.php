<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Processo;
use App\Exports\ProcessosExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class RelatorioController extends Controller
{
    public function excel()
    {
        return Excel::download(new ProcessosExport, 'relatorio_processos.xlsx');
    }

    public function pdf()
    {
        $processos = Processo::limit(10)->get();

        $pdf = PDF::loadView('relatorios.processos', compact('processos'));
        return $pdf->download('relatorio_processos.pdf');
    }
}
