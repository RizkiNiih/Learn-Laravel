<?php

namespace App\Http\Controllers;

use App\Models\Nisn;
use App\Models\Student;
use Illuminate\Http\Request;

class TabelCRUdController extends Controller
{
    public function index()
    {
        $students = Student::with('nisn')->get();
        return view('Tabel-CRUD.home', compact('students'));
    }

    public function create()
    {
        $nisn = Nisn::get();

        return view("Tabel-CRUD.create", compact('nisn'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama'              => 'required',
            'nis'               => 'required',
            'nisn'              => 'required',
            'tempatlahir'       => 'required',
            'tanggallahir'      => 'required',
            'jeniskelamin'      => 'required',
            'agama'             => 'required',
            'email'             => 'required',
            'hobi'              => 'required',
            'warna'             => 'required'
        ]);

        $data                   = new Student();
        $data->nama             = $request->nama;
        $data->nis              = $request->nis;
        $data->tempatlahir      = $request->tempatlahir;
        $data->tanggallahir     = $request->tanggallahir;
        $data->jeniskelamin     = $request->jeniskelamin;
        $data->agama            = $request->agama;
        $data->email            = $request->email;
        $data->hobi             = implode(', ', $request->hobi);
        $data->warna            = $request->warna;
        // $data->save();

        if ($request->hasFile('image')) { 
            $file = $request->file('image');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('images'), $filename); // simpan ke folder public/images
            $data->image = $filename;
        }
        $data->save();

        $nisn                   = new Nisn();
        $nisn->id_student       = $data->id;
        $nisn->nisn             = $request->nisn;
        $nisn->save();

        $message = [
            "status" => "success",
            "message" => "Data created successfully"
        ];

        if ($request->has('save_and_add_other')) {
            return redirect()->route('Tabel-CRUD.create')->with("message", $message);
        } else {
            return redirect()->route('Tabel-CRUD.index')->with("message", $message);
        }

    }
}
