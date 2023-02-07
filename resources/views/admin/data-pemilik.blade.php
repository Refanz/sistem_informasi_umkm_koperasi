@extends('layouts.main-admin')

@section('wrapper')

<div class="main-pages">
    <div class="container">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><b>DATA PEMILIK UMKM</b></h2>
                    </div>

                    <div class="col-sm-6">
                        <a href="#hapusdata" class="btn btn-danger" data-toggle="modal"><span>Hapus Data</span></a>
                        <a href="#tambahdata" class="btn btn-success" data-toggle="modal"><span>Tambah Data</span></a>
                        <a href="#hapusdata" class="btn btn-primary" data-toggle="modal"><span>Download Data</span></a>
                    </div>
                </div>
            </div>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>

                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Kelurahan</th>
                        <th>Kecamatan</th>
                        <th>No. Telp</th>
                        <th>Email</th>
                        <th>Sosial Media</th>
                        <th>Pendidikan Terakhir</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox1" name="option[]" value="1">
                                <label for="checkbox1"></label>
                            </span>
                        </td>
                        <td>Jamal</td>
                        <td>Tambakharjo RT 04/02 </td>
                        <td>Tambakharjo</td>
                        <td>Semarang Barat</td>
                        <td>08123456789</td>
                        <td>jamal@gmail.com</td>
                        <td>Whatsapp, Instagram</td>
                        <td>S1</td>

                        <td>
                            <a href="#tambahdata" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#hapusdata" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Hapus">&#xE872;</i></a>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox1" name="option[]" value="1">
                                <label for="checkbox1"></label>
                            </span>
                        </td>
                        <td>Joko</td>
                        <td>Tambakharjo RT 04/02 </td>
                        <td>Tambakharjo</td>
                        <td>Semarang Barat</td>
                        <td>08123456789</td>
                        <td>jamal@gmail.com</td>
                        <td>Whatsapp, Instagram</td>
                        <td>S1</td>

                        <td>
                            <a href="#tambahdata" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="#hapusdata" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Hapus">&#xE872;</i></a>
                        </td>
                    </tr>

                

                
                </tbody>
            </table>

            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>100</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disable"><a href="#" class="page-link">Previous</a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
    </div>
</div>


{{-- 
<div id="tambahdata" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" &times;></button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Alamat</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Kelurahan</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Kecamatan</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="name">No. Telp</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Sosial Media</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Pendidikan Terakhir</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                        <input type="submit" class="btn btn-success" value="Tambah">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="editdata" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Alamat</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Kelurahan</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Kecamatan</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="name">No. Telp</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Sosial Media</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Pendidikan Terakhir</label>
                        <input type="text" class="form-control" required>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="hapusdata" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <div class="modal-body">
                    <p>Are you sure you want to delete these Records?</p>
                </div>

                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                    <input type="submit" class="btn btn-danger" value="Hapus">
                </div>
            </form>
        </div>
    </div>
</div> --}}

@endsection

