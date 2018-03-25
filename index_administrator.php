<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>MEGA JAYA</title>
    <!--  
    Favicons
    =============================================
    -->
    <!--
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    -->
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="assets/lib/animate.css/animate.css" rel="stylesheet">
    <link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
<main>
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
    <nav class="navbar navbar-custom navbar-transparent navbar-fixed-top one-page" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span
                            class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span></button>
                <a class="navbar-brand" href="index3.php">Mega Jaya</a>
            </div>
            <div class="collapse navbar-collapse" id="custom-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index3.php">Beranda</a></li>

                    <li><a class="section-scroll" href="#produksi">Produk</a></li>
                    <li><a class="section-scroll" href="#penjual">Data Penjual</a></li>
                    <li><a class="section-scroll" href="#pemesanan">Pemesanan</a></li>
                    <li><a class="section-scroll" href="#riwayat">Riwayat Transaksi</a></li>
                    <li><a class="section-scroll" href="#kritik">KritikSaran</a></li>
                    <li><a href="index.php">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="home-section home-full-height bg-dark bg-gradient" id="home"
             data-background="assets/images/administrator1.jpg">
        <div class="titan-caption">
            <div class="caption-content">
                <div class="font-alt mb-30 titan-title-size-1">BAKPAO MEGA JAYA</div>
                <div class="font-alt mb-40 titan-title-size-4">ADMINISTRATOR</div>
            </div>
        </div>
    </section>
    <div class="main">
        <section class="module" id="penjual">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt">Data Penjual</h2>
                        <div class="module-subtitle font-serif">Daftar Data Penjual</div>
                        <form class="form" role="form">
                            <div class="form-group">
                                <input class="form-control input-lg" type="text" placeholder="ID PENJUAL"/>
                            </div>

                        </form>
                        <hr class="divider-w mt-10 mb-20">
                        <p class="btn-list">
                            <button class="btn btn-g btn-round" type="submit">Cari</button>&nbsp;
                    </div>
                    <hr class="divider-w pt-20">
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="product-title font-alt">*klik nama penjual untuk melihat penghasilan</p>
                            <table class="table table-striped table-border checkout-table">
                                <tbody>
                                <tr>
                                    <th>No</th>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Kartu Identitas</th>
                                    <th>Kontak</th>
                                    <th>Hapus</th>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="product-title font-alt">1</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">PJ001</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt"><a href="lihathasiljual.php">Tunggul</a></h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">5115100154</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">081234567891</h5>
                                    </td>

                                    <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                    </td>

                                </tr>


                                <tr>
                                    <td>
                                        <h5 class="product-title font-alt">2</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">PJ002</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt"><a href="lihathasiljual.php">Abyan</a></h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">5115100040</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">081235672341</h5>
                                    </td>

                                    <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <h5 class="product-title font-alt">3</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">PJ003</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt"><a href="lihathasiljual.php">Rafi</a></h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">5115100168</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">085665656787</h5>
                                    </td>

                                    <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <h5 class="product-title font-alt">4</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">PJ004</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt"><a href="lihathasiljual.php">Tegar Satrio</a>
                                        </h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">5115100178</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">083833577291</h5>
                                    </td>

                                    <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <h5 class="product-title font-alt">5</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">PJ005</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt"><a href="lihathasiljual.php">Ivan Fadhila</a>
                                        </h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">5115100039</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">081333367699</h5>
                                    </td>

                                    <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <h5 class="product-title font-alt">6</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">PJ006</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt"><a href="lihathasiljual.php">Adam Alfian</a>
                                        </h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">5115100705</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">081321567854</h5>
                                    </td>

                                    <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <h5 class="product-title font-alt">7</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">PJ007</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt"><a href="lihathasiljual.php">Ariya</a></h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">5115100123</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">085334567794</h5>
                                    </td>

                                    <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <h5 class="product-title font-alt">8</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">PJ008</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt"><a href="lihathasiljual.php">Yuga Mitra</a>
                                        </h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">5115100706</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">085235566891</h5>
                                    </td>

                                    <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <h5 class="product-title font-alt">9</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">PJ009</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt"><a href="lihathasiljual.php">Anto</a></h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">51151000191</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">085334466581</h5>
                                    </td>

                                    <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <h5 class="product-title font-alt">10</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">PJ010</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt"><a href="lihathasiljual.php">Satriyo</a></h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">5115100057</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">085234326786</h5>
                                    </td>

                                    <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                    </td>

                                </tr>
                                <!--
                                <tr>
                                  <td class="hidden-xs"><a href="#"><img src="assets/images/shop/product-13.jpg" alt="Men’s Casual Pack"/></a></td>
                                  <td>
                                    <h5 class="product-title font-alt">Ayam</h5>
                                  </td>
                                  <td class="hidden-xs">
                                    <h5 class="product-title font-alt">£20.00</h5>
                                  </td>
                                  <td>
                                    <input class="form-control" type="number" name="" value="1" max="50" min="1"/>
                                  </td>
                                  <td>
                                    <h5 class="product-title font-alt">£20.00</h5>
                                  </td>
                                  <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                                </tr>
                              -->
                                </tbody>
                            </table>
                            <hr class="divider-w mt-10 mb-20">
                            <p class="btn-list">
                                <button class="btn btn-d btn-round" type="submit">Update Data</button>&nbsp;


                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <h4 class="font-alt mb-0">Form Data Penjual</h4>
                                        <hr class="divider-w mt-10 mb-20">
                                        <form class="form" role="form">
                                            <div class="form-group">
                                                <input class="form-control input-lg" type="text"
                                                       placeholder="Nama Penjual"/>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" type="text" placeholder="Kartu Identitas"/>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control input-sm" type="text" placeholder="Kontak"/>
                                            </div>
                                        </form>
                                        <hr class="divider-w mt-10 mb-20">
                            <p class="btn-list">
                                <a href="index_administrator.php" class="btn btn-g btn-round"
                                   type="submit">Tambahkan</a>&nbsp;
                        </div>

                    </div>

                </div>
            </div>
    </div>
    <!--
    <div class="row multi-columns-row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="features-item">
          <div class="features-icon"><span class="icon-lightbulb"></span></div>
          <h3 class="features-title font-alt">Ideas and concepts</h3>
          <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="features-item">
          <div class="features-icon"><span class="icon-bike"></span></div>
          <h3 class="features-title font-alt">Optimised for speed</h3>
          <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="features-item">
          <div class="features-icon"><span class="icon-tools"></span></div>
          <h3 class="features-title font-alt">Designs &amp; interfaces</h3>
          <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="features-item">
          <div class="features-icon"><span class="icon-gears"></span></div>
          <h3 class="features-title font-alt">Highly customizable</h3>
          <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="features-item">
          <div class="features-icon"><span class="icon-tools-2"></span></div>
          <h3 class="features-title font-alt">Coding &amp; development</h3>
          <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="features-item">
          <div class="features-icon"><span class="icon-genius"></span></div>
          <h3 class="features-title font-alt">Features &amp; plugins</h3>
          <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="features-item">
          <div class="features-icon"><span class="icon-mobile"></span></div>
          <h3 class="features-title font-alt">Responsive design</h3>
          <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="features-item">
          <div class="features-icon"><span class="icon-lifesaver"></span></div>
          <h3 class="features-title font-alt">Dedicated support</h3>
          <p>Careful attention to detail and clean, well structured code ensures a smooth user experience for all your visitors.</p>
        </div>
      </div>
    </div>
  -->

    </div>
    </section>
    <!--
    <section class="main" data-background="assets/images/faq_bg.jpg" id="pemesanan">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
              <div class="video-title font-alt">Pemesanan</div>
              <div class="video-subtitle font-alt">Daftar Pemesanan Bakpao</div>
            </div>

        </div>
      </div>
    </section>
    <!--
    <section class="module pb-0" id="works">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <h2 class="module-title font-alt">Our Works</h2>
            <div class="module-subtitle font-serif"></div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <ul class="filter font-alt" id="filters">
              <li><a class="current wow fadeInUp" href="#" data-filter="*">All</a></li>
              <li><a class="wow fadeInUp" href="#" data-filter=".illustration" data-wow-delay="0.2s">Illustration</a></li>
              <li><a class="wow fadeInUp" href="#" data-filter=".marketing" data-wow-delay="0.4s">Marketing</a></li>
              <li><a class="wow fadeInUp" href="#" data-filter=".photography" data-wow-delay="0.6s">Photography</a></li>
              <li><a class="wow fadeInUp" href="#" data-filter=".webdesign" data-wow-delay="0.6s">Web Design</a></li>
            </ul>
          </div>
        </div>
      </div>
      <ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="works-grid">
        <li class="work-item illustration webdesign"><a href="portfolio-single-1.html">
            <div class="work-image"><img src="assets/images/work-1.jpg" alt="Portfolio Item"/></div>
            <div class="work-caption font-alt">
              <h3 class="work-title">Corporate Identity</h3>
              <div class="work-descr">Illustration</div>
            </div></a></li>
        <li class="work-item marketing photography"><a href="portfolio-single-1.html">
            <div class="work-image"><img src="assets/images/work-2.jpg" alt="Portfolio Item"/></div>
            <div class="work-caption font-alt">
              <h3 class="work-title">Bag MockUp</h3>
              <div class="work-descr">Marketing</div>
            </div></a></li>
        <li class="work-item illustration photography"><a href="portfolio-single-1.html">
            <div class="work-image"><img src="assets/images/work-3.jpg" alt="Portfolio Item"/></div>
            <div class="work-caption font-alt">
              <h3 class="work-title">Disk Cover</h3>
              <div class="work-descr">Illustration</div>
            </div></a></li>
        <li class="work-item marketing photography"><a href="portfolio-single-1.html">
            <div class="work-image"><img src="assets/images/work-4.jpg" alt="Portfolio Item"/></div>
            <div class="work-caption font-alt">
              <h3 class="work-title">Business Card</h3>
              <div class="work-descr">Photography</div>
            </div></a></li>
        <li class="work-item illustration webdesign"><a href="portfolio-single-1.html">
            <div class="work-image"><img src="assets/images/work-5.jpg" alt="Portfolio Item"/></div>
            <div class="work-caption font-alt">
              <h3 class="work-title">Business Card</h3>
              <div class="work-descr">Webdesign</div>
            </div></a></li>
        <li class="work-item marketing webdesign"><a href="portfolio-single-1.html">
            <div class="work-image"><img src="assets/images/work-6.jpg" alt="Portfolio Item"/></div>
            <div class="work-caption font-alt">
              <h3 class="work-title">Business Cards in paper clip</h3>
              <div class="work-descr">Marketing</div>
            </div></a></li>
      </ul>
    </section>
  -->

    <section class="module bg-dark-60 pt-0 pb-0 parallax-bg testimonial"
             data-background="assets/images/administrator2.jpg">
        <div class="testimonials-slider pt-140 pb-140">
            <ul class="slides">
                <li>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="module-icon"><span class="icon-quote"></span></div>
                                <h2 class="module-title font-alt">Kata Kata Penyemangat</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <blockquote class="testimonial-text font-alt">I am alone, and feel the charm of
                                    existence in this spot, which was created for the bliss of souls like mine.
                                </blockquote>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-4">
                                <div class="testimonial-author">
                                    <div class="testimonial-caption font-alt">
                                        <div class="testimonial-title">Jack Woods</div>
                                        <div class="testimonial-descr"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="module-icon"><span class="icon-quote"></span></div>
                                <h2 class="module-title font-alt">Kata Kata Penyemangat</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <blockquote class="testimonial-text font-alt">I should be incapable of drawing a single
                                stroke at the present moment; and yet I feel that I never was a greater artist than now.
                            </blockquote>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-4">
                            <div class="testimonial-author">
                                <div class="testimonial-caption font-alt">
                                    <div class="testimonial-title">Jim Stone</div>
                                    <div class="testimonial-descr"></div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        </li>
        </ul>
        </div>
    </section>

    <section class="module" id="riwayat">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Riwayat Transaksi</h2>
                    <div class="module-subtitle font-serif">Daftar Riwayat Transaksi Pemesanan Bakpao.</div>
                </div>
                <div class="col-sm-12">
                    <table class="table table-striped table-border checkout-table">
                        <tbody>
                        <tr>
                            <th>No</th>
                            <th>ID</th>
                            <th>Nama Penjual</th>
                            <th>Nama Admin</th>
                            <th>Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Biaya Admin</th>
                            <th>Total Harga</th>
                            <th>Waktu</th>
                            <th>Hapus</th>
                        </tr>
                        <tr>
                            <td>
                                <h5 class="product-title font-alt">1</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">RW001</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Satriyo</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Huda</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Keju</h5>
                            </td>


                            <td>
                                <h5 class="product-title font-alt">2 Buah</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.3100</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.1000</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.6300</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Selasa,07/11/2017</h5>
                            </td>
                            <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>

                        </tr>

                        <tr>

                            <td>
                                <h5 class="product-title font-alt">2</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">RW002</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Anto</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">Huda</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">Ayam</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">2 Buah</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.3500</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.1000</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.8000</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Senin,06/11/2017</h5>
                            </td>
                            <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                        </tr>

                        <tr>

                            <td>
                                <h5 class="product-title font-alt">3</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">RW003</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Tunggul</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">Subhan</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">Coklat</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">10 Buah</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.3100</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.1000</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.32000</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Senin,06/11/2017</h5>
                            </td>
                            <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                        </tr>

                        <tr>


                        <tr>

                            <td>
                                <h5 class="product-title font-alt">4</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">RW004</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Ivan</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">Huda</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">Ayam</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">3 Buah</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.3500</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.1000</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.11500</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">jumat,04/11/2017</h5>
                            </td>
                            <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                        </tr>

                        <tr>

                            <td>
                                <h5 class="product-title font-alt">5</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">RW005</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Satriyo</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">Subhan</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">Keju</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">5 Buah</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.3100</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.1000</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.16500</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">jumat,04/11/2017</h5>
                            </td>
                            <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                        </tr>

                        <tr>

                            <td>
                                <h5 class="product-title font-alt">6</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">RW006</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Satriyo</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">Huda</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">Ayam</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">12 Buah</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.3500</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.1000</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.43000</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Selasa,01/11/2017</h5>
                            </td>
                            <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                        </tr>

                        <tr>

                            <td>
                                <h5 class="product-title font-alt">7</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">RW008</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Satriyo</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">Subhan</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">Telo</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">11 Buah</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.3000</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.1000</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Rp.34000</h5>
                            </td>

                            <td>
                                <h5 class="product-title font-alt">Selasa,01/11/2017</h5>
                            </td>
                            <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                        </tr>


                        <!--
                        <tr>
                          <td class="hidden-xs"><a href="#"><img src="assets/images/shop/product-13.jpg" alt="Men’s Casual Pack"/></a></td>
                          <td>
                            <h5 class="product-title font-alt">Ayam</h5>
                          </td>
                          <td class="hidden-xs">
                            <h5 class="product-title font-alt">£20.00</h5>
                          </td>
                          <td>
                            <input class="form-control" type="number" name="" value="1" max="50" min="1"/>
                          </td>
                          <td>
                            <h5 class="product-title font-alt">£20.00</h5>
                          </td>
                          <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                        </tr>
                      -->
                        </tbody>
                    </table>
                    <hr class="divider-w mt-10 mb-20">
                    <p class="btn-list">
                    <div class="col-sm-4 mb-sm-20">
                        <select class="form-control">
                            <option selected="selected">Filter</option>
                            <option></option>
                            <option>sekarang - seminggu yang lalu</option>
                            <option>2 minggu yang lalu</option>
                            <option>1 bulan yang lalu</option>
                            <option>2 bulan yang lalu</option>
                        </select>
                    </div>
                    <button class="btn btn-d btn-round" type="submit">Update Data</button>&nbsp;


                </div>
            </div>
        </div>

        </div>
    </section>

    <section class="module bg-dark-60 pt-0 pb-0 parallax-bg testimonial" id="kritik"
             data-background="assets/images/administrator2.jpg">
        <div class="testimonials-slider pt-140 pb-140">
            <ul class="slides">
                <li>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class="module-title font-alt">Masukan ID</h2>
                                <div class="col-sm-6 col-sm-offset-3">

                                    <form class="form" role="form">
                                        <div class="form-group">
                                            <input class="form-control input-lg" type="text" placeholder="ID PENJUAL"/>
                                        </div>

                                    </form>
                                    <hr class="divider-w mt-10 mb-20">
                                    <div class="form-group">
                                        <a href="lihatkritik.php" class="btn btn-round btn-b">Submit</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <hr class="divider-w">
    <section class="module" id="produksi">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Produksi</h2>
                    <div class="module-subtitle font-serif">Kelola Ketersediaan Produk Bakpao.</div>
                </div>
                <div class="col-sm-12">
                    <table class="table table-striped table-border checkout-table">
                        <tbody>
                        <tr>


                            <th class="hidden-xs">Foto</th>
                            <th>ID</th>
                            <th>Produk</th>
                            <th class="hidden-xs">Harga</th>
                            <th>Ketersediaan</th>
                            <th>Hapus</th>
                        </tr>
                        <tr>

                            <td class="hidden-xs"><a href="#"><img src="assets/images/shop/bakpaokeju.jpg"
                                                                   alt="Accessories Pack"/></a></td>
                            <td>
                                <h5 class="product-title font-alt">PR001</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">Keju</h5>
                            </td>
                            <td class="hidden-xs">
                                <h5 class="product-title font-alt">Rp.3100</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">1000 Buah</h5>
                            </td>
                            <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>

                        </tr>

                        <tr>
                            <td class="hidden-xs"><a href="#"><img src="assets/images/shop/bakpaokacangtanah.jpg"
                                                                   alt="Accessories Pack"/></a></td>
                            <td>
                                <h5 class="product-title font-alt">PR002</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">Kacang tanah</h5>
                            </td>
                            <td class="hidden-xs">
                                <h5 class="product-title font-alt">Rp.3000</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">1300 Buah</h5>
                            </td>
                            <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                        </tr>

                        <tr>
                            <td class="hidden-xs"><a href="#"><img src="assets/images/shop/bakpaokacanghijau.jpg"
                                                                   alt="Accessories Pack"/></a></td>
                            <td>
                                <h5 class="product-title font-alt">PR003</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">Kacang hijau</h5>
                            </td>
                            <td class="hidden-xs">
                                <h5 class="product-title font-alt">Rp.3000</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">920 Buah</h5>
                            </td>
                            <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                        </tr>

                        <tr>
                            <td class="hidden-xs"><a href="#"><img src="assets/images/shop/bakpaoayam.jpg"
                                                                   alt="Accessories Pack"/></a></td>
                            <td>
                                <h5 class="product-title font-alt">PR004</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">Ayam</h5>
                            </td>
                            <td class="hidden-xs">
                                <h5 class="product-title font-alt">Rp.3500</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">700 Buah</h5>
                            </td>
                            <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                        </tr>

                        <tr>
                            <td class="hidden-xs"><a href="#"><img src="assets/images/shop/bakpaocoklat.jpg"
                                                                   alt="Accessories Pack"/></a></td>
                            <td>
                                <h5 class="product-title font-alt">PR005</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">Coklat</h5>
                            </td>
                            <td class="hidden-xs">
                                <h5 class="product-title font-alt">Rp.3100</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">1000 Buah</h5>
                            </td>
                            <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                        </tr>

                        <tr>
                            <td class="hidden-xs"><a href="#"><img src="assets/images/shop/bakpaostraw.jpg"
                                                                   alt="Accessories Pack"/></a></td>
                            <td>
                                <h5 class="product-title font-alt">PR006</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">Strawberry</h5>
                            </td>
                            <td class="hidden-xs">
                                <h5 class="product-title font-alt">Rp.3100</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">1350 Buah</h5>
                            </td>
                            <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                        </tr>

                        <tr>
                            <td class="hidden-xs"><a href="#"><img src="assets/images/shop/bakpaotelo.jpg"
                                                                   alt="Accessories Pack"/></a></td>
                            <td>
                                <h5 class="product-title font-alt">PR007</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">Telo</h5>
                            </td>
                            <td class="hidden-xs">
                                <h5 class="product-title font-alt">Rp.3000</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">800 Buah</h5>
                            </td>
                            <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                        </tr>

                        <tr>
                            <td class="hidden-xs"><a href="#"><img src="assets/images/shop/bakpaokelapa.jpg"
                                                                   alt="Accessories Pack"/></a></td>
                            <td>
                                <h5 class="product-title font-alt">PR008</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">Kelapa</h5>
                            </td>
                            <td class="hidden-xs">
                                <h5 class="product-title font-alt">Rp.3000</h5>
                            </td>
                            <td>
                                <h5 class="product-title font-alt">1400 Buah</h5>
                            </td>
                            <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                    <hr class="divider-w mt-10 mb-20">
                    <p class="btn-list">

                        <button class="btn btn-d btn-round" type="submit">Update Data</button>&nbsp;
                </div>
            </div>
            <div class="row batasdiv">
                <div class="col-sm-8 col-sm-offset-2">
                    <h4 class="font-alt mb-0">Form Produksi</h4>
                    <hr class="divider-w mt-10 mb-20">
                    <form class="form" role="form">
                        <div class="form-group">
                            <input class="form-control input-lg" type="text" placeholder="Produk"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Jumlah"/>
                        </div>
                    </form>
                    <hr class="divider-w mt-10 mb-20">
                    <p class="btn-list">
                        <button class="btn btn-g btn-round" type="submit">Tambahkan</button>&nbsp;
                </div>
            </div>

            <div class="row batasdiv">
                <div class="col-sm-8 col-sm-offset-2">
                    <h4 class="font-alt mb-0">Tambah Produk baru</h4>
                    <hr class="divider-w mt-10 mb-20">
                    <form class="form" role="form">
                        <div class="form-group">
                            <input class="form-control input-lg" type="text" placeholder="ID Bakpia"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Isi Bakpia"/>
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Stok"/>
                        </div>
                        <div>
                            <input type="button" value="Pilih Gambar" id="imgFileUpload" class="btn-primary" style="cursor:pointer">
                            <br/>
                            <span id="spnFilePath"></span>
                            <input type="file" id="FileUpload1" style="display: none"/>
                            <script type="text/javascript"
                                    src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
                            <script type="text/javascript">
                                $(function () {
                                    var fileupload = $("#FileUpload1");
                                    var filePath = $("#spnFilePath");
                                    var image = $("#imgFileUpload");
                                    image.click(function () {
                                        fileupload.click();
                                    });
                                    fileupload.change(function () {
                                        var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
                                        filePath.html("<b>Selected File: </b>" + fileName);
                                    });
                                });
                            </script>
                        </div>
                    </form>
                    <hr class="divider-w mt-10 mb-20">
                    <p class="btn-list">
                        <button class="btn btn-g btn-round" type="submit">Tambahkan</button>&nbsp;
                </div>
            </div>

            <section class="module" id="pemesanan">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt">Pemesanan</h2>
                            <div class="module-subtitle font-serif"></div>
                        </div>
                        <div class="col-sm-12">
                            <table class="table table-striped table-border checkout-table">
                                <tbody>
                                <tr>
                                    <th>No</th>
                                    <th>ID</th>
                                    <th>Nama Penjual</th>
                                    <th>Produk</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Biaya Admin</th>
                                    <th>Total Harga</th>
                                    <th>Hapus</th>
                                    <th>Verifikasi</th>
                                </tr>
                                <tr>
                                    <td>
                                        <h5 class="product-title font-alt">1</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">PS001</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Satriyo</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Keju</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">2</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Rp.3100</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Rp.1000</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Rp.7200</h5>
                                    </td>
                                    <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                    </td>

                                    <td class="pr-remove"><a href="#" title="cek"><i class="fa fa-check"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <h5 class="product-title font-alt">2</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">PS002</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Adib</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Ayam</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">3</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Rp.3500</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Rp.1000</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Rp.11500</h5>
                                    </td>
                                    <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                    </td>

                                    <td class="pr-remove"><a href="#" title="cek"><i class="fa fa-minus"></i></a>
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <h5 class="product-title font-alt">3</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">PS003</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Tunggul</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Ayam</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">3</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Rp.3500</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Rp.1000</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Rp.11500</h5>
                                    </td>
                                    <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                    </td>

                                    <td class="pr-remove"><a href="#" title="cek"><i class="fa fa-check"></i></a>
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <h5 class="product-title font-alt">4</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">PS004</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Satriyo</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Keju</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">5</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Rp.3100</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Rp.1000</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Rp.10300</h5>
                                    </td>
                                    <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                    </td>

                                    <td class="pr-remove"><a href="#" title="cek"><i class="fa fa-check"></i></a>
                                    </td>

                                </tr>

                                <tr>
                                    <td>
                                        <h5 class="product-title font-alt">5</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">PS005</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Abyan</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Coklat</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">3</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Rp.3100</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Rp.1000</h5>
                                    </td>

                                    <td>
                                        <h5 class="product-title font-alt">Rp.10300</h5>
                                    </td>
                                    <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                    </td>

                                    <td class="pr-remove"><a href="#" title="cek"><i class="fa fa-minus"></i></a>
                                    </td>

                                </tr>
                                <!--
                                <tr>
                                  <td class="hidden-xs"><a href="#"><img src="assets/images/shop/product-13.jpg" alt="Men’s Casual Pack"/></a></td>
                                  <td>
                                    <h5 class="product-title font-alt">Ayam</h5>
                                  </td>
                                  <td class="hidden-xs">
                                    <h5 class="product-title font-alt">£20.00</h5>
                                  </td>
                                  <td>
                                    <input class="form-control" type="number" name="" value="1" max="50" min="1"/>
                                  </td>
                                  <td>
                                    <h5 class="product-title font-alt">£20.00</h5>
                                  </td>
                                  <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                                </tr>
                              -->
                                </tbody>
                            </table>
                            <hr class="divider-w mt-10 mb-20">
                            <p class="btn-list">
                                <button class="btn btn-g btn-round" type="submit">Verifikasi</button>&nbsp;
                                <button class="btn btn-d btn-round" type="submit">Update Data</button>&nbsp;


                        </div>
                    </div>
                    <!--
                    <div class="row multi-columns-row">
                      <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="price-table font-alt">
                          <h4>Light</h4>
                          <div class="borderline"></div>
                          <p class="price"><span>$</span>9
                          </p>
                          <ul class="price-details">
                            <li>Free Support</li>
                            <li>15 Demos Included</li>
                            <li><span>Newsletter</span></li>
                            <li><span>Working Contact Form</span></li>
                            <li><span>Unlimited Domains</span></li>
                          </ul><a class="btn btn-d btn-round" href="#">Sign Up</a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="price-table font-alt">
                          <h4>Basic</h4>
                          <div class="borderline"></div>
                          <p class="price"><span>$</span>29
                          </p>
                          <ul class="price-details">
                            <li>Free Support</li>
                            <li>15 Demos Included</li>
                            <li>Newsletter</li>
                            <li><span>Working Contact Form</span></li>
                            <li><span>Unlimited Domains</span></li>
                          </ul><a class="btn btn-d btn-round" href="#">Sign Up</a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="price-table font-alt best">
                          <h4>Advanced</h4>
                          <p class="small">Best Choice</p>
                          <div class="borderline"></div>
                          <p class="price"><span>$</span>64
                          </p>
                          <ul class="price-details">
                            <li>Free Support</li>
                            <li>15 Demos Included</li>
                            <li>Newsletter</li>
                            <li>Working Contact Form</li>
                            <li><span>Unlimited Domains</span></li>
                          </ul><a class="btn btn-d btn-round" href="#">Sign Up</a>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="price-table font-alt">
                          <h4>Ultimate</h4>
                          <div class="borderline"></div>
                          <p class="price"><span>$</span>119
                          </p>
                          <ul class="price-details">
                            <li>Free Support</li>
                            <li>15 Demos Included</li>
                            <li>Newsletter</li>
                            <li>Working Contact Form</li>
                            <li>Unlimited Domains</li>
                          </ul><a class="btn btn-d btn-round" href="#">Sign Up</a>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-40">
                      <div class="col-sm-6 col-sm-offset-3 align-center">
                        <p>Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>
                      </div>
                    </div>
                  -->
                </div>
            </section>

            <!--
            <section class="module" id="news">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">Latest blog posts</h2>
                    <div class="module-subtitle font-serif">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
                  </div>
                </div>
                <div class="row multi-columns-row post-columns">
                  <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post mb-20">
                      <div class="post-thumbnail"><a href="#"><img src="assets/images/post-1.jpg" alt="Blog-post Thumbnail"/></a></div>
                      <div class="post-header font-alt">
                        <h2 class="post-title"><a href="#">Our trip to the Alps</a></h2>
                        <div class="post-meta">By&nbsp;<a href="#">Mark Stone</a>&nbsp;| 23 November | 3 Comments
                        </div>
                      </div>
                      <div class="post-entry">
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                      </div>
                      <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post mb-20">
                      <div class="post-thumbnail"><a href="#"><img src="assets/images/post-2.jpg" alt="Blog-post Thumbnail"/></a></div>
                      <div class="post-header font-alt">
                        <h2 class="post-title"><a href="#">Shore after the tide</a></h2>
                        <div class="post-meta">By&nbsp;<a href="#">Andy River</a>&nbsp;| 11 November | 4 Comments
                        </div>
                      </div>
                      <div class="post-entry">
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                      </div>
                      <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="post mb-20">
                      <div class="post-thumbnail"><a href="#"><img src="assets/images/post-3.jpg" alt="Blog-post Thumbnail"/></a></div>
                      <div class="post-header font-alt">
                        <h2 class="post-title"><a href="#">We in New Zealand</a></h2>
                        <div class="post-meta">By&nbsp;<a href="#">Dylan Woods</a>&nbsp;| 5 November | 15 Comments
                        </div>
                      </div>
                      <div class="post-entry">
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                      </div>
                      <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          -->
            <div class="module-small bg-dark">
            </div>
            <hr class="divider-d">
            <footer class="footer bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">MEGA JAYA</a></p>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a
                                        href="#"><i
                                            class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a
                                        href="#"><i class="fa fa-skype"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
</main>
<!--
JavaScripts
=============================================
-->
<script src="assets/lib/jquery/dist/jquery.js"></script>
<script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/lib/wow/dist/wow.js"></script>
<script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
<script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
<script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
<script src="assets/lib/flexslider/jquery.flexslider.js"></script>
<script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="assets/lib/smoothscroll.js"></script>
<script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
<script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
<script async="" defer=""
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2Axt8xiFYMBMDwwG1XzBQvEbYpzCvFU"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>