<?php

namespace App\Http\Requests\Application;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "lands" => "nullable|array",
            "geometry" => "nullable|array",
            "land_purpose_id" => "required|numeric|not_in:0",
            "district_id" => "required|numeric|exists:districts,id",
            "region_id" => "required|numeric|exists:regions,id",
            "period" => "required|numeric",
            "draw_type" => "required|numeric",
        ];
    }

    public function messages()
    {
        return [
            'land_purpose_id.required' => 'Ijara maqsadini kiriting',
            'district_id.required' => 'Tumanni tanlang',
            'region_id.required' => 'Viloyatni tanlang',
            'period.required' => 'Ijaraga olish muddatini tanlang',
        ];
    }
}
