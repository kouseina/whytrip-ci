<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Header -->
<header class="text-center index">
    <h1 class="mt-4">
        Cari Tempat Wisata
        <br>
        Dengan Mudah
    </h1>
    <div class="d-flex justify-content-center desc">
        <p class="mt-4">
            Temukan berbagai tempat wisata yang berkualitas dengan informasi
            yang lengkap supaya kamu bisa menikmati liburanmu
        </p>
    </div>

</header>

<!--Content-->
<main>
    <!--jenis wisata-->
    <div class="container">
        <section class="section-stats row 
            justify-content-center col-md-7 ml-5 mb-5" id="stats">
            <div class="input-group">
                <select class="dropdown-toggle jenis-wisata col-sm col-md-4 mt-2" id="inputGroupSelect04" aria-label="Example select with button addon">
                    <option selected>Jenis Wisata</option>
                    <option value="Wisata Alam">Wisata Alam</option>
                    <option value="Wisata Pantai">Wisata Pantai</option>
                    <option value="Wisata Religi">Wisata Religi</option>
                    <option value="Wisata Kuliner">Wisata Kuliner</option>
                </select>
                <select class="dropdown-toggle lokasi-wisata col-md-4" id="inputGroupSelect04" aria-label="Example select with button addon">
                    <option selected>Lokasi Wisata</option>
                    <option value="Bali">Bali</option>
                    <option value="Jawa Tengah">Jawa Tengah</option>
                    <option value="Jawa Timur">Jawa Timur</option>
                    <option value="Jawa Barat">Jawa Barat</option>
                </select>

                <div class="input-group-append col-sm-12 col-md-4 my-3 col-sm-auto">
                    <button class="btn btn-cari " type="button">Cari Tempat</button>
                </div>
            </div>
        </section>
    </div>

    <!--brand-->
    <div class="container">
        <div class="brand mt-5">
            <h2 class="mb-4">Agen wisata kami</h2>
            <div class="brand-image d-flex justify-content-around mb-5">
                <div class="item-brands"><img src="assets/img/agen-google.png" alt=""></div>
                <div class="item-brands"><img src="assets/img/agen-airbnb.png" alt=""></div>
                <div class="item-brands"><img src="assets/img/agen-traveloka.png" alt=""></div>
                <div class="item-brands"><img src="assets/img/agen-tiket.png" alt=""></div>
            </div>
        </div>
    </div>

    <!--Section Popular-->
    <section class="section-popular mt-5" id="popular">
        <div class="container">
            <div class="row mt-5">
                <div class="col section-popular-heading">
                    <h2 class="mt-5 mb-3 title">Destinasi Popular</h2>
                    <p>Ini adalah list destinasi wisata paling favorit di Indonesia
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-popular-content " id="popular-content">
        <div class="container">
            <div class="section-popular-travel row justify-content-center mt-4 owl-carousel owl-theme">
                <div class="items">
                    <div class="card-travel d-flex flex-column" style="background-image: url('assets/img/1.png');">
                        <div class="travel-content">
                            <h3>Uluwatu Tempe</h3>
                            <p>Badung, Bali</p>
                            <div class="rating d-flex flex-row">
                                <img src="assets/img/star.png" alt="">
                                <p>4.9 <span>(92 Review)</span> </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="items">
                    <div class="card-travel d-flex flex-column" style="background-image: url('assets/img/2.png');">
                        <div class="travel-content">
                            <h3>Tanah Lot</h3>
                            <p>Tabanan, Bali</p>
                            <div class="rating d-flex flex-row">
                                <img src="assets/img/star.png" alt="">
                                <p>4.9 <span>(64 Review)</span> </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="items">
                    <div class="card-travel d-flex flex-column" style="background-image: url('assets/img/3.png');">
                        <div class="travel-content">
                            <h3>Candi Borobudur</h3>
                            <p>Magelang, Jawa Tengah</p>
                            <div class="rating d-flex flex-row">
                                <img src="assets/img/star.png" alt="">
                                <p>4.8 <span>(46 Review)</span> </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="items">
                    <div class="card-travel d-flex flex-column" style="background-image: url('assets/img/1.png');">
                        <div class="travel-content">
                            <h3>Uluwatu Tempe</h3>
                            <p>Badung, Bali</p>
                            <div class="rating d-flex flex-row">
                                <img src="assets/img/star.png" alt="">
                                <p>4.9 <span>(92 Review)</span> </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="items">
                    <div class="card-travel d-flex flex-column" style="background-image: url('assets/img/2.png');">
                        <div class="travel-content">
                            <h3>Tanah Lot</h3>
                            <p>Tabanan, Bali</p>
                            <div class="rating d-flex flex-row">
                                <img src="assets/img/star.png" alt="">
                                <p>4.9 <span>(64 Review)</span> </p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        </div>
        <div class="input-group-append col-md-12 my-4 justify-content-center">
            <a href="/pages/popular">
                <button class="btn btn-detail" type="button">Lihat Semua</button>
            </a>
        </div>
        </div>
    </section>

    <!--Section List-->
    <section class="section-popular mt-5" id="list">
        <div class="container">
            <div class="row mt-5">
                <div class="col section-popular-heading">
                    <h2 class="mt-2 mb-2 title">List Daerah</h2>
                    <p>Ini adalah list provinsi/daerah tempat wisata di Indonesia</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-popular-content" id="list-content">
        <div class="container">
            <div class="section-popular-travel row justify-content-center mt-4 owl-carousel owl-theme">
                <div class="items">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('assets/img/1.png');">
                        <div class="travel-text text-center">
                            <h3>Bali</h3>
                            <p>100+ Tempat Wisata</p>
                        </div>
                    </div>
                </div>

                <div class="items">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('assets/img/2.png');">
                        <div class="travel-text text-center">
                            <h3>Papua</h3>
                            <p>100+ Tempat Wisata</p>
                        </div>
                    </div>
                </div>

                <div class="items">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('assets/img/3.png');">
                        <div class="travel-text text-center">
                            <h3>Jawa Tengah</h3>
                            <p>100+ Tempat Wisata</p>
                        </div>
                    </div>
                </div>

                <div class="items">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('assets/img/1.png');">
                        <div class="travel-text text-center">
                            <h3>Bali</h3>
                            <p>100+ Tempat Wisata</p>
                        </div>
                    </div>
                </div>

                <div class="items">
                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('assets/img/2.png');">
                        <div class="travel-text text-center">
                            <h3>Papua</h3>
                            <p>100+ Tempat Wisata</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="input-group-append col-md-12 my-4 mb-5 justify-content-center">
            <a href="/daerah/">
                <button class="btn btn-detail" type="button">Lihat Semua</button>
            </a>
        </div>
        </div>
    </section>

    <!--Section Testimoni-->
    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2>Testimoni</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-content mt-3 ml-4" id="testimonial-content">
        <div class="container">
            <div class="section-popular-travel testi row slider owl-carousel owl-theme justify-content-between" id="testi-card">
                <div class="items">
                    <div class="card card-testimonial">
                        <div class="content mt-4 ml-4 mr-4">
                            <p class="testimonial">
                                “Wah web ini sangat membantu saya untuk mencari tempat wisata yang tepat dengan budget saya,
                                sangat merekomendasikan website ini kepada orang yang sedang ingin mecari tempat wisata"
                            </p>
                            <div class="person mt-4 mb-4">
                                <div class="testimonial-pict">
                                    <img src="assets/img/review.png" alt="User">
                                </div>
                                <div class="testimonial-content ml-2">
                                    <p class="name">Ronald Richards</p>
                                    <p class="job">Doctor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="items">
                    <div class="card card-testimonial">
                        <div class="content mt-4 ml-4 mr-4">
                            <p class="testimonial">
                                “Wah web ini sangat membantu saya untuk mencari tempat wisata yang tepat dengan budget saya,
                                sangat merekomendasikan website ini kepada orang yang sedang ingin mecari tempat wisata"
                            </p>
                            <div class="person mt-4 mb-4">
                                <div class="testimonial-pict">
                                    <img src="assets/img/review-2.png" alt="User">
                                </div>
                                <div class="testimonial-content ml-2">
                                    <p class="name">Kathryn Murphy</p>
                                    <p class="job">Doctor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="items">
                    <div class="card card-testimonial">
                        <div class="content mt-4 ml-4 mr-4">
                            <p class="testimonial">
                                “Wah web ini sangat membantu saya untuk mencari tempat wisata yang tepat dengan budget saya,
                                sangat merekomendasikan website ini kepada orang yang sedang ingin mecari tempat wisata"
                            </p>
                            <div class="person mt-4 mb-4">
                                <div class="testimonial-pict">
                                    <img src="assets/img/review-3.png" alt="User">
                                </div>
                                <div class="testimonial-content ml-2">
                                    <p class="name">Jerome Bell</p>
                                    <p class="job">Doctor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="items">
                    <div class="card card-testimonial">
                        <div class="content mt-4 ml-4 mr-4">
                            <p class="testimonial">
                                “Wah web ini sangat membantu saya untuk mencari tempat wisata yang tepat dengan budget saya,
                                sangat merekomendasikan website ini kepada orang yang sedang ingin mecari tempat wisata"
                            </p>
                            <div class="person mt-4 mb-4">
                                <div class="testimonial-pict">
                                    <img src="assets/img/review.png" alt="User">
                                </div>
                                <div class="testimonial-content ml-2">
                                    <p class="name">Ronald Richards</p>
                                    <p class="job">Doctor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="items">
                    <div class="card card-testimonial">
                        <div class="content mt-4 ml-4 mr-4">
                            <p class="testimonial">
                                “Wah web ini sangat membantu saya untuk mencari tempat wisata yang tepat dengan budget saya,
                                sangat merekomendasikan website ini kepada orang yang sedang ingin mecari tempat wisata"
                            </p>
                            <div class="person mt-4 mb-4">
                                <div class="testimonial-pict">
                                    <img src="assets/img/review-2.png" alt="User">
                                </div>
                                <div class="testimonial-content ml-2">
                                    <p class="name">Kathryn Murphy</p>
                                    <p class="job">Doctor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?= $this->endSection('content'); ?>