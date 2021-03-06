@extends('layouts.main')

@section('title', 'Selamat Datang')

@section('styles')
    @parent
@endsection

@section('content')
    <main>
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>

        <section class="home-section home-full-height" id="home">
            <div class="hero-slider">
                <ul class="slides">
                    <li class="bg-dark-30 restaurant-page-header bg-dark"
                        style="background-image:url(&quot;assets/images/logobakpao.jpg&quot;);">
                        <div class="titan-caption">
                            <div class="caption-content">
                                <div class="font-alt mb-30 titan-title-size-1">Produk Asli Indonesia</div>
                                <div class="font-alt mb-40 titan-title-size-4">BAKPAO Mega Jaya</div>
                            </div>
                        </div>
                    </li>
                    <li class="bg-dark-30 restaurant-page-header bg-dark"
                        style="background-image:url(&quot;assets/images/caro2.jpg&quot;);">
                        <div class="titan-caption">
                            <div class="caption-content">
                                <div class="font-alt mb-30 titan-title-size-2">Ayoo jadilah rakyat yg mencintai produk
                                    lokal
                                    dan halal tentunya
                                </div>
                            </div>
                    </li>
                    <li class="bg-dark-30 restaurant-page-header bg-dark"
                        style="background-image:url(&quot;assets/images/caro3.jpg&quot;);">
                        <div class="titan-caption">
                            <div class="caption-content">
                                <div class="font-alt mb-30 titan-title-size-1"> Rasakan Kenikmatannya</div>
                                <div class="font-alt mb-40 titan-title-size-3">Produk - Produk Kami</div>
                                <a class="section-scroll btn btn-border-w btn-round" href="#products">Klik Disini</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <div class="main">
            <section class="module" id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2 col-sm-offset-5">
                            <div class="alt-module-subtitle"><span class="holder-w"></span>
                                <h5 class="font-serif">Kenyamanan Anda Prioritas Kami</h5><span class="holder-w"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <h2 class="module-title font-alt"></h2>
                        </div>
                    </div>
                    <div class="row multi-columns-row">
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="features-item">
                                <div class="features-icon"><span class="icon-clock"></span></div>
                                <h3 class="features-title font-alt">Buka 24 jam</h3>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="features-item">
                                <div class="features-icon"><span class="icon-streetsign"></span></div>
                                <h3 class="features-title font-alt">Penjual Tersebar Dimana-mana</h3>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="features-item">
                                <div class="features-icon"><span class="icon-map"></span></div>
                                <h3 class="features-title font-alt">Lokasi Strategis</h3>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3">
                            <div class="features-item">
                                <div class="features-icon"><span class="icon-heart"></span></div>
                                <h3 class="features-title font-alt">Kualitas Terjamin</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="divider-w">
            <section class="module module-video bg-dark-30" data-background="assets/images/restaurant/megajaya3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt mb-0">BAKPAO TERBAIK. DARI TANGAN TERLATIH</h2>
                        </div>
                    </div>
                </div>
                <div class="video-player"
                     data-property="{videoURL:'https://www.youtube.com/watch?v=AIks1cYQdHI&t=297s', containment:'.module-video', startAt:3, mute:true, autoPlay:true, loop:true, opacity:1, showControls:false, showYTLogo:false, vol:25}"></div>
            </section>


            <div class="main">
                <section class="module" id="contact">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <h2 class="module-title font-alt">Hubungi Kami</h2>
                                <div class="module-subtitle font-serif"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <form id="contactForm" role="form" method="post" action="php/contact.php">
                                    <div class="form-group">
                                        <label class="sr-only" for="name">Nama</label>
                                        <input class="form-control" type="text" id="name" name="name"
                                               placeholder="Nama*"
                                               required="required"
                                               data-validation-required-message="Please enter your name."/>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="email">Email</label>
                                        <input class="form-control" type="email" id="email" name="email"
                                               placeholder="Email*" required="required"
                                               data-validation-required-message="Please enter your email address."/>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                    <textarea class="form-control" rows="7" id="message" name="message"
                                              placeholder="Pesan*" required="required"
                                              data-validation-required-message="Please enter your message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Kirim
                                        </button>
                                    </div>
                                </form>
                                <div class="ajax-response font-alt" id="contactFormResponse"></div>
                            </div>
                            <div class="col-sm-4">
                                <div class="alt-features-item mt-0">
                                    <div class="alt-features-icon"><span class="icon-megaphone"></span></div>
                                    <h3 class="alt-features-title font-alt">Lokasi</h3>Mega Jaya<br/> Mulyorejo 2 No.
                                    27<br/>Surabaya, Jawa Timur
                                </div>
                                <div class="alt-features-item mt-xs-60">
                                    <div class="alt-features-icon"><span class="icon-map"></span></div>
                                    <h3 class="alt-features-title font-alt">Hubungi</h3> Megajaya@gmail.com<br/>081216042008
                                    (wa) / 085648970008
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="module-small bg-dark">
                </div>
                <hr class="divider-d">

            </div>
            <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
        </div>
    </main>
@endsection

@section('scripts')
    @parent
@endsection