<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Shared\Date;


class ContactsExport implements FromCollection,ShouldAutoSize, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Contact::orderBy('created_at', 'DESC')->get();
    }

    public function headings(): array{
        return [
            // 'No',
            'Sender',
            'Email',
            'Country',
            'Messages',
            'Date Created',
        ];
    }

    public function map($row): array{
        return [
            $row->name,
            $row->email,
            $row->country,
            $row->message,
            date('d/m/y H:i', strtotime($row->created_at))
            
        ];
    }

    public function columnFormats(): array {
        return [
            'F' => NumberFormat::FORMAT_DATE_DATETIME,
        ];
    }

    public function styles(Worksheet $sheet) {
        return [ 1 => ['font' => ['bold' => true ]]];
    }
}
