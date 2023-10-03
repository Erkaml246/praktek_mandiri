<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Praktek | Mandiri</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('aset/') ?>img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url('aset/') ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>css/gijgo.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>css/animate.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url('aset/') ?>css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<style>
    html{
        scroll-behavior: smooth;
    }
</style>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo-img">
                                <!-- <a href="index.html"> -->
                                    <img src="<?= base_url('aset/') ?>img/logo.png" alt="">
                                <!-- </a> -->
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="menu_wrap d-none d-lg-block">
                                <div class="menu_wrap_inner d-flex align-items-center justify-content-end">
                                    <div class="main-menu">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="#slider_area">Beranda</a></li>
                                                <li><a href="#about">Tentang</a></li>
                                                <li><a href="#daftar">Daftar</a></li>
                                                <li><a href="#layanan">Layanan</a></li>
                                                <li><a href="<?= base_url('/login') ?>">Login</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- <div class="book_room">
                                        <div class="book_btn">
                                            <a class="popup-with-form" href="#test-form">Pendaftaran</a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area" id="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <span>Praktek Mandiri</span>
                                <h3> <span>Inovasi</span> <br>
                                    Pelayanan Lebih Baik</h3>
                                <div class="boxed-btn5"><a class="popup-with-form" href="#test-form">Daftar</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- welcome_clicnic_area_start -->
    <div class="welcome_clicnic_area" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_thumb">
                        <div class="thumb_1">
                            <img src="<?= base_url('aset/') ?>img/about/foto-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        <h3>Selamat Datang
                            <span>Praktek Mandiri PakManang</span></h3>
                        <p>Pelayanan praktek mandiri dokter dapat mencakup berbagai jenis layanan medis yang disediakan oleh seorang dokter di tempat prakteknya sendiri.</p>
                        <ul>
                            <li> <i class="flaticon-verified"></i> Menjaga Privasi dan Data </li>
                            <li> <i class="flaticon-verified"></i> Mendukung Pelayanan Kesehatan Primer </li>
                            <li> <i class="flaticon-verified"></i> Meningkatkan Efektivitas Sistem Kesehatan </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome_clicnic_area_end -->



    <div class="book_apointment_area" id="daftar">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="popup_box ">
                        <div class="popup_inner">
                            <h3>
                                Silahkan 
                            <span>Daftar</span>
                            </h3>
                            <form action="#">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <select class="form-select wide" id="default-select" class="">
                                            <option data-display="Pilih Dokter">Pilih dokter</option>
                                            <option value="1">P. Manang</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-9">
                                        <input type="text"  placeholder="nama">
                                    </div>
                                    <div class="col-xl-3">
                                        <input type="number"  placeholder="Usia">
                                    </div>
                                    <div class="col-xl-12">
                                        <select class="form-select wide" id="default-select" class="">
                                            <option data-display="Jenis Kelamin">Jenis Kelamin</option>
                                            <option value="1">Laki - Laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-12">
                                        <input type="number"  placeholder="no Telp">
                                    </div>

                                    <div class="col-xl-12">
                                        <button type="submit" class="boxed-btn3">Buat Pendaftaran</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- quality_area_start  -->
    <div class="quality_area" id="layanan">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-6">
                    <div class="section_title mb-55 text-center">
                        <h3>Melayani</h3>
                        <p>_____________________________________________</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_quality">
                        <div class="icon">
                            <i class="flaticon-customer-service"></i>
                        </div>
                        <h3>Konsultasi</h3>
                        <p> konsultasi mengenai masalah kesehatan.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_quality">
                        <div class="icon">
                            <i class="flaticon-find"></i>
                        </div>
                        <h3>Pemeriksaan Fisik</h3>
                        <p>Dokter akan melakukan pemeriksaan fisik untuk mengevaluasi kondisi fisik pasien.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_quality">
                        <div class="icon">
                            <i class="flaticon-doctor"></i>
                        </div>
                        <h3>Tindakan Medis Sederhana</h3>
                        <p> Beberapa tindakan medis sederhana.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- quality_areaend  -->

    <!-- Emergency_contact start -->
    <div class="Emergency_contact">
        <div class="Emergency_contact_inner ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="single_emergency">
                            <div class="info">
                                <span>Kami disini Melayani Anda</span>
                                <h3>Pendaftaran</h3>
                            </div>
                            <div class="info_button">
                                <div class="boxed-btn5"><a class="popup-with-form" href="#test-form">Daftar</a></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single_emergency align-items-center d-flex justify-content-end">
                            <div class="icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="info">
                                <span>Perawatan Darurat</span>
                                <h3>+62 882-1744-2474</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Emergency_contact end -->

    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="index.php">
                                    <img src="<?= base_url('aset/') ?>img/logo.png" alt="">
                                </a>
                            </div>
                            <p class="address_text">Memberikan pelayanan <br> yang tebaik, dan memberi <br>Perawatan yang efektif dan tepat waktu.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Info Kontak
                            </h3>
                            <ul class="meting_time">
                                <li>+62 882-1744-2474</li>
                                <li>Pakmanang@gmail.com</li>
                                <li><a href="#">JL. PB.Sudirman,Krajan, Kec. Sumberbaru, Kabupaten Jember, Jawa Timur</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4  col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Jadwal
                            </h3>
                            <ul class="meting_time">
                                <li class="d-flex justify-content-between "><span>Senin - Jum'at</span> <span>15.00 - 22.00</span></li>
                                <li class="d-flex justify-content-between "><span>Sabtu	</span> <span>8.00 - 21.00</span></li>
                                <li class="d-flex justify-content-between "><span>Minggu</span> <span>8.00 - 13.00</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="bordered_1px "></div>
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | PakManang <!-- <i class="ti-heart" aria-hidden="true"></i> --> by <a href="#" target="_blank">Praktek_Mandiri</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- link that opens popup -->

    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>
                    Silahkan 
                <span>Daftar</span>
                </h3>
                <form action="#">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <select class="form-select wide" id="default-select" class="">
                                            <option data-display="Pilih Dokter">Pilih dokter</option>
                                            <option value="1">P. Manang</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-9">
                                        <input type="text"  placeholder="nama">
                                    </div>
                                    <div class="col-xl-3">
                                        <input type="number"  placeholder="Usia">
                                    </div>
                                    <div class="col-xl-12">
                                        <select class="form-select wide" id="default-select" class="">
                                            <option data-display="Jenis Kelamin">Jenis Kelamin</option>
                                            <option value="1">Laki - Laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-12">
                                        <input type="number"  placeholder="no Telp">
                                    </div>

                                    <div class="col-xl-12">
                                        <button type="submit" class="boxed-btn3">Buat Pendaftaran</button>
                                    </div>
                                </div>
                </form>
            </div>
        </div>
    </form>
    <!-- form itself end -->

    <!-- JS here -->
    <script src="<?= base_url('aset/') ?>js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?= base_url('aset/') ?>js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url('aset/') ?>js/popper.min.js"></script>
    <script src="<?= base_url('aset/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('aset/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('aset/') ?>js/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('aset/') ?>js/ajax-form.js"></script>
    <script src="<?= base_url('aset/') ?>js/waypoints.min.js"></script>
    <script src="<?= base_url('aset/') ?>js/jquery.counterup.min.js"></script>
    <script src="<?= base_url('aset/') ?>js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url('aset/') ?>js/scrollIt.js"></script>
    <script src="<?= base_url('aset/') ?>js/jquery.scrollUp.min.js"></script>
    <script src="<?= base_url('aset/') ?>js/wow.min.js"></script>
    <script src="<?= base_url('aset/') ?>js/nice-select.min.js"></script>
    <script src="<?= base_url('aset/') ?>js/jquery.slicknav.min.js"></script>
    <script src="<?= base_url('aset/') ?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('aset/') ?>js/plugins.js"></script>
    <script src="<?= base_url('aset/') ?>js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="<?= base_url('aset/') ?>js/contact.js"></script>
    <script src="<?= base_url('aset/') ?>js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url('aset/') ?>js/jquery.form.js"></script>
    <script src="<?= base_url('aset/') ?>js/jquery.validate.min.js"></script>
    <script src="<?= base_url('aset/') ?>js/mail-script.js"></script>

    <script src="<?= base_url('aset/') ?>js/main.js"></script>
    <script>
        $('.datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar"></span>'
            }
        });

        $('.timepicker').timepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-clock-o"></span>'
            }
        });
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    </script>
</body>

</html>
