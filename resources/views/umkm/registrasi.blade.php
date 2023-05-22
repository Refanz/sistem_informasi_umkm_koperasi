@extends('layouts.main-umkm')

@section('container')

<!-- Form Container -->
<div class="container my-5">


    <form class="card" method="post" action="{{ route('tambahUmkmUser') }}">
        @csrf
        <!-- Form Data Diri -->
        <section>
            @if(Session::get('gagal'))
            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                <strong>Peringatan!</strong> {{ Session::get('gagal') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if(Session::get('sukses'))
            <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                <strong>Tambah Data UMKM Berhasil</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            

            <div class="section-title mt-5">Data Diri</div>
            <div class="line-title"></div>
            <div class="card-body">
                <div class="row gx-xl-5">
                    <div class="col-md-6 mb-4">
                        <label class="form-label">Nama:</label>
                        <input type="text" class="form-control" placeholder="" name="nama_pemilik" required />
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label">Nomer Telepon:</label>
                        <input type="text" class="form-control" placeholder="" name="no_telepon" required />
                    </div>
                </div>

                <div class="row gx-xl-5">
                    <div class="col-md-6 mb-4">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" placeholder="" name="email" required />
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label">Sosial Media:</label>
                        <input type="text" class="form-control" placeholder="" name="sosial_media" required />
                    </div>
                </div>

                <div class="row gx-xl-5">
                    <div class="col-md-6 mb-4">
                        <label class="form-label">Kelurahan:</label>
                        <input type="text" class="form-control" placeholder="" name="kelurahan_pemilik" required />
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label">Kecamatan:</label>
                        <input type="text" class="form-control" placeholder="" name="kecamatan_pemilik" required />
                    </div>
                </div>

                <div class="row gx-xl-5">
                    <div class="col-md-6 mb-4">
                        <label class="form-label">Alamat:</label>
                        <textarea type="text" class="form-control" rows="6" name="alamat_pemilik" required></textarea>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pendidikan" class="form-label">Pendidikan Terakhir:</label>
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
        </section> <!-- End Form Data Diri -->

        <div class="line"></div>

        <!-- Form Data Usaha -->
        <section>
            <div class="section-title">Data Usaha</div>
            <div class="line-title"></div>
            <div class="card-body">
                <div class="row gx-xl-5">
                    <div class="col-md-6 mb-4">
                        <label class="form-label">Nama Usaha:</label>
                        <input type="text" class="form-control" placeholder="" name="nama_usaha" required />
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label">Bidang Usaha:</label>
                        <input type="text" class="form-control" placeholder="" name="bidang_usaha" required />
                    </div>
                </div>

                <div class="row gx-xl-5">
                    <div class="col-md-6 mb-4">
                        <label class="form-label">Jenis Produk:</label>
                        <input type="text" class="form-control" placeholder="" name="jenis_produk" required />
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label">NIB/OSS:</label>
                        <input type="text" class="form-control" placeholder="" name="nib" required />
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label rounded-0">Nomer Pendaftaran UMKM:</label>
                        <input type="text" class="form-control" placeholder="" name="no_pendataan_umkm" required />
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

                <div class="mt-3" id="omset">
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
                <div class="mt-3" id="kapasitas-produksi">
                    <div class="row-kapasitas-produksi" style="display: inline-flex" id="row-0">
                        <div class="col-md-5 me-2 col-5">
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
                <div class="mt-3" id="tenaga-kerja">
                    <div class="row-tenaga-kerja" style="display: inline-flex" id="row-0">
                        <div class="col-md-5 col-5 me-2">
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

                <div class="row gx-xl-5 mt-3">
                    <div class="col-md-6 mb-4">
                        <label class="form-label">Izin Usaha:</label>
                        <input type="text" class="form-control" placeholder="" name="izin_usaha" required />
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label">Pemodalan Usaha:</label>
                        <input type="text" class="form-control" placeholder="" name="permodalan_usaha" required />
                    </div>
                </div>

                <div class="row gx-xl-5">
                    <div class="col-md-6 mb-4">
                        <div class="form-group">
                            <label for="pendidikan" class="form-label">Cakupan Wilayah Pemasaran:</label>
                            <select id="pendidikan" class="form-select" name="cakupan_wilayah_pemasaran" required>
                                <option value=""> - </option>
                                <option value="Dalam Kota">Dalam Kota</option>
                                <option value="Nasional">Nasional</option>
                                <option value="Internasional">Internasional</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="form-group">
                            <label for="pendidikan" class="form-label">Jenis Pemasaran:</label>
                            <select id="pendidikan" class="form-select" name="jenis_pemasaran" required>
                                <option value=""> - </option>
                                <option value="Penjualan Langsung">Penjualan Langsung</option>
                                <option value="Online">Online</option>
                                <option value="Konsinyasi">Konsinyasi</option>
                                <option value="Penjualan Langsung & Online">Penjualan Langsung & Online</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row gx-xl-5">
                    <div class="col-md-6 mb-4">
                        <label class="form-label">Kelurahan Tempat Usaha:</label>
                        <input type="text" class="form-control" placeholder="" name="kelurahan_usaha" required />
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label">Kecamatan Tempat Usaha:</label>
                        <input type="text" class="form-control" placeholder="" name="kecamatan_usaha" required />
                    </div>
                </div>

                <div class="row gx-xl-5">
                    <div class="col-md-6 mb-4">
                        <label class="form-label">Alamat Tempat Usaha:</label>
                        <textarea type="text" class="form-control" rows="6" name="alamat_usaha" required></textarea>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Permasalahan yang dihadapi:</label>
                        <textarea type="text" class="form-control" rows="6" name="permasalahan_usaha" required></textarea>
                    </div>
                </div>
            </div>
        </section> <!-- End Form Data Usaha -->

        <div class="line"></div>

        <!-- Form Data Pelatihan -->
        <section>
            <div class="section-title">Data Pelatihan</div>
            <div class="line-title"></div>
            <div class="card-body">
                <div class="row gx-xl-5">
                    <div class="col-md-6 mb-4">
                        <label class="form-label">Pelatihan yang Pernah diikuti:</label>
                        <textarea type="text" class="form-control" rows="6" name="pengalaman_pelatihan" required></textarea>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Usulan Pelatihan:</label>
                        <textarea type="text" class="form-control" name="usulan_pelatihan" rows="6" required></textarea>
                    </div>
                </div>
            </div>
        </section> <!-- End Form Data -->

        <!-- Button Submit Reset -->
        <div class="d-flex justify-content-between gap-4 py-4 px-5 mb-3">
            <button type="reset" class="primary-btn red-btn w-100">Reset</button>
            <button id="tambah-data-umkm" type="submit" class="btn blue-btn w-100">Submit</button>
        </div> <!-- End Button Submit Reset -->

    </form>
</div> <!-- End Form Container -->

@endsection

