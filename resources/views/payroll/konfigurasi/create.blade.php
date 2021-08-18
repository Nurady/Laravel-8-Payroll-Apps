@extends('layouts.master')
@section('title','Tambah Data Configs')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Data Config</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('config.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="kode_barang">Jumlah Hari Kerja</label>
                                            <input 
                                                type="number" 
                                                name="jumlah_hari_kerja" 
                                                id="jumlah_hari_kerja" 
                                                class="form-control @error('jumlah_hari_kerja') is-invalid @enderror"
                                                value={{ old('jumlah_hari_kerja') }}>
                                            @error('jumlah_hari_kerja')
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