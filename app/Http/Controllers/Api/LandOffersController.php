<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LandOffers;
use App\Models\SmsApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class LandOffersController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'phone' => 'required',
            'sentence' => 'required',
            'person_type' => 'required',
            'land_purpose' => 'required',
            'land_id' => 'required',
        ]);

        $land_offers = new LandOffers();
        $land_offers->fullname = $request->fullname;
        $land_offers->phone = $request->phone;
        $land_offers->comment = $request->sentence;
        $land_offers->person_type = $request->person_type;
        $land_offers->user_id = Auth::id();
        $land_offers->purpose_id = $request->land_purpose;
        $land_offers->land_id = $request->land_id;
        $land_offers->save();

        if ($land_offers) {

            $http = Http::withBasicAuth(env('SMS_LOGIN'), env('SMS_PASSWORD'))->post(env('SMS_ENDPOINT'), [
                'messages' => [
                    'recipient' => $request->phone,
                    'message-id' => $land_offers->id,
                    'sms' => [
                        "originator" => "3700",
                        'content' => [
                            'text' => "Sizning yer ushastkasini tanlovga chiqarish ushun $land_offers->id-son arizangiz qabul qilindi. Arizangiz holatini $land_offers->id-maxsus kod orqali kuzatib borishingiz mumkin"
                        ]

                    ]
                ]
            ]);

            if ($http->successful()) {
                $sms_api = new SmsApi();
                $sms_api->land_offer_id = $land_offers->id;
                $sms_api->recipient = $request->phone;
                $sms_api->message_id = $land_offers->id;
                $sms_api->originator = "3700";
                $sms_api->text = "Sizning yer ushastkasini tanlovga chiqarish ushun $land_offers->id-son arizangiz qabul qilindi. Arizangiz holatini $land_offers->id-maxsus kod orqali kuzatib borishingiz mumkin";
                $sms_api->response = json_encode($http->body());
                $sms_api->http_status = $http->status();
                $sms_api->save();
            } else {
                return response()->json([
                    'land_offers' => $http->body()
                ]);
            }


            return response()->json([
                'land_offers' => $land_offers
            ]);
        } else {
            return response()->json([
                'land_offers' => null
            ]);
        }

    }

    public function show($id)
    {
        $land_offer = LandOffers::find($id);

        if ($land_offer)
            return response()->json([
                'status' => 'Сизнинг аризангиз кўриб чиқилмоқда!'
            ]);
        else
            return response()->json([
                'status' => 'Бундая ариза мавжуд эмас!'
            ]);


    }
}
