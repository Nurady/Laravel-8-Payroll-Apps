@extends('layouts.master')
@section('title','Tambah Data')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Data Barang</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-6 col-sm-6 col-12">
                    <div class="card">
                        {{-- <div class="card-header">
                            <h4>Form Tambah Data</h4>
                        </div> --}}
                        <div class="card-body">
                            <form action="{{ route('simpan-data') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="kode_barang">Kode Barang</label>
                                            <input 
                                                type="text" 
                                                name="kode_barang" 
                                                id="kode_barang" 
                                                class="form-control @error('kode_barang') is-invalid @enderror"
                                                value={{ old('kode_barang') }}>
                                            @error('kode_barang')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama_barang">Nama Barang</label>
                                            <input 
                                                type="text" 
                                                name="nama_barang" 
                                                id="nama_barang" 
                                                class="form-control @error('nama_barang') is-invalid @enderror"
                                                value={{ old('nama_barang') }}>
                                            @error('nama_barang')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">SIMPAN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>   
@endsection