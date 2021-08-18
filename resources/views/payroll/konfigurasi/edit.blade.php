<form action="{{ route('config.update', $config->id) }}" method="post" id="form-edit">
    @csrf
    @method('PUT')
    <div class="modal-body">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" id="id_data" value="{{ $config->id }}">
                        <div class="form-group">
                            <input 
                                type="number" 
                                name="jumlah_hari_kerja" 
                                id="jumlah_hari_kerja" 
                                class="form-control @error('jumlah_hari_kerja') is-invalid @enderror"
                                value={{ $config->jumlah_hari_kerja }}>
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
        <button type="buttom" class="btn btn-primary btn-update">SIMPAN</button>
    </div>
</form>