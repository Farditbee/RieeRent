<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAccRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('create', Acc::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'gambar' => ['nullable', 'max:4096', 'mimes:jpeg,png,jpg,gif,svg',],
            'kode' => ['required', 'string'],
            'model' => ['required', 'string'],
            'nama' => ['required', 'string'],
            'harga' => ['required', 'numeric'],
            'stok' => ['required',],
            'keterangan' => ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'kode.required' => 'Kode harus diisi',
            'kode.string' => 'Kode harus berupa string',
            'gambar.required' => 'Gambar harus diisi',
            'gambar.image' => 'Gambar harus berupa Gambar',
            'gambar.max' => 'Gambar maksimal 4MB',
            'gambar.mimes' => 'Gambar harus berupa file PNG, JPG, atau JPEG',
            'nama.required' => 'Nama harus diisi',
            'nama.string' => 'Nama harus berupa string',
            'harga.required' => 'Harga harus diisi',
            'harga.numeric' => 'Harga harus berupa numeric',
            'stok.required' => 'Stok harus diisi',
            'keterangan.required' => 'Keterangan harus diisi',
            'keterangan.string' => 'Keterangan harus berupa string',
        ];
    }
}
