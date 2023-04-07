@extends('layouts.main-umkm')

@section('container')

<div class="container my-5">
    @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Peringatan!</strong> {{ $errors->all()[0] }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="card mb-5">
    <form method="post" action="{{ route('tambahUmkmUser') }}">
        @csrf
        {{-- Data Diri --}}
        <h4 class="mx-5 mt-5 text-center">Data Diri</h4>
        <div class="card-body px-5">
            <div class="row gx-xl-5">
                <div class="col-md-6 ">
                    <div class="form-group">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama_pemilik" placeholder="" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Sosial Media</label>
                        <input type="text" class="form-control" name="sosial_media" placeholder="" required />
                    </div>
                </div>
            </div>
            <div class="row gx-xl-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">No Hp</label>
                        <input type="text" class="form-control" name="no_telepon" placeholder="" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kelurahan</label>
                        <input type="text" class="form-control" name="kelurahan_pemilik" placeholder="" required />
                    </div>
                </div>
            </div>
            <div class="row gx-xl-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" name="kecamatan_pemilik" placeholder="" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="" required />
                    </div>
                </div>
            </div>

            <div class="row gx-xl-5">
                <div class="col-md-6 mb-5">
                    <div class="form-group">
                        <label class="form-label">Alamat</label>
                        <textarea type="text" class="form-control" name="alamat_pemilik" rows="6" required></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                        <select id="pendidikan" class="form-select" name="pendidikan_terakhir" required>
                            <option value=""> - </option>
                            <option value="S1">S1</option>
                            <option value="D3">D3</option>
                            <option value="SMA">SMA</option>
                            <option value="SMP">SMP</option>
                            <option value="SD">SD</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>

        <hr class="my-5 mx-5" />

        {{-- Data Usaha --}}
        <h4 class="mx-5 text-center">Data Usaha</h4>

        <div class="card-body px-5">
            <div class="row gx-xl-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Nama Usaha</label>
                        <input type="text" class="form-control" placeholder="" name="nama_usaha" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Bidang Usaha</label>
                        <input type="text" class="form-control" placeholder="" name="bidang_usaha" required />
                    </div>
                </div>
            </div>
            <div class="row gx-xl-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Jenis Produk</label>
                        <input type="text" class="form-control" placeholder="" name="jenis_produk" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Izin Usaha</label>
                        <input type="text" class="form-control" placeholder="" name="izin_usaha" required />
                    </div>
                </div>
            </div>
            <div class="row gx-xl-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kelurahan Tempat Usaha</label>
                        <input type="text" class="form-control" placeholder="" name="kelurahan_usaha" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Kecamatan Tempat Usaha</label>
                        <input type="text" class="form-control" placeholder="" name="kecamatan_usaha" required />
                    </div>
                </div>
            </div>
            <div class="row gx-xl-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">NIB/OSS</label>
                        <input type="text" class="form-control" placeholder="" name="nib" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">No. Pendataan UMKM</label>
                        <input type="text" class="form-control" placeholder="" name="no_pendataan_umkm" required />
                    </div>
                </div>
            </div>
            <div class="row gx-xl-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Permodalan Usaha</label>
                        <input type="text" class="form-control" placeholder="" name="permodalan_usaha" required />
                    </div>
                </div>
            </div>

            <div class="mt-2" id="aset">
                <div class="row-aset" style="display: inline-flex" id="row-0">
                    <div class="col-md-5 me-2">
                        <div class="form-group">
                            <label class="form-label">Aset</label>
                            <input type="text" name="aset[]" class="form-control" placeholder="" required />
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="form-label">T. Aset</label>
                            <input type="number" name="tahun_aset[]" class="form-control" placeholder="Tahun Aset" required />
                        </div>
                    </div>
                    <div class="col-md-1 pad-40">
                        <i class="fa fa-plus fa-lg box-icon" href="#" onclick="tambahFieldAset()"></i>
                    </div>
                </div>
            </div>
            <div id="omset">
                <div class="row-omset" style="display: inline-flex" id="row-0">
                    <div class="col-md-5 me-2">
                        <div class="form-group">
                            <label class="form-label">Omset</label>
                            <input type="text" name="omset[]" class="form-control" placeholder="" required />
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label class="form-label">T. Omset</label>
                            <input type="number" name="tahun_omset[]" class="form-control" placeholder="Tahun Omset" required />
                        </div>
                    </div>
                    <div class="col-md-1 pad-40">
                        <i class="fa fa-plus fa-lg box-icon" href="#" onclick="tambahFieldOmset()"></i>
                    </div>
                </div>
            </div>
            <div id="kapasitas-produksi">
                <div class="row-kapasitas-produksi" style="display: inline-flex" id="row-0">
                    <div class="col-md-5 me-2 col-4">
                        <div class="form-group">
                            <label class="form-label">Kapasitas Produksi</label>
                            <input type="text" name="kapasitas_produksi[]" class="form-control" placeholder="" required />
                        </div>
                    </div>
                    <div class="col-md-5 col-5">
                        <div class="form-group">
                            <label class="form-label">T. Kapasitas Produksi</label>
                            <input type="number" name="tahun_kapasitas_produksi[]" class="form-control" placeholder="Tahun Kapasitas Produksi" required />
                        </div>
                    </div>
                    <div class="col-md-1 pad-40">
                        <i class="fa fa-plus fa-lg box-icon" href="#" onclick="tambahFieldKapasitasProduksi()"></i>
                    </div>
                </div>
            </div>
            <div id="tenaga-kerja">
                <div class="row-tenaga-kerja" style="display: inline-flex" id="row-0">
                    <div class="col-md-5 col-4 me-2">
                        <div class="form-group">
                            <label class="form-label">Tenaga Kerja</label>
                            <input type="text" name="tenaga_kerja[]" class="form-control" placeholder="" required />
                        </div>
                    </div>
                    <div class="col-md-5 col-5">
                        <div class="form-group">
                            <label class="form-label">T. Tenaga Kerja</label>
                            <input type="number" name="tahun_tenaga_kerja[]" class="form-control" placeholder="Tahun Tenaga Kerja" required />
                        </div>
                    </div>
                    <div class="col-md-1 pad-40">
                        <i class="fa fa-plus fa-lg box-icon" href="#" onclick="tambahFieldTenagaKerja()"></i>
                    </div>
                </div>
            </div>
            <div class="row gx-xl-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Cakupan Wilayah Pemasaran</label>
                        <input type="text" class="form-control" placeholder="" name="cakupan_wilayah_pemasaran" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Jenis Pemasaran</label>
                        <input type="text" class="form-control" placeholder="" name="jenis_pemasaran" required />
                    </div>
                </div>
            </div>
            <div class="row gx-xl-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Alamat Tempat Usaha</label>
                        <textarea type="text" class="form-control" rows="6" name="alamat_usaha" required></textarea>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="form-group">
                        <label class="form-label">Permasalahan yang Dihadapi</label>
                        <textarea type="text" class="form-control" rows="6" name="permasalahan_usaha" required></textarea>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-5 mx-5" />

        {{-- Data Pelatihan --}}
        <h4 class="mx-5 text-center">Data Pelatihan</h4>

        <div class="card-body px-5">
            <div class="row gx-xl-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Pelatihan yang Pernah Diikuti</label>
                        <textarea type="text" class="form-control" rows="6" name="pengalaman_pelatihan" required></textarea>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label class="form-label">Usulan Pelatihan</label>
                        <textarea type="text" class="form-control" name="usulan_pelatihan" rows="6" required></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer text-end py-4 px-5 bg-light border-0">
            <button id="tambah-data-umkm" class="btn btn-primary" type="submit">Tambah Data</button>
            <button class="btn btn-danger" type="reset">Reset</button>
        </div>
    </form>
</div>
</div>

@endsection

