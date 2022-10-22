<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyUpadteRequest extends FormRequest
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
            'email'=>'required',
            'launchdate'=>'required',
            'description'=>'required',
            'city'=>'required',
            'country'=>'required',
            'languages'=>'required',
            'launchdate'=>'required',
            'zipcode'=>'required',
            'industry'=>'required',
            'website'=>'required',
            'file'=>'required|mimes:png,jpg,jpeg|max:5048'
        ];
    }
}
