@extends('layouts.master')
@section('title','Karyawan')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Master Karyawan</h1>
            </div>     

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-6 col-12">
                  <div class="card">
                    <div class="card-body">
                     <p>Nama Karyawan : {{ $nama_karyawan }}</p>
                     <p>Nama Jabatan : {{ $nama_jabatan->nama_jabatan }}</p>
                     <p>Gaji Pokok : {{ number_format($nama_jabatan->gaji_pokok, 0, '.', '.') }}</p>
                     <p>Nama Ayah : {{ $nama_ayah->nama }}</p>
                     <p>Nama Ibu : {{ $nama_ibu->nama }}</p>
                     <p>Detail : {{ $detail }}</p>
                     <p>Alamat : {{ $address->alamat }}, {{ $address->handphone }}</p>
                     <hr>
                     <p>Hak Akses</p>
                        @foreach ($user as $item)
                            <p>{{ $item->nama }}</p>   
                        @endforeach
                      <hr>
                        <p>Ubah Data User dimiliki oleh:</p>
                          @foreach ($role as $item)
                              <p>{{ $item->username }}</p>   
                          @endforeach
                    </div>
                    </div>
                  </div>
                </div>
              </div>
        </section>
    </div>
@endsection

