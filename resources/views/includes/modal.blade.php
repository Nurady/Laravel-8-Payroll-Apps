<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Jumlah Hari Kerja</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('config.store') }}" method="post">
            @csrf
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
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
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-warning" data-dismiss="modal">TUTUP</button>
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </form>
      </div>
    </div>
</div>