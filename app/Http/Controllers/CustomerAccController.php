<?php

namespace App\Http\Controllers;

use App\Models\Acc;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAccRequest;
use App\Http\Requests\UpdateAccRequest;
use Illuminate\Support\Facades\Storage;

class CustomerAccController extends Controller
{
    public function index()
    {
        $accs = Acc::latest()->paginate(10);

        //render view with accs
        return view('data.katalog_acc.index', compact('accs'));
    }
}
