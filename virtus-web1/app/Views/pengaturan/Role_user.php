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
                    <h4>Role User</h4>


                    <a href="<?= base_url('Tambah_role_user'); ?>" class="btn btn-info float-right"> Tambah</a>
                </div>

                <table class="table table-hover  table-borderless">
                    <thead>
                        <th>Nama Role</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Admin Area</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm">edit</a>
                                <a href="" class="btn btn-danger btn-sm">hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Commander</td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm">edit</a>
                                <a href="" class="btn btn-danger btn-sm">hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Chief Monitoring</td>
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


<?= $this->endSection(); ?>