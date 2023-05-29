<?= $this->extend('template/template'); ?>
<?= $this->section('isi'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-1">
        <h1 class="h3 mb-0 text-gray-800">Pengajuan Proposal</h1>
        <hr>
    </div>
    <div class="row mb-3 ml-3">
        <p class="text-sm">
            <a href="<?= base_URL(); ?>user" class="btn btn-link">Dashboard</a> » Pengajuan Proposal
        </p>
    </div>
    <!-- end page heading -->

    <!-- Content Row -->
    <div class="row">
        <?php foreach ($section as $ab): ?>
            <?php
            $dataArray = ['primary', 'danger', 'success', 'danger', 'warning'];
            $randomIndex = array_rand($dataArray);
            $randomValue = $dataArray[$randomIndex];
            ?>
            <!-- card section -->
            <div class="col-xl-3 col-md-6 col-sm-6 col-6 mb-4">
                <div class="card border-left-<?= $randomValue ?> shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-md-left font-weight-bold text-primary text-uppercase mb-1">
                                    <?= $ab; ?>
                                </div>
                                <a href="#">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Ajukan Proposal</div>
                                </a>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-book fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- end row -->

</div>
<!-- /.container-fluid -->


<?= $this->endSection(); ?>