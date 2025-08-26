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
            $file->move(public_path('storage/images'), $filename); // simpan ke folder public/images
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

    public function edit($id)
    {
        $student = Student::with('nisn')->where('id',$id)->first();
        $nisn = Nisn::get();

        return view('Tabel-CRUD.edit', compact('student', 'nisn'));
    }

    public function update(Request $request, $id)
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

        $data                   = Student::where('id', $id)->first();
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
            $file->move(public_path('storage/images'), $filename); // simpan ke folder public/images
            $data->image = $filename;
        }
        $data->update();

        $nisn = Nisn::where('id_student', $data->id)->first();
        if ($nisn) {
            $nisn->nisn = $request->nisn;
            $nisn->update();
        } else {
            $nisn = new Nisn();
            $nisn->id_student = $data->id;
            $nisn->nisn = $request->nisn;
            $nisn->update();
        }


        $message = [
            "status" => "success",
            "message" => "Data created successfully"
        ];

        if ($request->has('update_and_continue_editing')) {
            return redirect()->back()->with("message", $message);
        } else {
            return redirect()->route('Tabel-CRUD.index')->with("message", $message);
        }
    }
    
    public function destroy($id)
    {
        $data = Student::find($id);
        if ($data) {
            $data->delete();
        }

        return redirect()->route('Tabel-CRUD.index')->with('message', [
            'status' => 'success',
            'message' => 'Data deleted successfully.'
        ]);
    }

}
