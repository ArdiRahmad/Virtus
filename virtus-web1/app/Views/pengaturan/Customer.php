<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12 ">
            <div class="card p-5">
                <div class="btngrp-zaam mt-2  w-100">
                    <a href="" class="btn btn-danger mr-2">Unduh PDF</a>
                    <a href="" class="btn btn-success mr-2">Unduh Excel</a>
                    <a href="" class="btn btn-dark">Print</a>
                </div>

                <div class="jabatan-header mt-4 mb-2">
                    <h4>Customer</h4>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#customerModal">
                        Tambah
                    </button>
                </div>

                <table class="table table-hover table-borderless">
                    <thead>
                        <th>Nama Tempat</th>
                        <th>Nama Customer</>
                        </th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Botanica</td>
                            <td>Ardi rahmad</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm">edit</a>
                                <a href="" class="btn btn-danger btn-sm">hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>The Pakubuwono Spring</td>
                            <td>dhiza w</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm">edit</a>
                                <a href="" class="btn btn-danger btn-sm">hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>



<!-- Modal jabatan -->
<div class="modal fade" id="customerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Customer</label>
                        <input name="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Customer">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama PIC</label>
                        <input name="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama PIC">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nomor tlp Kantor Customer</label>
                        <input name="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nomor tlp Kantor Customer">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nomor Telpon PIC</label>
                        <input name="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nomor Telpon PIC">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email PIC</label>
                        <input name="" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email PIC">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat Lengkap</label>
                        <input name="" type="textarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Alamat Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Area(s)</label>
                        <input name="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Area(s)">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">batal</button>
                <button type="submit" class="btn btn-primary">simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>