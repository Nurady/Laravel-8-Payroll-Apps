@extends('layouts.master')
@section('title','Dashboard')

@section('content')
  <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Setup Aplikasi</h1>
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

          @if (session()->has('login-success')) 
            <div class="alert alert-success alert-dismissible show fade">
              <div class="alert-body">
                <button class="close" data-dismiss="alert">
                  <span>&times;</span>
                </button>
                {{ session()->get('login-success') }}
              </div>
            </div>
          @endif

          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-6 col-12">
              <div class="mb-3">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Jumlah Hari Kerja</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($configs as $key=>$config)
                            <tr>
                                <th>{{ $key + 1 }}</th>
                                <td>{{ $config->jumlah_hari_kerja ?? '' }}</td>
                                <td>
                                    <a href="#" 
                                      class="badge badge-primary btn-edit"
                                      data-id="{{ $config->id }}">
                                      Edit
                                    </a>
                                </td>
                            </tr>
                          @empty 
                            <tr>
                                <td colspan="3" class="text-center">
                                    Tidak Ada Data
                                </td>
                            </tr>
                          @endforelse
                          {{-- @isset($configs)
                            <tr>
                                <th>{{ 1 }}</th>
                                <td>{{ $configs->jumlah_hari_kerja ?? '' }}</td>
                                <td>
                                    <a href="#" 
                                      class="badge badge-primary btn-edit"
                                      data-id="{{ $configs->id }}">
                                      Edit
                                    </a>
                                </td>
                            </tr>
                          @else 
                            <tr>
                                <td colspan="3" class="text-center">
                                    Tidak Ada Data
                                </td>
                            </tr>
                          @endisset --}}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      @include('includes.modal')     
      @include('includes.modal-edit') 
  </div>
@endsection


@push('libraries-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/prism.min.js" integrity="sha512-KMnxpSoayrFfRyh5p/Cv1QgVnuHtw4X7Vn38aXYt90FUDo5lRxhNLYFNX3Nib8UVJIrTUm3p2b0bt7/9TnqzGA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush
@push('after-script')
   <script src="{{ asset('assets/js/page/bootstrap-modal.js') }}"></script>
   <script>
     @if($errors->has('jumlah_hari_kerja'))
          $('#exampleModal').modal('show');
     @endif

     $('.btn-edit').on('click', function() {
       let id = $(this).data('id');

       $.ajax({
          url: `/config/${id}/edit`,
          method: 'GET',
          success: function(data) {
              // console.log(data);
              $('#modal-edit').find('.form-modal').html(data);
              $('#modal-edit').modal('show');
          },
          error: function(err) {
            console.log(err);
          }
       });
     })

    //  $('.btn-update').on('click', function() {
    //    let id = $('#form-edit').find('#id_data').val();
    //    let formData = $('#form-edit').serialize();
    //    consle.log(formData);

    //    $.ajax({
    //       url: `/config/${id}`,
    //       method: 'PUT',
    //       data: formData,
    //       success: function(data) {
    //         $('#modal-edit').modal('hide');
    //         window.location.assign('/config');
    //       },
    //       error: function(err) {
    //         console.log(err);
    //       }
    //    });
    //  })
   </script>
@endpush