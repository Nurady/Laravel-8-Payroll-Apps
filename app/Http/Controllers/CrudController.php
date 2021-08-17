<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    public function tambah()
    {
        return view('pages.cruds.tambah-data');
    }

    public function simpan(Request $request)
    {
        // $request->validate([
        //     'kode_barang' => 'required|unique:products|min:5',
        //     'nama_barang' => 'required',
        // ],
        // [
        //     'kode_barang.required' => 'Kode Barang Tidak Boleh Kosong',
        //     'kode_barang.unique' => 'Kode Barang Sudah digunakan',
        //     'kode_barang.min' => 'Kode Barang Minimal 5 Huruf',
        //     'nama_barang.required' => 'Nama Barang Tidak Boleh Kosong',
        // ]);

        $this->formValidation($request);
        
        DB::table('products')->insert([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'created_at' => now(),
        ]);

        return redirect()->route('dashboard')->with('status', 'Berhasil Menambah Data!!');
    }

    public function edit($id)
    {
        $data = DB::table('products')
              ->where('id', $id)
              ->first();
        // dd($data);
        return view('pages.cruds.edit-data', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_barang' => ['required','min:5','unique:products,kode_barang,' . $id],
            'nama_barang' => 'required',
        ],
        [
            'kode_barang.required' => 'Kode Barang Tidak Boleh Kosong',
            'kode_barang.unique' => 'Kode Barang Sudah digunakan',
            'kode_barang.min' => 'Kode Barang Minimal 5 Huruf',
            'nama_barang.required' => 'Nama Barang Tidak Boleh Kosong',
        ]);
        
        DB::table('products')->where('id', $id)->update([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'updated_at' => now(),
        ]);

        return redirect()->route('dashboard')->with('status', 'Berhasil Mengubah Data!!');
    }

    public function delete($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect()->route('dashboard')->with('status', 'Berhasil Menghapus Data!!');
    }

    // fungsi validasi create
    public function formValidation(Request $request)
    {
        $request->validate([
            'kode_barang' => ['required','min:5','unique:products,kode_barang,'],
            'nama_barang' => 'required',
        ],
        [
            'kode_barang.required' => 'Kode Barang Tidak Boleh Kosong',
            'kode_barang.unique' => 'Kode Barang Sudah digunakan',
            'kode_barang.min' => 'Kode Barang Minimal 5 Huruf',
            'nama_barang.required' => 'Nama Barang Tidak Boleh Kosong',
        ]);
    }
}
