<?php

namespace App\Exports;

use App\Models\Processo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProcessosExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Processo::limit(10)->get(['numero', 'nome_autor', 'vara', 'valor_causa']);
    }

    public function headings(): array
    {
        return ['Número', 'Autor', 'Vara', 'Valor'];
    }
}
