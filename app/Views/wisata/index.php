<!--Navbar Kategori-->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<hr class="mt-5">

<?php foreach ($daerah as $dataDaerah) : ?>

    <main>
        <section class="kategori">
            <div class="container">
                <div class="main-title mt-5">
                    <h2 class="mt-5">List Wisata di <?= $dataDaerah['nama']; ?></h2>
                </div>

                <div class="main-nav">
                    <nav class="navbar navbar-light mt-3">
                        <div class="button-nav mr-5">
                            <button class="btn my-2 my-sm-0" type="submit">Wisata Alam</button>
                            <button class="btn my-2 my-sm-0" type="submit">Wisata Pantai</button>
                            <button class="btn my-2 my-sm-0" type="submit">Wisata Religi</button>
                            <button class="btn my-2 my-sm-0" type="submit">Wisata Kuliner</button>
                        </div>

                        <form action="" class="col-md-6 ml-auto" method="GET">
                            <div class="input-group p-0" style="border: 1px solid #ced4da; border-radius: 5px;">
                                <input type="text" style="border: none;" class="form-control" placeholder="Cari Destinasi Wisata" name="keyword">
                                <div class="input-group-append">
                                    <button class="btn" type="submit" name="submit"><img width="20px" src="/assets/img/search-solid.svg" alt=""></button>
                                </div>
                            </div>
                        </form>
                    </nav>
                </div>
            </div>
        </section>

        <?php if ($wisata != null) { ?>
            <!--Destinasi Populer-->
            <section class="section-popular-content gallery mt-5" id="popular-content">
                <div class="container">
                    <div class="section-popular-travel row justify-content-center mt-4">

                        <?php foreach ($wisata as $dataWisata) : ?>

                            <?php $dataGambar =  'data:image/jpeg;base64,' . base64_encode($dataWisata['gambar']) . ''; ?>

                            <a href="/detailWisata/<?= $dataWisata['id']; ?>" class="col-sm-6 col-md-4 col-lg-4">
                                <div class="card-travel d-flex flex-column" style="background-image: url(<?= $dataGambar; ?>);">
                                    <div class="travel-content">
                                        <h3><?= $dataWisata['nama']; ?></h3>
                                        <p><?= $dataDaerah['nama']; ?></p>
                                        <img src="/assets/img/star.png" alt=""> <?= $dataWisata['rating']; ?> <span>(92 Review)</span>
                                    </div>
                                </div>
                            </a>

                        <?php endforeach; ?>

                    </div>
                </div>
            </section>

            <?= $pager->links('wisata', 'lokasi_pagination') ?>

    </main>
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

<?php endforeach; ?>

<?= $this->endSection('content'); ?>