<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class MahasiswaController extends Controller
{
    public function index(){
        $data = Mahasiswa::all();

        return view('DataMahasiswa', compact('data'));
    }
    public function tambah(Request $request){
        // dd($request->all());
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa')->with('success','Data Berhasi Ditambahkan');
    }
    public function tampil($id)
    {
       $data =  Mahasiswa::find($id);
        // dd($data);
        return view('editData', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Mahasiswa::find($id);
        $data->update($request->all());
        return redirect()->route('mahasiswa')->with('success','Data Berhasi DiUpdate');
    }

    public function delete($id){
        $data = Mahasiswa::find($id);
        $data->delete();
        return redirect()->route('mahasiswa')->with('success','Data Berhasi Dihapus');

    }
}