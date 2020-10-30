<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="shortcut icon" href="/assets/img/icon.png" type="image/x-icon">

    <!--Font Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600;700&display=swap" rel="stylesheet">

    <!--Stylesheet-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="/assets/styles/<?= ($navActive === 'home' || $navActive === 'about') ? 'main' : null; ?>.css">
    <link rel="stylesheet" href="/assets/styles/<?= ($navActive === 'location' || $navActive === 'popular') ? 'custom' : null; ?>.css">
    <link rel="stylesheet" href="/assets/styles/<?= ($navActive === 'login' || $navActive === 'register') ? 'registers' : null; ?>.css">

</head>

<body>

    <?php if ($navActive === 'login' || $navActive === 'register') {
    } else { ?>
        <!-- Navbar -->
        <div class="container">
            <nav class="row navbar navbar-expand-lg navbar-light <?= ($navActive === 'location' || $navActive === 'popular') ? 'popular bg-white mt-4' : null; ?>">
                <a href="/" class="navbar-brand mr-auto">
                    <img src="/assets/img/Logo<?= ($navActive === 'location' || $navActive === 'popular') ? '-1' : null; ?>.png" alt="Whytrip">
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
                    <span class="navbar-toggler-icon hamburger"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-around" id="navb">
                    <ul class="navbar-nav ">
                        <li class="nav-item mx-md-2">
                            <a href="/" class="nav-link <?= ($navActive === 'home') ? 'active' : null; ?>">Home</a>
                        </li>
                        <li class="nav-item mx-md-2">
                            <a href="/daerah" class="nav-link <?= ($navActive === 'location') ? 'active' : null; ?>">Location</a>
                        </li>
                        <li class="nav-item mx-md-2">
                            <a href="/pages/about" class="nav-link <?= ($navActive === 'about') ? 'active' : null; ?>">About</a>
                        </li>
                    </ul>

                    <!--Mobile Button-->

                    <form class="form-inline d-sm-block d-md-none">
                        <?php if (logged_in()) : ?>
                            <button class="btn btn-login my-2 my-sm-0 px-4">
                                <a href="/logout">Logout</a>
                            </button>
                        <?php else : ?>
                            <button class="btn btn-register my-2 my-sm-0 px-4">
                                <a href="/register">Register</a>
                            </button>
                            <button class="btn btn-login my-2 my-sm-0 px-4">
                                <a href="/login">Login</a>
                            </button>
                        <?php endif ?>
                    </form>
                </div>

                <!--Dekstop Button-->

                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <?php if (logged_in()) : ?>
                        <button class="btn btn-login my-2 my-sm-0 px-4 mr-3">
                            <a href="/logout">Logout</a>
                        </button>
                    <?php else : ?>
                        <button class="btn btn-register my-2 my-sm-0 px-4 mr-3">
                            <a href="/register">Register</a>
                        </button>
                        <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                            <a href="/login">Login</a>
                        </button>
                    <?php endif ?>
                </form>

            </nav>
        </div>
    <?php } ?>

    <?= $this->renderSection('content'); ?>

    <?php if ($navActive === 'login' || $navActive === 'register') {
    } else { ?>
        <!--Footer-->
        <footer class="section-footer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 mt-5">
                        <div class="row row-list mt-5 pt-5 ml-5">
                            <div class="col-12 col-lg-4">
                                <img src="/assets/img/Logo-1.png" alt="">
                                <ul class="list-unstyled">
                                    <li class="jalan mt-3">Jalan DI Panjaitan no 56,
                                        <br>
                                        Purwokerto Selatan, Banyumas</li>
                                    <li>
                                        <ul class="list-unstyled sosmed mt-3">
                                            <a href="https://www.facebook.com/" class="mr-3"><img src="/assets/img/fb.png"></a>
                                            <a href="https://twitter.com/" class="mr-3"><img src="/assets/img/tw.png"></a>
                                            <a href="https://www.linkedin.com/" class="mr-3"><img src="/assets/img/in.png"></a>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-12 col-lg-3">
                                <h5>NAVIGATION</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Location</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-3">
                                <h5>ABOUT US</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Team</a></li>
                                    <li><a href="#">Agen</a></li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-2">
                                <h5>CONTACT</h5>
                                <ul class="list-unstyled">
                                    <li><a href="#">0822 3498 1535</a></li>
                                    <li><a href="#">halo@why.trip</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <section class="copyright mt-5 mb-5 text-center">&#x24B8; Copyright 2020 whytrip</section>
                </div>
            </div>
        </footer>
    <?php } ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="/assets/script/<?= ($navActive === 'login' || $navActive === 'register') ? 'register' : 'main'; ?>.js"></script>
</body>

</html>