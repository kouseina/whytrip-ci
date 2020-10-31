<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<hr class="mt-5">

<!--Navbar Kategori-->
<main>
    <section class="kategori">
        <div class="container">
            <div class="main-title mt-5">
                <h2 class="mt-5">List Daerah di Indonesia</h2>
            </div>

            <div class="main-nav">
                <nav class="navbar navbar-light mt-3">
                    <div class="button-nav">
                        <button class="btn my-2 my-sm-0" type="submit">A-Z</button>
                        <button class="btn my-2 my-sm-0" type="submit">Z-A</button>
                        <button class="btn my-2 my-sm-0" type="submit">Jumlah Tempat Wisata Terbanyak</button>
                    </div>

                    <!-- <div class="button-search col-md-6 ml-4">
                        <div class="form-group mt-4">
                            <input class="form-control" id="exampleFormControlInput1" placeholder="Cari Destinasi Wisata">
                        </div>
                        <div class="btn-image mr-2">
                            <img src="/assets/img/search-solid.svg" alt="">
                        </div>
                    </div> -->

                    <form action="" class="col-md-6 ml-auto" method="GET">
                        <div class="input-group p-0" style="border: 1px solid #ced4da; border-radius: 5px;">
                            <input type="text" style="border: none;" class="form-control" placeholder="Cari Nama Daerah" name="keyword">
                            <div class="input-group-append">
                                <button class="btn" type="submit" name="submit"><img width="20px" src="/assets/img/search-solid.svg" alt=""></button>
                            </div>
                        </div>
                    </form>

                </nav>
            </div>
        </div>
    </section>

    <?php if ($daerah != null) { ?>

        <!--List Daerah-->
        <section class="section-popular-content mt-5" id="popular-content">
            <div class="container">
                <div class="section-popular-travel row justify-content-center mt-4">

                    <?php foreach ($daerah as $data) : ?>

                        <?php $dataGambar =  'data:image/jpeg;base64,' . base64_encode($data['gambar']) . ''; ?>

                        <a href="/daerah/<?= $data['id']; ?>" class="col-sm-6 col-md-4 col-lg-4">
                            <div class="card-travel text-center d-flex flex-column" style="background-image: url(<?= $dataGambar; ?>);">
                                <div class="travel-text text-center">
                                    <h3><?= $data['nama']; ?></h3>
                                    <p><?= $data['jumlah']; ?> Tempat Wisata</p>
                                </div>
                            </div>
                        </a>

                    <?php endforeach; ?>

                </div>
            </div>
        </section>

    <?php } else { ?>
        <div class="notfound">
            <div class="ilus-not text-center mt-3">
                <img src="/assets/img/ilus-notfound.png">
            </div>

            <div class="not-content text-center mt-1 ml-5">
                <p>Whoops pencarian tidak ditemukan....</p>
            </div>
        </div>
    <?php } ?>

    <?= $pager->links('daerah', 'lokasi_pagination') ?>

</main>

<?= $this->endSection('content'); ?>