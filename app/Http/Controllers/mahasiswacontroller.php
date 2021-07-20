<?php

namespace App\Http\Controllers;
use App\mahasiswa;
use App\user;
use Illuminate\Http\Request;

class mahasiswacontroller extends Controller
{
    public function index()
    {
        $mahasiswa = mahasiswa::with(['user'])->get();//select * from nama_table   
        return View('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
         $user = user::all();
         return view('mahasiswa.create', compact('user'));
    }

    public function store(Request $request)
    {
        
        mahasiswa::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan.');
        return redirect()->route('mahasiswa');
    }

    public function edit($id)
    {
        $user = user::all();
        $mahasiswa =mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa','user'));
    }

    public function update(Request $request, $id)
    {
        $mahasiswa =mahasiswa::find($id);  
        $mahasiswa->update($request->all()); 
        toast('Waow Berhasil Mengedit Data','success');
        return redirect()->route('mahasiswa');
    }

    public function destroy($id)
    {
        $mahasiswa =mahasiswa::find($id);
        $mahasiswa->delete();
        toast('Waow Berhasil Menghapus Data','success');
        return redirect()->route('mahasiswa');  
    }
}
