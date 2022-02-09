<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKaryawanRequest extends FormRequest
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
            'uniqueID' => 'required',
            'nipkyn',
            'namakyn' => 'required',
            'jabatankyn' => 'required',
            'alamatkyn' => 'required',
            'emailkyn' => 'required',
            'hpkyn' => 'required',
            'jkkyn' => 'required',
            'statuskyn' => 'required',
            'agamakyn' => 'required',
            'imagekyn'
        ];
    }
}
