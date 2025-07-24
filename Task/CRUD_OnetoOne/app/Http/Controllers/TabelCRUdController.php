<?php

namespace App\Http\Controllers;

use App\Models\nisn;
use Illuminate\Http\Request;

class TabelCRUdController extends Controller
{
    public function index()
    {
        return view('Tabel-CRUD.home');
    }

    public function create()
    {
        $nisn = nisn::get();

        return view('Tabel-CRUD.create');
    }
}
