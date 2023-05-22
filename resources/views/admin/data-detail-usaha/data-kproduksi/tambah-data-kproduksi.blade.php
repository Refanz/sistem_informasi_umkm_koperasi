<div class="modal fade modalTambah" id="kproduksiModal" tabindex="-1" aria-labelledby="kproduksiLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="kproduksiLabel">Tambah Data Kapasitas Produksi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('tambahKProduksi') }}" method="post" id="form-tambah-kproduksi">
                    @csrf
                    <div class="mb-3">
                        <label for="jumlah-kproduksi" class="col-form-label">Jumlah Kapasitas Produksi</label>
                        <input type="text" class="form-control" id="jumlah-kproduksi" name="jumlah_kproduksi" required>
                    </div>
                    <div class="mb-3">
                        <label for="tahun-kproduksi" class="col-form-label">Tahun</label>
                        <input type="text" class="form-control" id="tahun-kproduksi" name="tahun_kproduksi" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="tambah-data-kproduksi">Tambah Data</button>
            </div>
        </div>
    </div>
</div>

