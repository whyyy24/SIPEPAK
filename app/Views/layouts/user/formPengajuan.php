<?= $this->extend('template/template'); ?>
<?= $this->section('isi'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800">Isi Form Pengajuan</h1>
        <hr>
    </div>
    <div class="row mb-3 ml-3">
        <p class="text-sm">
            <a href="<?= base_URL(); ?>user" class="btn btn-link">Dashboard</a> »
            <a href="<?= base_URL(); ?>ajukan" class="btn btn-link">Pilih Bidang</a> »
            <span class="ml-2">
                <?= $bidang; ?>
            </span>
        </p>
    </div>
    <!-- end page heading -->


    <!-- form -->
    <div class="row">
        <div class="col-md-12">

            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Pengajuan Proposal</h6>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3 row">
                            <label for="judul" class="col-md-4 col-form-label">Judul Proposal</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control text-center" id="judul" placeholder="Judul Proposal">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="anggaran" class="col-md-4 col-form-label">Anggaran</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control text-center" id="anggaran" placeholder="Kisaran Anggaran">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputtext" class="col-md-4 col-form-label">Waktu Acara</label>
                            <div class="col-md-4">
                                <input type="date" class="form-control text-center" id="inputtext" placeholder="coba">
                            </div>
                            <div class="col-md-4">
                                <input type="date" class="form-control text-center" id="inputtext" placeholder="coba">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputtext" class="col-md-4 col-form-label">Keterangan Kegiatan</label>
                            <div class="col-md-8">
                                <textarea name="ket" id="" class="form-control text-center" placeholder="Keterangan"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="pdf" class="col-md-4 col-form-label">Upload Proposal</label>
                            <div class="col-md-8">
                                <input type="file" class="form-control" id="pdf">
                            </div>
                        </div>

                        <div class="row justify-content-center mb-4">
                            <button type="reset" class="btn btn-danger mr-3">Reset</button>
                            <button class="btn btn-primary mr-3">Draft</button>
                            <button class="btn btn-success">Ajukan</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Daftar Nama Atasan -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardAtasan" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardAtasan">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Nama Atasan</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardAtasan">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Pengajuan</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <?php foreach ($atasan as $at) : ?>
                                    <tr>
                                        <td>
                                            <?= $at['nama_atasan']; ?>
                                        </td>
                                        <td>
                                            <?= $at['jabatan']; ?>
                                        </td>
                                        <td>ke-<?= $at['no_urut'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end Daftar Nama Atasan -->
        </div>
    </div>
</div>
<!-- /.container-fluid -->


<?= $this->endSection(); ?>