<div class="modal fade modalTambah" id="tambahModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="form-tambah">
                    @csrf
                    <div class="mb-3" id="input-1">
                        <label for="" class="col-form-label"></label>
                        <input type="text" class="form-control" id="" name="" required>
                    </div>
                    <div class="mb-3" id="input-2">
                        <label for="" class="col-form-label"></label>
                        <input type="number" class="form-control" id="" name="" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="tambah-data-asset">Tambah Data</button>
            </div>
        </div>
    </div>
</div>

{{-- <div class="modal fade modalTambah" id="assetModal" tabindex="-1" aria-labelledby="assetLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="assetLabel">Tambah Data Asset</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('tambahAsset') }}" method="post" id="form-tambah-asset">
                    @csrf
                    <div class="mb-3">
                        <label for="jumlah-asset" class="col-form-label">Jumlah Asset</label>
                        <input type="text" class="form-control" id="jumlah-asset" name="jumlah_asset" required>
                    </div>
                    <div class="mb-3">
                        <label for="tahun-asset" class="col-form-label">Tahun</label>
                        <input type="text" class="form-control" id="tahun-asset" name="tahun_asset" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="tambah-data-asset">Tambah Data</button>
            </div>
        </div>
    </div>
</div> --}}

