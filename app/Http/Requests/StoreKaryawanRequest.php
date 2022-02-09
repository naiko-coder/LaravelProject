<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKaryawanRequest extends FormRequest
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
            'nip_kyn' => 'required',
            'nama_kyn' => 'required',
            'jabatan_kyn' => 'required',
            'alamat_kyn' => 'required',
            'email_kyn' => 'required',
            'hp_kyn' => 'required',
            'jk_kyn' => 'required',
            'status_kyn' => 'required',
            'agama_kyn' => 'required',
            'image_kyn' => 'required',
        ];
    }
}
