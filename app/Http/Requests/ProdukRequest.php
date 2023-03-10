<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdukRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [
            'judulProduk' => [
                'required'
            ],
            'deskripsiBarang' => [
                'required'
            ],
            'harga' => [
                'required', 'integer'
            ],
            'gambar' => [
                'nullable', 'image'
            ],
        ];

        return $rules;
    }
}
