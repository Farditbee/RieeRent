<?php

namespace App\Http\Requests;

use App\Models\Katalog;
use Illuminate\Foundation\Http\FormRequest;

class StoreKatalogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return $this->user()->can('create', Katalog::class);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'thumbnail' => ['nullable', 'max:4096'],
            'kode' => ['required', 'string'],
            'model' => ['required', 'string'],
            'nama' => ['required', 'string'],
            'ukuran' => ['required',],
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
            'thumbnail.required' => 'Thumbnail harus diisi',
            'thumbnail.image' => 'Thumbnail harus berupa gambar',
            'thumbnail.max' => 'Thumbnail maksimal 4MB',
            'thumbnail.mimes' => 'Thumbnail harus berupa file PNG, JPG, atau JPEG',
            'nama.required' => 'Nama harus diisi',
            'nama.string' => 'Nama harus berupa string',
            'ukuran.required' => 'Ukuran harus diisi',
            'harga.required' => 'Harga harus diisi',
            'harga.numeric' => 'Harga harus berupa numeric',
            'stok.required' => 'Stok harus diisi',
            'keterangan.required' => 'Keterangan harus diisi',
            'keterangan.string' => 'Keterangan harus berupa string',
        ];
    }
}
