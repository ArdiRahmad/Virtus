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
                    <h4>Jabatan</h4>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#jabatanModal">
                        Tambah
                    </button>
                </div>

                <table class="table table-hover table-borderless">
                    <thead>
                        <th>Nama Jabatan</th>
                        <th>Area</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Security Guard</td>
                            <td>Keamanan Area Botanica</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm">edit</a>
                                <a href="" class="btn btn-danger btn-sm">hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Shift Leader</td>
                            <td>Leader Area Botanica</td>
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
<div class="modal fade" id="jabatanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jabatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Jabatan</label>
                        <input name="nama_mahasiswa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Jabatan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Deskripsi">
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