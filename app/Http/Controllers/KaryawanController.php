<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $karyawan = Karyawan::all();
        return view('karyawan.index',['karyawan'=>$karyawan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nip'=>'required',
            'nama_karyawan'=>'required',
            'gaji_karyawan'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
        ],[

            'nip.required' => 'NIP Wajib Diisi',
            'nama_karyawan.required' => 'Nama Karyawan Wajib Diisi',
            'gaji_karyawan.required' => 'Gaji Karyawan Wajib Diisi',
            'alamat.required' => 'Alamat Wajib Diisi',
            'jenis_kelamin.required' => 'Jenis Kelamin  Wajib Diisi',
        ]);

        $data =[
            'nip' => $request->input('nip'),
            'nama_karyawan' => $request->input('nama_karyawan'),
            'gaji_karyawan' => $request->input('gaji_karyawan'),
            'alamat' => $request->input('alamat'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),

        ];
        Karyawan::create($data);
        return redirect('karyawan')->with('success','Nama Karyawan Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $data = Karyawan::where('nip',$id)->first();
        return view ('karyawan.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nip'=>'required',
            'nama_karyawan'=>'required',
            'gaji_karyawan'=>'required',
            'alamat'=>'required',
            'jenis_kelamin'=>'required',
        ],[

            'nip.required' => 'NIP Wajib Diisi',
            'nama_karyawan.required' => 'Nama Karyawan Wajib Diisi',
            'gaji_karyawan.required' => 'Gaji Karyawan Wajib Diisi',
            'alamat.required' => 'Alamat Wajib Diisi',
            'jenis_kelamin.required' => 'Jenis Kelamin  Wajib Diisi',
        ]);

        $data =[
            'nip' => $request->nip,
            'nama_karyawan' => $request->nama_karyawan,
            'gaji_karyawan' => $request->gaji_karyawan,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,

        ];
        Karyawan::where('nip',$id)->update($data);
        return redirect('karyawan')->with('success','Nama Karyawan Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Karyawan::where('nip',$id)->delete();
        return redirect('karyawan')->with('success','Nama Karyawan Berhasil Dihapus');
    }
}
