<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobCreationRequest extends FormRequest
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
            'title'=>'required',
            'description'=>'required|max:200',
            'type'=>'required',
            'category'=>'required',
            'avaliability'=>'required',
            'experiencelevel'=>'required',
            'location'=>'required',
            'skills'=>'required',
            'languages'=>'required',
            'file'=>'required|mimes:jpg,jpeg,png,docx,pdf|max:5024'
        ];
    }
}
