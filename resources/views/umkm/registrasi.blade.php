@extends('layouts.main-umkm')

@section('container')

<div class="container">

    <!-- Data diri -->
    <!-- 
        nama,alamat,no hp,email,kelurahan,kecamatan,pendidikan terakhir, sosial media
       -->

    <h2 class="alert alert-dark text-center mt-5">Data Diri</h2>
    <form>
        <div class="row">
            <div class="col p-3">
                <div class="form-group">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col p-3">
                <div class="form-group">
                    <label class="form-label">Sosial Media</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col p-3">
                <div class="form-group">
                    <label class="form-label">No Hp</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col p-3">
                <div class="form-group">
                    <label class="form-label">Kelurahan</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col p-3">
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col p-3">
                <div class="form-group">
                    <label class="form-label">Kecamatan</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col p-3">
                <div class="form-group">
                    <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                    <select id="pendidikan" class="form-select">
                        <option> - </option>
                        <option>S1</option>
                        <option>D3</option>
                        <option>SMA</option>
                        <option>SMP</option>
                        <option>SD</option>
                    </select>
                </div>
            </div>
            <div class="col p-3 mb-5">
                <div class="form-group">
                    <label class="form-label">Alamat</label>
                    <textarea type="text" class="form-control" rows="6"></textarea>
                </div>
            </div>
        </div>

    </form>

    <!-- Data Usaha -->
    <!-- nama usaha,bidangusaha,jenis produk, alamat tempat usaha, kelurahan,kecamatan, nib/oss, no pendataan umkm -->

    <h2 class="alert alert-dark text-center mt-5">Data Usaha</h2>
    <form>
        <div class="row">
            <div class="col col-md-6 p-3">
                <div class="form-group">
                    <label class="form-label">Nama Usaha</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col p-3">
                <div class="form-group">
                    <label class="form-label">Aset (2020)</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col p-3">
                <div class="form-group">
                    <label class="form-label">Aset (2021)</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-md-6 p-3">
                <div class="form-group">
                    <label class="form-label">Bidang Usaha</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col p-3">
                <div class="form-group">
                    <label class="form-label">Omset (2020)</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col p-3">
                <div class="form-group">
                    <label class="form-label">Omset (2021)</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-md-6 p-3">
                <div class="form-group">
                    <label class="form-label">Jenis Produk</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col p-3">
                <div class="form-group">
                    <label class="form-label">Kapasitas Produk (2020)</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col p-3">
                <div class="form-group">
                    <label class="form-label">Kapasitas Produk (2021)</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-md-6 p-3">
                <div class="form-group">
                    <label class="form-label">NIB/OSS</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col p-3">
                <div class="form-group">
                    <label class="form-label">Tenaga Kerja (2020)</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col p-3">
                <div class="form-group">
                    <label class="form-label">Tenaga Kerja (2021)</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-md-6 p-3">
                <div class="form-group">
                    <label class="form-label">No. Pendaftaran UMKM</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col p-3">
                <div class="form-group">
                    <label class="form-label">Izin Usaha</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col p-3">
                <div class="form-group">
                    <label class="form-label">Pemodalan Usaha</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-md-6 p-3">
                <div class="form-group">
                    <label class="form-label">Kelurahan</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col p-3">
                <div class="form-group">
                    <label class="form-label">Cakupan Wilayah Pemasaran</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-md-6 p-3">
                <div class="form-group">
                    <label class="form-label">Kecamatan</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
            <div class="col p-3">
                <div class="form-group">
                    <label class="form-label">Jenis Pemasaran</label>
                    <input type="text" class="form-control" placeholder="" />
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col p-3 mb-5">
                <div class="form-group">
                    <label class="form-label">Alamat Tempat Usaha</label>
                    <textarea type="text" class="form-control" rows="6"></textarea>
                </div>
            </div>

            <div class="col p-3">
                <div class="form-group">
                    <label class="form-label">Permasalahan yang Dihadapi</label>
                    <textarea type="text" class="form-control" rows="6"></textarea>
                </div>
            </div>
        </div>

    </form>

    <!-- Data Pelatihan -->
    <h2 class="alert alert-dark text-center mt-5">Data Pelatihan</h2>
    <form>

        <div class="row">
            <div class="col p-3">
                <div class="form-group">
                    <label class="form-label">Pelatihan yang Pernah Diikuti</label>
                    <textarea type="text" class="form-control" rows="6"></textarea>
                </div>
            </div>

            <div class="col p-3 mb-5">
                <div class="form-group">
                    <label class="form-label">Usulan Pelatihan</label>
                    <textarea type="text" class="form-control" rows="6"></textarea>
                </div>
            </div>
        </div>
    </form>


    <button type="submit" class=" m-2 col-md-2 hero-btn red-btn">Reset</button>

    <button type="submit" class=" m-2 col-md-2 submit-btn green-btn">Submit</button>

</div>

<!-- Footer -->
<section class="footer">
    <h4>About Us</h4>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi
        repellendus fugit porro aliquam, vitae perspiciatis?
    </p>
    <div class="icons">
        <i class="fa fa-facebook"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-instagram"></i>
        <i class="fa fa-linkedin"></i>
    </div>
    <p>Made with <i class="fa fa-heart-o"></i> by Uhuy</p>
</section>

@endsection

