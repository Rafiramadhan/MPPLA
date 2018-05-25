@extends('layouts.main')

@section('title', 'Bakpao Kita')

@section('styles')
    @parent
@endsection

@section('content')
    <main>
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse"
                            data-target="#custom-collapse"><span
                                class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                                class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="/index2">Mega Jaya</a>
                </div>
                <div class="collapse navbar-collapse" id="custom-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#totop">Home</a></li>
                        <li><a href="/indexpenjual">Produk</a></li>
                        <li><a href="/">Keluar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="main">
            <section class="module bg-dark-30 about-page-header"
                     data-background="assets/images/restaurant/megajaya1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h1 class="module-title font-alt mb-0">Hasil Penjualan</h1>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <hr class="divider-w mt-10 mb-20">
                        <form class="form" role="form">
                            <div class="form-group">
                                <input class="form-control input-lg" type="text" placeholder="ID Penjual"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Jumlah Bakpao"/>
                            </div>
                            <div class="form-group">
                                <input class="form-control input-sm" type="text" placeholder="Waktu Penjualan"/>
                            </div>


                            <textarea class="form-control" rows="7" placeholder="Keterangan Tambahan"></textarea>
                        </form>
                        <br>
                        <div class="form-group">
                            <a href="/lihathasiljual" class="btn btn-round btn-b">Submit</a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <style>
                    #map {
                        height: 400px;
                        width: 100%;
                    }
                </style>
                <div id="map"></div>
            </div>
            </section>
            <br>
        </div>
        <div class="module-small bg-dark">
        </div>
        <hr class="divider-d">
        <footer class="footer bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright font-alt">&copy; 2018&nbsp;<a href="/">MEGA JAYA</a></p>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
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
@endsection

@section('scripts')
    @parent
    <script>
        function initMap() {
            var lokasipedagang = {lat: -7.2898334, lng: 112.7981243};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: lokasipedagang
            });
            var marker = new google.maps.Marker({
                position: lokasipedagang,
                map: map
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD762LMhWEzKWxMhAQVpoAVDiTReRr_fKM&callback=initMap">
    </script>

@endsection