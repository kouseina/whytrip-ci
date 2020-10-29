<!--Navbar Kategori-->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

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

                        <div class="button-search col-md-6 ml-4">
                            <div class="form-group mt-4">
                                <input class="form-control" id="exampleFormControlInput1" placeholder="Cari Destinasi Wisata">
                            </div>
                            <div class="btn-image mr-2">
                                <img src="/assets/img/search-solid.svg" alt="">
                            </div>
                        </div>
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

                            <a href="#" class="col-sm-6 col-md-4 col-lg-4">
                                <div class="card-travel d-flex flex-column" style="background-image: url(<?= $dataGambar; ?>);">
                                    <div class="travel-content">
                                        <h3><?= $dataWisata['nama']; ?></h3>
                                        <p><?= $dataDaerah['nama']; ?></p>
                                        <img src="/assets/img/star.png" alt=""> 4.9 <span>(92 Review)</span>
                                    </div>
                                </div>
                            </a>

                        <?php endforeach; ?>

                    </div>
                </div>
            </section>
            
            <nav aria-label="Page navigation example" class="d-flex justify-content-center mt-4">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link text-center" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link text-center " href="#">1</a></li>
                    <li class="page-item"><a class="page-link text-center" href="#">2</a></li>
                    <li class="page-item"><a class="page-link text-center" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link text-center" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>

    </main>
<?php } else { ?>
    <div class="notfound">
        <div class="ilus-not text-center mt-3">
            <img src="/assets/img/ilus-notfound.png">
        </div>

        <div class="not-content text-center mt-1 ml-5">
            <p>Whoops, tidak ada wisata di daerah ini</p>
        </div>
    </div>
<?php } ?>

<?php endforeach; ?>

<?= $this->endSection('content'); ?>