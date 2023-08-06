<?php

namespace App\Http\Controllers;

use App\Models\Acc;
use App\DataTables\AccDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAccRequest;
use App\Http\Requests\UpdateAccRequest;
use Illuminate\Support\Facades\Storage;

class AccController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accs = Acc::latest()->paginate(10);

        //render view with accs
        return view('data.acc.index', compact('accs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('data.acc.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAccRequest $request)
    {

        //upload image
        $image = $request->file('gambar');
        $image->storeAs('public/aksesoris', $image->hashName());

        //create post
        Acc::create([
            'gambar' => $image->hashName(),
            'kode'     => $request->kode,
            'nama'   => $request->nama,
            'model'   => $request->model,
            'ukuran'   => $request->ukuran,
            'harga'   => $request->harga,
            'stok'   => $request->stok,
            'keterangan'   => $request->keterangan,
        ]);

        // try {
        //     Acc::create($request->validated());
        // } catch (\Throwable $th) {
        //     return redirect()->back()->with('error', $th->getMessage())->withInput();
        // }

        return redirect()->back()->with('success', 'Berhasil menambahkan Aksesoris Baru');
    }

    /**
     * Display the specified resource.
     */
    public function show(Acc $acc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Acc $acc)
    {
        return view('data.acc.edit', compact('acc'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAccRequest $request, Acc $acc)
    {
        //check if image is uploaded
        if ($request->hasFile('gambar')) {

            //upload new image
            $image = $request->file('gambar');
            $image->storeAs('public/aksesoris', $image->hashName());

            //delete old image
            Storage::delete('public/aksesoris/'.$acc->gambar);

            //update post with new image
            $acc->update([
            'gambar' => $image->hashName(),
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
            $acc->update([
                'kode'     => $request->kode,
                'nama'   => $request->nama,
                'model'   => $request->model,
                'ukuran'   => $request->ukuran,
                'harga'   => $request->harga,
                'stok'   => $request->stok,
                'keterangan'   => $request->keterangan,
            ]);
        }
        return redirect()->back()->with('success', 'Berhasil Mengubah data Aksesoris');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Acc $acc)
    {
        Storage::delete('public/aksesoris/'. $acc->gambar);

        //delete Acc
        try {
            $acc->delete();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Gagal menghapus Data Acc ' . $th->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil menghapus Data Aksesoris');
    }
}
