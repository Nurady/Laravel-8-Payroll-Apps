@extends('layouts.master')
@section('title','Divisi')

@section('content')
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Master Divisi</h1>
          </div>
          @if (session()->has('success')) 
            <x-alert type="success" title="Horeeyyyy">
                {{ session()->get('success') }}
            </x-alert>
          @endif

          @if (session()->has('warning')) 
            <x-alert type="warning" title="Horeeyyyy">
                {{ session()->get('warning') }}
            </x-alert>
          @endif

          @if (session()->has('primary')) 
            <x-alert type="primary" title="Horeeyyyy">
                {{ session()->get('primary') }}
            </x-alert>
          @endif

          {{-- @if (session()->has('status')) 
            <div class="alert alert-success alert-dismissible show fade">
              <div class="alert-body">
                <button class="close" data-dismiss="alert">
                  <span>&times;</span>
                </button>
                {{ session()->get('status') }}
              </div>
            </div>
          @endif --}}

          {{-- @can('tambah_divisi', App\Models\Division::class) --}}
          @can('tambah_data') 
            <div class="row">
              <div class="col-12">
                  <form action="{{ route('divisi.store') }}" method="post">
                      @csrf
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <input 
                                      type="text" 
                                      name="name" 
                                      id="name" 
                                      placeholder="masukkan nama divisi"
                                      class="form-control @error('name') is-invalid @enderror"
                                      value="{{ old('name') }}">
                                  @error('name')
                                      <span class="text-danger">{{ $message }}</span>
                                  @enderror
                              </div>
                          </div>
                      </div>
                      <div class="mb-5">
                          <button type="submit" class="btn btn-icon icon-left btn-primary"><i class="fa fa-plus"></i> Tambah Data</button>
                          {{ SiteHelpers::cek_akses()->name }}
                      </div>
                  </form>
              </div>
            </div>
        @endcan
        
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-6 col-12">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Divisi</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($divisions as $key=>$division)
                            <tr>
                                <th>{{ $key + 1 }}</th>
                                <td>{{ $division->name }}</td>
                                <td>
                                    <div class="d-flex">
                                      {{-- @can('tambah_divisi', App\Models\Division::class) --}}
                                        @can('hapus_edit_data')
                                        <div class="mr-3">
                                            <a href="{{ route('divisi.edit', $division->id) }}" class="badge badge-primary btn-edit">
                                              Edit
                                            </a>
                                        </div>
                                          <form action="{{ route('divisi.destroy', $division->id) }}" method="post">
                                              @csrf
                                              @method('delete')
                                                  <button type="submit" class="btn btn-sm btn-icon icon-left btn-danger">Hapus</button>
                                          </form>
                                        @else
                                          Tidak ada aksi
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                          @empty 
                            <tr>
                                <td colspan="3" class="text-center">
                                    Tidak Ada Data
                                </td>
                            </tr>
                          @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
    </div>
@endsection

