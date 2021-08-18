@extends('layouts.master')
@section('title','Edit Divisi')

@section('content')
<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Edit Divisi</h1>
          </div>

          @if (session()->has('status')) 
            <div class="alert alert-success alert-dismissible show fade">
              <div class="alert-body">
                <button class="close" data-dismiss="alert">
                  <span>&times;</span>
                </button>
                {{ session()->get('status') }}
              </div>
            </div>
          @endif
          <div class="row">
            <div class="col-12">
                <form action="{{ route('divisi.update', $division->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input 
                                    type="text" 
                                    name="name" 
                                    id="name" 
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') ?? $division->name }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <button type="submit" class="btn btn-icon icon-left btn-primary"><i class="fa fa-plus"></i> Ubah Divisi</button>
                    </div>
                </form>
            </div>
          </div>
    </section>
</div>
@endsection

