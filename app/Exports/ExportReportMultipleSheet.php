<?php

namespace App\Exports;

use App\Models\Regions;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportReportMultipleSheet implements FromView, ShouldAutoSize, WithEvents, WithStyles
{


    public function view(): View
    {
        $regions = Regions::all();
        return view('exel.land_report_all', [
            'regions' => $regions
        ]);
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $to = $event->sheet->getDelegate()->getHighestRowAndColumn();

                $event->sheet->getDelegate()->getRowDimension('1')->setRowHeight(50);
                $event->sheet->autoSize();

                $event->sheet->getDelegate()->getRowDimension('6')->setRowHeight(30);
                $event->sheet->autoSize();


                $event->sheet->getDelegate()->getStyle('A1:' . $to['column'] . '1')
                    ->getFont()
                    ->setSize('18')
                    ->setBold(true);

                $event->sheet->getDelegate()->getStyle('A2:' . $to['column'] . '3')
                    ->getFont()
                    ->setSize('16')
                    ->setBold(true);


                $event->sheet->getDelegate()->getStyle('A1:' . $to['column'] . $to['row'])
                    ->getAlignment()
                    ->setVertical((\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER))
                    ->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);


                $event->sheet->getDelegate()->getStyle('A1:' . $to['column'] . $to['row'])->applyFromArray([
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => '000000'],
                        ],
                    ],
                ]);
            },
        ];
    }

    public function styles(Worksheet $sheet)
    {
        // TODO: Implement styles() method.
    }

}
