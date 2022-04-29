<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurposeStoreRequest extends FormRequest
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
            "region_id" => 'required|exists:regions,id',
            "district_id" => 'required|exists:districts,id',
            "period" => 'required|numeric',
            "land_purpose_id" => 'required|numeric',
            "geojson" => 'required',
        ];
    }
}
