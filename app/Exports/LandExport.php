<?php

namespace App\Exports;

use App\Models\Regions;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class LandExport implements FromView, ShouldAutoSize, WithEvents, WithStyles, WithTitle
{

    private $region_name;
    private $region;
    private $title;

    public function __construct(string $region_name = 'Республика', string $title = 'Қишлоқ хўжалиги ерларини "E-IJARA" ахборот тизимига киритилиши ва "E-AUKSION" га чиқарилиши тўғрисида <br> МАЪЛУМОТ', Regions $region = null)
    {
        $this->region_name = $region_name;
        $this->region = $region;
        $this->title = $title;
    }


    public function view(): View
    {
        if ($this->region == null) {
            $lands = Regions::select('nameuz', 'regionid')->where('regionid','<>',1726)->with('planned_reduced')->get();
            return view('exel.lands_regions_new', [
                'lands' => $lands,
                'title' => $this->title
            ]);
        } else {
            $lands = Regions::select('nameuz', 'regionid')->where('regionid', $this->region->regionid)->first();

            return view('exel.lands_region_new', [
                'lands' => $lands,
                'title' => $this->title,
                'region_id' => $this->region,
            ]);

        }


    }
//    public function registerEvents(): array
//    {
//        return [
//            AfterSheet::class => function (AfterSheet $event) {
//                $event->sheet->getDelegate()->getRowDimension('2')->setRowHeight(80);
//                $event->sheet->autoSize();
//
//            },
//        ];
//    }


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

    public function title(): string
    {
        return $this->region_name;
    }
}
