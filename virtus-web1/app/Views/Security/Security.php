<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card">
                <h4 class="text-center mt-2">DAFTAR LOKASI</h4>
                <div class="input-group mb-3 zaam-input w-80-zaam">
                    <input type="text" class="form-control " placeholder="Masukkan Nama / NIK / Area" aria-label="" aria-describedby="basic-addon1">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="card-content h-100">
                    <?php foreach ($Lokasi as $L) : ?>
                        <nav class="nav-security w-75">
                            <div class="nav nav-tabs nav-zaam" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><?= $L['Nama_area']; ?></a>
                            </div>
                        </nav>
                    <?php endforeach; ?>
                </div>


            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card daftar-personil">
                <h4 class="text-center mt-2">DAFTAR PERSONIL</h4>
                <div class="input-group mb-3 zaam-input w-80-zaam">
                    <input type="text" class="form-control " placeholder="Masukkan Nama / NIK / Area" aria-label="" aria-describedby="basic-addon1">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="card-content profil">
                            <div class="row w-75">
                                <div class="col-12">
                                    <a href="#sas" class="btn btn-zaam w-100 mb-2">
                                        <div class="row ">
                                            <div class="col-2">
                                                <img src="/img/ico/1.png" alt="" srcset="">
                                            </div>
                                            <div class="col-8  nama-personil">
                                                <span class="">Ahmad Fahmi</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#sas" class="btn btn-zaam w-100 mb-2">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/img/ico/1.png" alt="" srcset="">
                                            </div>
                                            <div class="col-8  nama-personil">
                                                <span>Ridwan saputra</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#sas" class="btn btn-zaam w-100 mb-2">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/img/ico/1.png" alt="" srcset="">
                                            </div>
                                            <div class="col-8  nama-personil">
                                                <span>Niko ardiansyah</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-1" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="card-content profil">
                            <div class="row w-75">
                                <div class="col-12">
                                    <a href="#sas" class="btn btn-zaam w-100 mb-2">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/img/ico/1.png" alt="" srcset="">
                                            </div>
                                            <div class="col-8  nama-personil">
                                                <span class="">BISMA S</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#sas" class="btn btn-zaam w-100 mb-2">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/img/ico/1.png" alt="" srcset="">
                                            </div>
                                            <div class="col-8  nama-personil">
                                                <span>DICKY RAMADHAN</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#sas" class="btn btn-zaam w-100 mb-2">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/img/ico/1.png" alt="" srcset="">
                                            </div>
                                            <div class="col-8  nama-personil">
                                                <span>DIKO SAPUTRA</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="card-content profil">
                            <div class="row w-75">
                                <div class="col-12">
                                    <a href="#sas" class="btn btn-zaam w-100 mb-2">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/img/ico/1.png" alt="" srcset="">
                                            </div>
                                            <div class="col-8  nama-personil">
                                                <span class="">Culthon Arif</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#sas" class="btn btn-zaam w-100 mb-2">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/img/ico/1.png" alt="" srcset="">
                                            </div>
                                            <div class="col-8  nama-personil">
                                                <span>Coki-coki</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <a href="#sas" class="btn btn-zaam w-100 mb-2">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/img/ico/1.png" alt="" srcset="">
                                            </div>
                                            <div class="col-8  nama-personil">
                                                <span>DIKO SAPUTRA</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-profile-tab">
                        3
                    </div>
                    <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-profile-tab">
                        4
                    </div>
                    <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav-profile-tab">
                        5
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>