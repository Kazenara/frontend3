<?php
require("config.php");
session_start();
error_reporting(1);

if (isset($_POST['submit-reservation'])) {
  $userNama = $_POST['txt_nama'];
  $userNoHp = $_POST['txt_nohp'];
  $waktu = date('Y-m-d', strtotime($_POST['txt_waktu']));
  $note = ['txt_note'];
  

  $query    = "INSERT INTO reservation SET nama = '$userNama', nohp = '$userNoHp',  waktu = '$waktu',  note ='$note'";
  $result   = mysqli_query($koneksi, $query);
  

}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Lingkar Angkringan</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/lingkar_angkringan.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/revisi logo no bg 2.png " chefs>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <!--<li class="scroll-to-section"><a href="#chefs">Features</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>-->
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>Lingkar Angkringan dan Cafe</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Make A Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/4.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/9.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/6.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Leave A Delicious Memory For You</h2>
                        </div>
                        <p>Lingkar Angkringan dan cafe yang berlokasi dikabupaten Jember. Lebih tepatnya di perumahan Tidar asri, Sumbersari. <br>
                            <br>Yang membuat Angkringan lingkar dan cafe berbeda dengan yang lainnya adalah, disini tersedia banyak sekali pilihan makanan dan minuman. Selain itu, lingkar angkringan juga memiliki tempat yang cukup luas dibanding angkringan lainnya. Pengunjung bisa membuat reservasi tempat untuk acara atau kegiatan tertentu.<br>
                            <br>Kapasitas lingkar angkringan ini kurang lebih dapat menampung 200 orang. Lingkar angkringan juga menyediakan tempat duduk lesehan ataupun meja dan kursi. Makanan yang dijual meliputi nasi bakar, nasi goreng, mie goreng, roti bakar, berbagai macam sate, dan lain-lain. Minuman yang dijual pun beraneka macam seperti teh, jeruk, kopi, wedang jahe, susu, bahkan minuman bubuk dalam kemasan.<br>
                            <br>Semua dijual dengan harga yang sangat terjangkau. Walaupun terjangkau, lingkar angkringan memiliki kualitas rasa dan kebersihan yang menjanjikan. Gratis ongkir untuk wilayah perumahan tidar asri dengan pembayaran COD. Yuk pesan sekarang! <br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="https://www.instagram.com/reel/CklSNTuJb33/?utm_source=ig_web_copy_link"><i class="fa fa-play"></i></a>
                            <img src="assets/images/1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Menu Area Starts ***** -->
    <section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu Gallery</h6>
                        <h2>Our Best-seller menu</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    <div class="item">
                        <div class='card card1'>
                            <div class="price"><h6>$14</h6></div>
                            <div class='info'>
                              <h1 class='title'>Chocolate Cake</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card2'>
                            <div class="price"><h6>$22</h6></div>
                            <div class='info'>
                              <h1 class='title'>Klassy Pancake</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class="price"><h6>$18</h6></div>
                            <div class='info'>
                              <h1 class='title'>Tall Klassy Bread</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card4'>
                            <div class="price"><h6>$10</h6></div>
                            <div class='info'>
                              <h1 class='title'>Blueberry CheeseCake</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card5'>
                            <div class="price"><h6>$8.50</h6></div>
                            <div class='info'>
                              <h1 class='title'>Klassy Cup Cake</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class='card card3'>
                            <div class="price"><h6>$7.25</h6></div>
                            <div class='info'>
                              <h1 class='title'>Klassic Cake</h1>
                              <p class='description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedii do eiusmod teme.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->

