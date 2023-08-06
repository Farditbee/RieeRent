<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKatalogRequest;
use App\Http\Requests\UpdateKatalogRequest;
use Illuminate\Support\Facades\Storage;

class CustomerKatalogController extends Controller
{
    public function index()
    {
        $katalogs = Katalog::latest()->paginate(10);

        //render view with katalogs
        return view('data.katalog_kostum.index', compact('katalogs'));
    }
}
