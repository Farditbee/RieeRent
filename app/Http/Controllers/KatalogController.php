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
    // Upload the image
    if ($request->hasFile('thumbnail')) {
        $image = $request->file('thumbnail');
        $imageName = $image->hashName(); // Get unique hash name for the image

        // Save the image to katalogs folder in storage/app/public
        $image->storeAs('katalogs', $imageName); // Save without duplicating 'public' in path
    }

    // Create a new catalog entry
    Katalog::create([
        'thumbnail'   => $imageName ?? null, // Save the image name or null if no image uploaded
        'kode'        => $request->kode,
        'nama'        => $request->nama,
        'model'       => $request->model,
        'ukuran'      => $request->ukuran,
        'harga'       => $request->harga,
        'stok'        => $request->stok,
        'keterangan'  => $request->keterangan,
    ]);

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
    // Check if new image is uploaded
    if ($request->hasFile('thumbnail')) {
        // Upload new image
        $image = $request->file('thumbnail');
        // Get the file name (you can keep it the same as the old one or use a new name)
        $imageName = $image->hashName(); // You can use a fixed name if you want to retain the old file name

        // Save the image to the katalogs folder in storage/app/public
        $image->storeAs('katalogs', $imageName);  // This will save to storage/app/public/katalogs

        // Delete the old image if exists
        Storage::delete('public/katalogs/' . $katalog->thumbnail);

        // Update the catalog entry with the new image and other data
        $katalog->update([
            'thumbnail' => $imageName,
            'kode'      => $request->kode,
            'nama'      => $request->nama,
            'model'     => $request->model,
            'ukuran'    => $request->ukuran,
            'harga'     => $request->harga,
            'stok'      => $request->stok,
            'keterangan'=> $request->keterangan,
        ]);
    } else {
        // If no new image is uploaded, update the catalog without changing the image
        $katalog->update([
            'kode'      => $request->kode,
            'nama'      => $request->nama,
            'model'     => $request->model,
            'ukuran'    => $request->ukuran,
            'harga'     => $request->harga,
            'stok'      => $request->stok,
            'keterangan'=> $request->keterangan,
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
