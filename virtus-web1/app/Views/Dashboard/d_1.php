<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card">
                <h4 class="text-center mt-2">DAFTAR LOKASI</h4>
                <div class="input-group mb-3 zaam-input" style="width:80%;">
                    <input type="text" class="form-control " placeholder="Masukkan Nama / NIK / Area" aria-label="" aria-describedby="basic-addon1">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>

                </div>
                <?php foreach ($Lokasi as $L) : ?>
                    <div class="card-content">
                        <div class="status-card">
                            <h6><?= $L['Nama_area']; ?></h6>
                            <div class="monitoring-status">
                                <a href="<?= base_url('Dashboard2'); ?>">
                                    <div class="indikator">
                                        <img src="/img/ico/ICON SLEEP 1.png" alt="" srcset="">
                                        <p><?= $L['persentase_tidur']; ?>%</p>
                                    </div>
                                </a>
                                <div class="indikator">
                                    <img src="/img/ico/tired-solid 1.png" alt="" srcset="">
                                    <p><?= $L['persentase_ngantuk']; ?>%</p>
                                </div>
                                <div class="indikator">
                                    <img src="/img/ico/briefcase-solid 1.png" alt="" srcset="">
                                    <p><?= $L['persentase_kerja']; ?>%</p>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6">
        <div class="card">
            <h4 class="text-center mt-2">HISTORY PELANGGARAN</h4>
            <div class="card-content">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">Jam</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Pelanggaran</th>
                            <th scope="col">Area</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($History as $H) : ?>
                            <tr>
                                <td><?= $H['jam']; ?></td>
                                <td><?= $H['Nama']; ?></td>
                                <td><?= $H['Jenis_pelanggaran']; ?></td>
                                <td><?= $H['Nama_area']; ?></td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

</div>

<?= $this->endSection(); ?>