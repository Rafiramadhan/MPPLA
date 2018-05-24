<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span
                        class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="/">Mega Jaya</a>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
                @if(Request::segment(1) == '')
                    <li><a href="#totop">Beranda</a></li>
                    <li><a class="section-scroll" href="#services">Pelayanan</a></li>
                    <li><a href="/tentang">Tentang Kami</a></li>
                    <li><a class="section-scroll" href="#products">Produk</a></li>
                    <li><a class="section-scroll" href="#contact">Kontak</a></li>
                    <li><a href="/login">Masuk</a></li>
                @elseif(Request::segment(1) == 'tentang')
                    <li><a href="/">Beranda</a></li>
                    <li><a href="#totop">Tentang Kami</a></li>
                    <li><a class="section-scroll" href="#contact">Kontak</a></li>
                @elseif(Request::segment(1) == 'login')
                    <li><a href="/">Beranda</a></li>
                @elseif(Request::segment(1) == 'indexpenjual')
                    <li><a href="/indexpenjual">Beranda</a></li>
                    <li><a href="/pemesanan">Pemesanan</a></li>
                    <li><a class="section-scroll" href="#produksi">Produk Kami</a></li>
                    <li><a href="/penjualan">Penjualan</a></li>
                    <li><a class="section-scroll" href="#Ketersediaan">Ketersediaan</a></li>
                    <li><a class="section-scroll" href="#riwayat">Riwayat Transaksi</a></li>
                    <li><a href="/kritiksaran">kritikSaran</a></li>
                    <li><a href="/">Keluar</a></li>
                @elseif(Request::segment(1) == 'pemesanan')
                    <li><a href="#totop">Home</a></li>
                    <li><a href="/indexpenjual">Produk</a></li>
                    <li><a href="/">Keluar</a></li>
                @elseif(Request::segment(1) == 'penjualan')
                    <li><a href="#totop">Home</a></li>
                    <li><a href="/indexpenjual">Produk</a></li>
                    <li><a href="/">Keluar</a></li>
                @elseif(Request::segment(1) == 'kritiksaran')
                    <li><a href="#totop">Home</a></li>
                    <li><a href="/indexpenjual">Produk</a></li>
                    <li><a href="/">Keluar</a></li>
                @elseif(Request::segment(1) == 'indexadmin')
                    <li><a href="/index3">Beranda</a></li>
                    <li><a class="section-scroll" href="#produksi">Produk</a></li>
                    <li><a class="section-scroll" href="#penjual">Data Penjual</a></li>
                    <li><a class="section-scroll" href="#pemesanan">Pemesanan</a></li>
                    <li><a class="section-scroll" href="#riwayat">Riwayat Transaksi</a></li>
                    <li><a class="section-scroll" href="#kritik">KritikSaran</a></li>
                    <li><a href="/">Keluar</a></li>
                @elseif(Request::segment(1) == 'index3')
                    <li><a href="#totop">Beranda</a></li>
                    <li><a class="section-scroll" href="#services">Pelayanan</a></li>
                    <li><a class="section-scroll" href="#products">Produk</a></li>
                    <li><a href="/indexadmin">Halaman Admin</a></li>
                    <li><a href="/">Keluar</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>