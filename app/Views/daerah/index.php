<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

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

                <?= $pager->links() ?>
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

<?= $this->endSection('content'); ?>