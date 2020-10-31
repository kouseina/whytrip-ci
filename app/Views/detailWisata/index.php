<?= $this->extend('layout/template'); ?>

<?php foreach ($wisata as $dataWisata) : ?>

    <?php foreach ($daerah as $dataDaerah) : ?>

        <?php
        $kode_provinsi = ($dataDaerah['id'] = $dataWisata['kode_provinsi']);
        $provinsi = $daerah[$kode_provinsi - 1];

        foreach ($login as $loginNow) :
            $idLogin = $loginNow->user_id;
        endforeach;

        $user = $userLastLogin[0];
        ?>

    <?php endforeach; ?>

<?php endforeach; ?>


<?= $this->section('content'); ?>

<hr class="mt-5">

<main>
    <div class="container">

        <div class="header-button d-flex justify-content-between mb-3">
            <div class="d-flex mt-3">
                <div><img src="/assets/img/map.png" alt=""> </div>
                <div class="ml-2"><?= $dataWisata['nama']; ?>, Indonesia</div>
            </div>

            <div class="d-flex">
                <div class="mt-2 mr-2">
                    <img src="/assets/img/share.png" alt="" class="mr-2">
                    <img src="/assets/img/heart.png" alt="">
                </div>
                <button class="btn btn-vr d-flex" type="button" data-toggle="modal" data-target="#launchVR">
                    <img src="/assets/img/vr-glasses.png" class="mr-2 my-1 ml-3">
                    <p class="my-1">Play VR</p>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="launchVR" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <iframe class="videoContainer__video embed-responsive-item" width="1920" height="1080" src="https://www.youtube.com/embed/GbOqGYxIW4w" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="header-slider owl-carousel owl-theme">
                <div class="item-img">
                    <img src="/assets/img/kiri.png" alt="">
                </div>
                <div class="item-img">
                    <img src="/assets/img/location.png" alt="">
                </div>
                <div class="item-img">
                    <img src="/assets/img/kanan.png" alt="">
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-lg-8 pl-lg-0 left">
                <div class="title">
                    <h2 class="mt-3 mb-3"><?= $dataWisata['nama']; ?>, <?= $provinsi['nama']; ?>, Indonesia</h2>

                    <div class="review ">
                        <div class="d-flex">
                            <div><img src="/assets/img/star.png" alt=""> </div>
                            <div class="review-rating">
                                <p class="font-weight-bold"><?= $dataWisata['rating']; ?> <span>(73 Review)</span></p>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>

                <div class="informasi">
                    <h3 class="judul">Informasi</h3>
                    <p>
                        <?= $dataWisata['informasi']; ?>
                    </p>
                    <hr>
                </div>

                <div class="cuaca">
                    <h3 class="judul">Cuaca</h3>
                    <div class="weather d-flex justify-content-between">
                        <div>
                            <table class="table table-borderless table-condensed">
                                <tr>
                                    <td>Nusa Penida</td>
                                </tr>
                                <tr>
                                    <td>Sabtu 12:00</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Berawan</td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <img src="/assets/img/weather.png" alt="">
                        </div>
                        <div>
                            <table class="table table-borderless table-condensed">
                                <tr>
                                    <td>Precipitation</td>
                                    <td>: <span class="font-weight-bold">4%</td>
                                </tr>
                                <tr>
                                    <td>Humidity</td>
                                    <td>: <span class="font-weight-bold">5%</td>
                                </tr>
                                <tr>
                                    <td>Wind</td>
                                    <td>: <span class="font-weight-bold">19 km/h</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="cloudy d-flex justify-content-between">
                        <div>
                            <p>Sab</p>
                            <img src="/assets/img/cloudy.png" alt="">
                            <p><span class="font-weight-bold">28°</span> 23°</p>
                        </div>

                        <div>
                            <p>Min</p>
                            <img src="/assets/img/cloudy.png" alt="">
                            <p><span class="font-weight-bold">28°</span> 23°</p>
                        </div>

                        <div>
                            <p>Sen</p>
                            <img src="/assets/img/cloudy.png" alt="">
                            <p><span class="font-weight-bold">28°</span> 23°</p>
                        </div>

                        <div>
                            <p>Sel</p>
                            <img src="/assets/img/cloudy.png" alt="">
                            <p><span class="font-weight-bold">28°</span> 23°</p>
                        </div>

                        <div>
                            <p>Rab</p>
                            <img src="/assets/img/cloudy.png" alt="">
                            <p><span class="font-weight-bold">28°</span> 23°</p>
                        </div>

                        <div>
                            <p>Kam</p>
                            <img src="/assets/img/cloudy.png" alt="">
                            <p><span class="font-weight-bold">28°</span> 23°</p>
                        </div>

                        <div>
                            <p>Jum</p>
                            <img src="/assets/img/cloudy.png" alt="">
                            <p><span class="font-weight-bold">28°</span> 23°</p>
                        </div>

                    </div>
                    <hr>
                </div>

                <div class="tips">
                    <h3 class="judul">Hal Yang Harus Anda Bawa</h3.judul>
                        <ol class="mt-4">
                            <li class="font-weight-bold">
                                <p class="font-weight-light"><span class="font-weight-bold">Payung/Topi & Kacamata.</span> Cuaca di pulau Nusa Penida lebih panas dari pada pulau Bali. Maka itu, jangan sampai lupa untuk membawa topi, kacamata hitam dan payung. Akan lebih baik, jika anda memakai Tabir Surya, agar terhindar terbakarnya kulit anda karena teriknya sinar matahari.</p>
                            </li>
                            <li class="font-weight-bold">
                                <p class="font-weight-light"><span class="font-weight-bold">Uang Tunai.</span> Fasilitas ATM dan tempat yang menerima pembayaran menggunakan kartu kredit masih terbatas di Nusa Penida. Jadi ada baiknya anda selalu membawa uang tunai saat liburan di Nusa Penida Bali.</p>
                            </li>
                            <li class="font-weight-bold">
                                <p class="font-weight-light"><span class="font-weight-bold">Pakaian & Kacamata Renang.</span> Nusa Penida sangat terkenal akan keindahan pantai, jika anda ingin berenang, maka ada baiknya anda ingat untuk membawa pakaian renang dan kaca mata renang. Untuk alat snorkeling tidak perlu anda bawa, karena tersedia banyak tempat yang menyewakan alat snorkeling di Nusa Penida.</p>
                            </li>
                            <li class="font-weight-bold">
                                <p class="font-weight-light"><span class="font-weight-bold">Pergunakan Sandal Hiking.</span> Sebagian besar jalan di objek wisata di Nusa Penida masih berupa batu karang, maka memakai sandal hiking, adalah pilihan terbaik untuk alas kaki. Saat anda berada di pantai menggunakan sandal hiking, anda tidak akan takut alas kaki anda basah atau terkena pasir pantai.</p>
                            </li>
                            <li class="font-weight-bold">
                                <p class="font-weight-light"><span class="font-weight-bold">Smartphone Dengan Cukup Kuota Data.</span> Saat anda liburan di Nusa Penida, maka anda akan sangat tergantung akan Google Map, jadi pastikan kuota data anda mencukupi. Di beberapa area di Nusa Penida, koneksi internet akan lambat atau anda tidak mendapatkan sinyal. Sebaiknya anda menyimpan peta Google Nusa Penida di hanphone anda secara offline.</p>
                            </li>
                        </ol>
                        <hr>
                </div>

                <div class="denah">
                    <h3 class="judul">Denah & Maps</h3>
                    <iframe src="<?= $dataWisata['map']; ?>" width="750" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <hr>
                </div>

                <div class="faq">
                    <h3 class="judul">FAQ</h3>
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Apakah Ada Rumah Sakit Di <?= $dataWisata['nama']; ?>?
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body mt-2">
                                    Pulau <?= $dataWisata['nama']; ?> saat ini telah memiliki rumah sakit umum. Nama rumah sakitnya, Rumah Sakit Pratama (PRATAMA NUSA PENIDA HOSPITAL). Lokasi PRATAMA NUSA PENIDA HOSPITAL berada di Jl Pendidikan , Toya Pakeh, Sakti, Nusa Penida. Dirumah sakit Pratama tersedia layanan darurat 24 jam dengan Dokter dan Perawat. PRATAMA NUSA PENIDA HOSPITAL mampu untuk memberikan pengobatan ringan serta operasi bedah ringan. Namun jika ada perlu penanganan serius, maka akan dikirim ke rumah sakit pusat Sanglah, Bali.
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Bagaimana transportasi ke <?= $dataWisata['nama']; ?>?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body mt-2">
                                    1. Kapal Cepat dari Pantai Sanur Menggunakan kapal cepat merupakan cara paling cepat dan paling fleksibel untuk menuju ke Nusa Penida. Kapal cepat ini berangkat dari Pantai Sanur di Sebelah Timur Kota Denpasar dan akan Berlabuh di beberapa dermaga seperti Pelabuhan Banjar Nyuh, Buyuk, Sampalan, dan Toya Pakeh. <br>
                                    2. Kapal Tradisional (Jukung). Ada banyak titik penyeberangan yang bisa digunakan untuk menyeberang ke nusa penida dengan kapal tradisional ini Yaitu melalui pelabuhan kusamba yang akan berlabuh di pelabuhan toya pakeh, melalui pelabuhan banjar bias akan berlabuh di pelabuhan dekat kantor camat Nusa Penida, serta melalui pelabuhan Tri Buana yang akan akan berlabuh di pelabuhan Tambak. Dalam sekali jalan, pengunjung dibebankan biaya sebesar Rp. 55.000 untuk perjalanan selama 1 jam ini. <br>
                                    3. Kapal Ferry Kapal Ferry Nusa Jaya Abadi ini dapat kita temui di pelabuhan Padang Bai, Klungkung, Bali sekitar 1 jam perjalanan dari Kota Denpasar.
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>
                </div>

                <div class="location-review">
                    <h3 class="judul"><?= $dataWisata['nama']; ?> Review</h3>
                    <div class="location-review-content">
                        <div class="review d-flex justify-content-between">
                            <div class="d-flex flex-row col-md-6">
                                <div><img src="/assets/img/star.png" alt=""> </div>
                                <div class="review-rating">
                                    <p class="font-weight-bold">4.8 <span class="text-dark">(73 Review)</span></p>
                                </div>
                            </div>

                            <div class="input-group col-md-4">
                                <p>Sort by : </p>
                                <select class="dropdown-toggle custom-select ml-3" id="inputGroupSelect">
                                    <option selected>Rating</option>
                                    <option value="1">Date</option>
                                </select>
                            </div>
                        </div>

                        <div class="comments">

                            <?php foreach ($komentar as $dataKomentar) : ?>

                                <?php $dataGambar =  'data:image/jpeg;base64,' . base64_encode($dataKomentar['gambar']) . ''; ?>

                                <div class="comment">
                                    <div class="reviewer">
                                        <div class="d-flex">
                                            <div class="reviewer-images">
                                                <img src="/assets/img/review.png" alt="">
                                            </div>
                                            <div class="ml-3">
                                                <p class="title">Ronald Richards</p>
                                                <img src="/assets/img/rating.png" class="review-rating">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="reviewer-comment ml-5">
                                        <p class="date">30 Agustus, 2020</p>
                                        <p class="review"><?= $dataKomentar['komentar']; ?></p>
                                        <div class="review-image">
                                            <img src="/assets/img/review-images.png" alt="">
                                        </div>
                                        <hr>
                                    </div>
                                </div>

                            <?php endforeach; ?>

                        </div>


                        <div class="tulis-review d-flex justify-content-between">
                            <div class="ml-5 d-flex justify-content-between button-pagination ">
                                <div class="review-modal">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn py-3 btn-review mt-3 ml-2" data-toggle="modal" data-target="#modalReview">
                                        Tulis Review Kamu Disini
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal" id="modalReview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="exampleModalLabel">Tulis Review</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Komentar</label>
                                                            <textarea class="form-control" id="message-text"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Beri Rating</label>
                                                            <div class="starrating risingstar d-flex justify-content-center flex-row-reverse">
                                                                <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"></label>
                                                                <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"></label>
                                                                <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"></label>
                                                                <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"></label>
                                                                <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"></label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="message-text" class="col-form-label">Upload Gambar</label>
                                                            <input type="file" class="form-control border-0">
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-send">OK</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <nav class="d-flex justify-content-center mt-4 pagination">
                                    <ul class="pagination pagination-review ml-5">
                                        <li class="page-item page-item-review">
                                            <a class="page-link text-center" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item active page-item-review"><a class="page-link text-center" href="#">
                                                <span class="page-link text-center">
                                                    1
                                                    <span class="sr-only">(current)</span>
                                            </a>
                                        </li>
                                        <li class="page-item page-item-review"><a class="page-link text-center" href="#">2</a></li>
                                        <li class="page-item page-item-review"><a class="page-link text-center" href="#">3</a></li>
                                        <li class="page-item page-item-review">
                                            <a class="page-link text-center" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav> -->
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

            <div class="right col-lg-4 pl-lg-0 mt-3">
                <div class="card card-details card-right">
                    <div class="contact-agen container ml-3">
                        <h4 class="mt-4 mb-4">Kontak Agen</h4>
                        <div class="card-agen ">
                            <h5 class="mt-4 mb-3">Agen Travel 1</h5>
                            <div class="agen-content">
                                <div class="row d-flex flex-row">
                                    <div class="ml-3 mr-2"><img src="/assets/img/comment.png"></div>
                                    <p>08123456789</p>
                                </div>
                                <div class="row second-row d-flex flex-row">
                                    <div class="ml-3 mr-2"><img src="/assets/img/phone-call.png"></div>
                                    <p>nusaagen1@gmail.com</p>
                                </div>
                                <hr>
                            </div>
                        </div>

                        <div class="card-agen ">
                            <h5 class="mt-4 mb-3">Agen Travel 2</h5>
                            <div class="agen-content">
                                <div class="row d-flex flex-row">
                                    <div class="ml-3 mr-2"><img src="/assets/img/comment.png"></div>
                                    <p>08123456789</p>
                                </div>
                                <div class="row second-row d-flex flex-row">
                                    <div class="ml-3 mr-2"><img src="/assets/img/phone-call.png"></div>
                                    <p>nusaagen1@gmail.com</p>
                                </div>
                                <hr>
                            </div>
                        </div>

                        <div class="card-agen ">
                            <h5 class="mt-4 mb-3">Agen Travel 3</h5>
                            <div class="agen-content">
                                <div class="row d-flex flex-row">
                                    <div class="ml-3 mr-2"><img src="/assets/img/comment.png"></div>
                                    <p>08123456789</p>
                                </div>
                                <div class="row second-row d-flex flex-row">
                                    <div class="ml-3 mr-2"><img src="/assets/img/phone-call.png"></div>
                                    <p>nusaagen1@gmail.com</p>
                                </div>
                                <hr>
                            </div>
                        </div>

                        <div class="card-agen ">
                            <h5 class="mt-4 mb-3">Agen Travel 4</h5>
                            <div class="agen-content">
                                <div class="row d-flex flex-row">
                                    <div class="ml-3 mr-2"><img src="/assets/img/comment.png"></div>
                                    <p>08123456789</p>
                                </div>
                                <div class="row second-row d-flex flex-row">
                                    <div class="ml-3 mr-2"><img src="/assets/img/phone-call.png"></div>
                                    <p>nusaagen1@gmail.com</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="wisata-lainnya">
            <h3 class="judul">Wisata Lainnya</h3>
            <section class="section-popular-content gallery mt-4" id="popular-content-detail">
                <div class="container">
                    <div class="section-popular-travel row justify-content-center mt-4">
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <a href="detail-page.html">
                                <div class="card-travel d-flex flex-column" style="background-image: url('/assets/img/1.png');">
                                    <div class="travel-content">
                                        <h3>Nusa Penida</h3>
                                        <p>Badung, Bali</p>
                                        <img src="/assets/img/star.png" alt=""> 4.9 <span>(92 Review)</span>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="card-travel d-flex flex-column" style="background-image: url('/assets/img/2.png');">
                                <div class="travel-content">
                                    <h3>Tanah Lot</h3>
                                    <p>Tabanan, Bali</p>
                                    <img src="/assets/img/star.png" alt=""> 4.9 <span>(64 Review)</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="card-travel d-flex flex-column" style="background-image: url('/assets/img/3.png');">
                                <div class="travel-content">
                                    <h3>Candi Borobudur</h3>
                                    <p>Magelang, Jawa Tengah</p>
                                    <img src="/assets/img/star.png" alt=""> 4.8 <span>(46 Review)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="modals mt-5">
            <div class="btn-container fixed-bottom">
                <button type="button" class="btn btn-modal mt-3" data-toggle="modal" data-target="#exampleModal">
                    Kontak Agen
                </button>
            </div>

            <!-- Modal -->
            <div class="modal fade ml-2" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel">Kontak Agen</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card-agen ">
                                <h5 class="mb-3">Agen Travel 1</h5>
                                <div class="agen-content">
                                    <div class="row d-flex flex-row">
                                        <div class="ml-3 mr-2"><img src="/assets/img/comment.png"></div>
                                        <p>08123456789</p>
                                    </div>
                                    <div class="row second-row d-flex flex-row">
                                        <div class="ml-3 mr-2"><img src="/assets/img/phone-call.png"></div>
                                        <p>nusaagen1@gmail.com</p>
                                    </div>
                                    <hr>
                                </div>
                            </div>

                            <div class="card-agen ">
                                <h5 class="mt-4 mb-3">Agen Travel 2</h5>
                                <div class="agen-content">
                                    <div class="row d-flex flex-row">
                                        <div class="ml-3 mr-2"><img src="/assets/img/comment.png"></div>
                                        <p>08123456789</p>
                                    </div>
                                    <div class="row second-row d-flex flex-row">
                                        <div class="ml-3 mr-2"><img src="/assets/img/phone-call.png"></div>
                                        <p>nusaagen1@gmail.com</p>
                                    </div>
                                    <hr>
                                </div>
                            </div>

                            <div class="card-agen ">
                                <h5 class="mt-4 mb-3">Agen Travel 3</h5>
                                <div class="agen-content">
                                    <div class="row d-flex flex-row">
                                        <div class="ml-3 mr-2"><img src="/assets/img/comment.png"></div>
                                        <p>08123456789</p>
                                    </div>
                                    <div class="row second-row d-flex flex-row">
                                        <div class="ml-3 mr-2"><img src="/assets/img/phone-call.png"></div>
                                        <p>nusaagen1@gmail.com</p>
                                    </div>
                                    <hr>
                                </div>
                            </div>

                            <div class="card-agen ">
                                <h5 class="mt-4 mb-3">Agen Travel 4</h5>
                                <div class="agen-content">
                                    <div class="row d-flex flex-row">
                                        <div class="ml-3 mr-2"><img src="/assets/img/comment.png"></div>
                                        <p>08123456789</p>
                                    </div>
                                    <div class="row second-row d-flex flex-row">
                                        <div class="ml-3 mr-2"><img src="/assets/img/phone-call.png"></div>
                                        <p>nusaagen1@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>



<?= $this->endSection('content'); ?>