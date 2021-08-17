@extends('layouts.master')
@section('title','Dashboard')

@section('content')
  <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Admin</h4>
                  </div>
                  <div class="card-body">
                    10
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>News</h4>
                  </div>
                  <div class="card-body">
                    42
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Reports</h4>
                  </div>
                  <div class="card-body">
                    1,201
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Online Users</h4>
                  </div>
                  <div class="card-body">
                    47
                  </div>
                </div>
              </div>
            </div>
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
              <div class="mb-3 text-right">
                <a href="{{ route('tambah-data') }}" class="btn btn-icon icon-left btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
              </div>
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Kode Barang</th>
                          <th scope="col">Nama Barang</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($products as $key=>$product)
                          <tr>
                            <th>{{ $products->firstItem() + $key }}</th>
                            <td>{{ $product->kode_barang }}</td>
                            <td>{{ $product->nama_barang }}</td>
                            <td>
                              <a href="{{ route('edit-data', $product->id) }}" class="badge badge-primary">Edit</a>
                              <a href="#" data-id={{ $product->id }} class="badge badge-danger swal-delete">
                                <form action="{{ route('delete-data', $product->id) }}" method="post" id="delete{{ $product->id }}">
                                  @csrf
                                  @method('delete')
                                </form>
                                Hapus
                              </a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{ $products->links() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
  </div>  
@endsection

@push('libraries-script')
  <script src="{{ asset('js/sweetalert.min.js') }}"></script>
@endpush

@push('after-script')
  <script>
    $(".swal-delete").click(function(e) {
      id = e.target.dataset.id;
      swal({
          title: 'Yakin Menghapus Data ' + id + ' ?',
          text: 'Data tidak dapat dikembalikan',
          icon: 'warning',
          buttons: ["Tidak", "Ya, Hapus"],
          // buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $(`#delete${id}`).submit();
            // swal('Berhasil menghapus data', {
            //   icon: 'success',
            //   timer: 3000,
            // });
          } else {
            swal('Data tidak jadi dihapus');
          }
        });
    });
  </script>
@endpush