<!-- ***** Menu Area Starts ***** -->
<section class="section" id="offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>OUR MENU</h6>
                    <h2>U can choose your favourite menu</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row" id="tabs">
                    <div class="col-lg-12">
                        <div class="heading-tabs">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <ul>
                        
                                      <li><a href='#tabs-1'><img src="assets/images/food-removebg-preview.png" alt="">Food</a></li>
                                      <li><a href='#tabs-2'><img src="assets/images/snack-removebg-preview.png" alt="">Snack</a></a></li>
                                      <li><a href='#tabs-3'><img src="assets/images/drink-removebg-preview.png" alt="">Drink</a></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <section class='tabs-content'>
                            <article id='tabs-1'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-01.jpg" alt="">
                                                        <h4>Nasi Bakar</h4>
                                                        <p>Isian varian: Ayam, Tuna <br> <br> </p>
                                                        <div class="price">
                                                            <h6>6k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-02.jpg" alt="">
                                                        <h4>Mie</h4>
                                                        <p>Varian: Mie goreng, mie kuah, mie nyemek. Bisa request tingkat kepedasan.</p>
                                                        <div class="price">
                                                            <h6>10k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-03.jpg" alt="">
                                                        <h4>Nasi goreng</h4>
                                                        <p>Bisa request tingkat kepedesan. <br> </p>
                                                        <div class="price">
                                                            <h6>10k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-04.jpg" alt="">
                                                        <h4>Bihun goreng</h4>
                                                        <p>Bisa request tingkatkepedesan. <br><br> </p>
                                                        <div class="price">
                                                            <h6>10k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-05.jpg" alt="">
                                                        <h4>Roti bakar 1 rasa</h4>
                                                        <p>Varian: Keju, Coklat, Blueberry, strawberry, nanas.</p>
                                                        <div class="price">
                                                            <h6>6k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-05.jpg" alt="">
                                                        <h4>Roti bakar 2 rasa</h4>
                                                        <p>Varian: Keju, Coklat, Blueberry, strawberry, nanas.</p>
                                                        <div class="price">
                                                            <h6>8k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>  
                            <article id='tabs-2'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/snack-item-01.jpg" alt="">
                                                        <h4>Sate 1,5k</h4>
                                                        <p>Varian: sate tempe bacem dan tahu bacem.</p>
                                                        <div class="price">
                                                            <h6>1,5k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/snack-item-01.jpg" alt="">
                                                        <h4>Sate 2k</h4>
                                                        <p>Varian: Sate tempura, bintang, siomay, telur puyuh, ampela, usus, dan pentol</p>
                                                        <div class="price">
                                                            <h6>2k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/snack-item-01.jpg" alt="">
                                                        <h4>Sate 2,5k</h4>
                                                        <p>Varian: sate sosis ayam dan sapi. Sate scallop, dan sate otak-otak.</p>
                                                        <div class="price">
                                                            <h6>2.5k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/snack-item-01.jpg" alt="">
                                                        <h4>Sate 3,5k</h4>
                                                        <p>Varian: Sate dumpling keju, ayam, dan bolognese.</p>
                                                        <div class="price">
                                                            <h6>3.5k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/snack-item-02.jpg" alt="">
                                                        <h4>Tahu crispy</h4>
                                                        <p>Disajikan dengan saus sambal.</p>
                                                        <div class="price">
                                                            <h6>6k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/snack-item-03.jpg" alt="">
                                                        <h4>Kentang</h4>
                                                        <p>Disajikan dengan saus sambal dan mayonaise.</p>
                                                        <div class="price">
                                                            <h6>9k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>  
                            <article id='tabs-3'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/drink-item-01.jpg" alt="">
                                                        <h4>Kopi hitam</h4>
                                                        <p>Bisa request tingkat kemanisan.</p>
                                                        <div class="price">
                                                            <h6>4k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/drink-item-04.jpg" alt="">
                                                        <h4>Kopi susu</h4>
                                                        <p>Bisa request tingkat kemanisan.</p>
                                                        <div class="price">
                                                            <h6>5k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/drink-item-03.jpg" alt="">
                                                        <h4>Wedang Jahe</h4>
                                                        <p>Bisa request tingkat kemanisan.</p>
                                                        <div class="price">
                                                            <h6>4k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/drink-item-02.jpg" alt="">
                                                        <h4>Minuman kemasan</h4>
                                                        <p>Varian: Nutrisari, beng-beng, chocolatos coklat/matcha, nutrisari susu, cappucino, teh tarik, milo, dan josua. Pilihan dingin atau panas.</p>
                                                        <div class="price">
                                                            <h6>5k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-02.png" alt="">
                                                        <h4>MilkShake</h4>
                                                        <p>Varian: Melon, strawberry, leci, coklat, dan vanilla.</p>
                                                        <div class="price">
                                                            <h6>7k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-02.png" alt="">
                                                        <h4>Milk</h4>
                                                        <p>Varian: Taro, Oreo, redvelvet, Tiramissu, dan Bubblegum.</p>
                                                        <div class="price">
                                                            <h6>8k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-06.png" alt="">
                                                        <h4>Jahe susu</h4>
                                                        <p>Bisa request tingkat kemanisan.</p>
                                                        <div class="price">
                                                            <h6>5k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-01.png" alt="">
                                                        <h4>Teh manis</h4>
                                                        <p>Bisa request tingkat kemanisan. Pilihan dingin atau panas.</p>
                                                        <div class="price">
                                                            <h6>4k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-04.png" alt="">
                                                        <h4>Lemon tea</h4>
                                                        <p>Bisa request tingkat kemanisan. Pilihan dingin atau panas.</p>
                                                        <div class="price">
                                                            <h6>5k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-04.png" alt="">
                                                        <h4>Jus</h4>
                                                        <p>Varian: Melon, Apel, dan jambu. Bisa request tingkat kemanisan.</p>
                                                        <div class="price">
                                                            <h6>6k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-04.png" alt="">
                                                        <h4>Syrup</h4>
                                                        <p>Varian: Leci, Melon, Strawberry, dan Vanilla. Bisa request tingkat kemanisan.</p>
                                                        <div class="price">
                                                            <h6>5k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-04.png" alt="">
                                                        <h4>Squash</h4>
                                                        <p>Varian: Leci, Melon, Strawberry, dan Vanilla. Bisa request tingkat kemanisan.</p>
                                                        <div class="price">
                                                            <h6>8k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>   
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Chefs Area Ends ***** --> 

    <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Staff</h6>
                        <h2>We offer the best serve for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <!--<div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/__gustav.g"><i class="fa fa-instagram"></i></a></li>
                            </ul>-->
                            <img src="assets/images/gustavito.jpeg" alt="Chef #1">
                        </div>
                        <div class="down-content">
                            <h4>Gustavito Gunawan</h4>
                            <span>Leader staff</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <!--<ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/gesthi.rh"><i class="fa fa-instagram"></i></a></li>
                            </ul>-->
                            <img src="assets/images/gesti.jpeg" alt="Chef #2">
                        </div>
                        <div class="down-content">
                            <h4>Gesti</h4>
                            <span>Kitchen Chef</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <!--<div class="overlay"></div>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/naufalnmf_22"><i class="fa fa-instagram"></i></a></li>
                            </ul>-->
                            <img src="assets/images/naufal.jpeg" alt="Chef #3">
                        </div>
                        <div class="down-content">
                            <h4>Naufal</h4>
                            <span>Kitchen Chef</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Chefs Area Ends ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Here You Can Make A Reservation Or Just visit to our cafe</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Whatsapp</h4>
                                    <span><a href="https://wa.me/6287873174354">087873174354</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa-brands fa-instagram"></i>
                                    <h4>Instagram</h4>
                                    <span><a href="https://www.instagram.com/lingkar.cafe_">@lingkar.cafe_</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="" method="post">
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Form Reservation</h4>
                            </div>
                            <!-- <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                              </fieldset>
                            </div> -->
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                  <input name="name" type="text" id="name" placeholder="Your Name*">
                                </fieldset>
                              </div>
                            <!-- <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                            </fieldset>
                            </div> -->
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                  <input name="phone" type="text" id="phone" placeholder="Phone Number*">
                              </fieldset>
                              </div>
                            <!-- <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="time" type="text" id="time" placeholder="Time" required="">
                              </fieldset>
                            </div> -->
                            <div class="col-lg-6 col-sm-12">
                                <fieldset>
                                  <input name="time" type="text" id="time" placeholder="Time">
                                </fieldset>
                              </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <select value="number-guests" name="number-guests" id="number-guests">
                                    <option value="number-guests">Participants</option>
                                    <option name="1" id="1">1-10</option>
                                    <option name="2" id="2">< 20</option>
                                    <option name="3" id="3">< 30</option>
                                    <option name="4" id="4">< 40</option>
                                    <option name="5" id="5">< 50</option>
                                    <option name="6" id="6">< 60</option>
                                    <option name="7" id="7">< 70</option>
                                    <option name="8" id="8">< 80</option>
                                    <option name="9" id="9">< 90</option>
                                    <option name="10" id="10">< 100</option>
                                    <option name="11" id="11">< 200</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <div id="filterDate2">    
                                  <div class="input-group date" data-date-format="dd/mm/yyyy">
                                    <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                                    <div class="input-group-addon" >
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                  </div>
                                </div>   
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <select value="time" name="time" id="time">
                                    <option value="time">Booked for</option>
                                    <option name="Breakfast" id="Breakfast">Meeting</option>
                                    <option name="Lunch" id="Lunch">Party</option>
                                    <option name="Dinner" id="Dinner">Dinner</option>
                                </select>
                              </fieldset>
                            </div>
                            <!-- <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="NOTE" required=""></textarea>
                              </fieldset>
                            </div> -->
                            <div class="col-lg-12">
                                <fieldset>
                                  <textarea name="message" rows="6" id="message" placeholder="NOTE"></textarea>
                                </fieldset>
                              </div>
                            <!-- <div class="col-lg-12">
                              <fieldset>
                               <a href="wa.me/6281230147253"><button class="main-button-icon">Send to our whatsapp</button>
                              </fieldset>
                            </div> -->
                            <div class="col-lg-12">
                                <a href=”https://web.whatsapp.com/send?phone=6281230147253&text=Hallo admin, ini saya coba kode wa"><button>whatsapp</button></a>
                            </div>
                            
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <div class="col-lg-6 right-map">
                            <div id="map">
                            
                              <!-- You can easily copy and paste your own map point from Google Maps -> Share -> Embed a map -->
                                
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12469.776493332698!2d-80.14036379941481!3d25.907788681148624!2m3!1f357.26927939317244!2f20.870722720054623!3f0!3m2!1i1024!2i768!4f35!3m3!1m2!1s0x88d9add4b4ac788f%3A0xe77469d09480fcdb!2sSunny%20Isles%20Beach!5e1!3m2!1sen!2sth!4v1642869952544!5m2!1sen!2sth" width="50%" height="150px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                            </div>
                        </div>
                            <ul class="social-icons">
                                <li><a href="https://wa.me/6287873174354"><i class="fa fa-phone"></i></a></li>
                            <li><a href="https://www.instagram.com/lingkar.cafe_"><i class="fa fa-instagram"></i></a></li>
                            <br>
                            <p> Cluster Tidar Asri Blok X1/X2 </p>
                            <p> open : 14.00 - 02.00 </p>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/revisi logo putih 2.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p><b> © Copyright
                        
                        <br>Lingkar Angkringan dan Cafe</b></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>