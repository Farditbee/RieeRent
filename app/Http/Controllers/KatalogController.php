<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use App\DataTables\KatalogDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKatalogRequest;
use App\Http\Requests\UpdateKatalogRequest;
use Illuminate\Support\Facades\Storage;

class KatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $katalogs = Katalog::latest()->paginate(10);

        //render view with katalogs
        return view('data.katalog.index', compact('katalogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data.katalog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKatalogRequest $request)
    {

        //upload image
        $image = $request->file('thumbnail');
        $image->storeAs('public/katalogs', $image->hashName());

        //create post
        Katalog::create([
            'thumbnail' => $image->hashName(),
            'kode'     => $request->kode,
            'nama'   => $request->nama,
            'model'   => $request->model,
            'ukuran'   => $request->ukuran,
            'harga'   => $request->harga,
            'stok'   => $request->stok,
            'keterangan'   => $request->keterangan,
        ]);

        // try {
        //     Katalog::create($request->validated());
        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('error', $th->getMessage())->withInput();
        // }

        return redirect()->back()->with('success', 'Berhasil menambahkan Katalog Baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(Katalog $katalog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Katalog $katalog)
    {
        return view('data.katalog.edit', compact('katalog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKatalogRequest $request, Katalog $katalog)
    {
        //check if image is uploaded
        if ($request->hasFile('thumbnail')) {

            //upload new image
            $image = $request->file('thumbnail');
            $image->storeAs('public/katalogs', $image->hashName());

            //delete old image
            Storage::delete('public/katalogs/'.$katalog->thumbnail);

            //update post with new image
            $katalog->update([
            'thumbnail' => $image->hashName(),
            'kode'     => $request->kode,
            'nama'   => $request->nama,
            'model'   => $request->model,
            'ukuran'   => $request->ukuran,
            'harga'   => $request->harga,
            'stok'   => $request->stok,
            'keterangan'   => $request->keterangan,
            ]);

        } else {

            //update post without image
            $katalog->update([
                'kode'     => $request->kode,
                'nama'   => $request->nama,
                'model'   => $request->model,
                'ukuran'   => $request->ukuran,
                'harga'   => $request->harga,
                'stok'   => $request->stok,
                'keterangan'   => $request->keterangan,
            ]);
        }
        return redirect()->back()->with('success', 'Berhasil Mengubah Katalog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Katalog $katalog)
    {
        Storage::delete('public/katalogs/'. $katalog->thumbnail);

        //delete katalog
        try {
            $katalog->delete();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal menghapus Data Katalog ' . $th->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil menghapus Data Katalog');
    }
}
