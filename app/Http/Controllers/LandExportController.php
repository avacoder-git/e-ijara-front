<?php

namespace App\Http\Controllers;

use App\Exports\ExportReportMultipleSheet;
use App\Exports\LandMultipleExport;
use App\Models\Regions;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use NotificationChannels\Telegram\TelegramFile;
use NotificationChannels\Telegram\TelegramUpdates;

class LandExportController extends Controller
{
    public function export()
    {
        if (Auth::check() && Auth::user()->email == 'davronee@gmail.com') {
//            $lands = Regions::select('nameuz', 'regionid')->with('planned_reduced')->get();
//            return view('exel.lands_regions_new', [
//                'lands' => $lands,
//                'title' => 'title'
//            ]);

            return Excel::download(new LandMultipleExport(), 'lots_' . Carbon::now() . '.xlsx');
        } else
            abort(404);

    }

    public function exportReports()
    {
        return Excel::download(new ExportReportMultipleSheet(), 'land_report' . Carbon::now() . '.xlsx');
    }
}
