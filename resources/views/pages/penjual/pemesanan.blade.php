@extends('layouts.main')

@section('title', 'Pesan Sekarang!')

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
                    <a class="navbar-brand" href="/indexpenjual">Mega Jaya</a>
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
            <section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h1 class="module-title font-alt">Pemesanan</h1>
                        </div>
                    </div>
                    <hr class="divider-w pt-20">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped table-border checkout-table">
                                <tbody>
                                <tr>
                                    <th class="hidden-xs">Barang</th>
                                    <th>Deskripsi</th>
                                    <th class="hidden-xs">Harga</th>
                                    <th>Jumlah</th>
                                    <th>Total Harga</th>
                                    <th>Hapus</th>
                                </tr>
                                @foreach($bakpaos as $bakpao)
                                <form name="keju">
                                    <tr>
                                        <td class="hidden-xs"><a href="#"><img src="assets/images/shop/bakpaokeju.jpg"
                                                                               alt="Accessories Pack"/></a></td>
                                        <td>
                                            <h5 class="product-title font-alt">{{$bakpao->jenis_bakpao}}</h5>
                                        </td>
                                        <td class="hidden-xs">
                                            <h5 class="product-title font-alt">Rp.{{$bakpao->harga_bakpao}}</h5>
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" name="keju" value="0" min="0"
                                                   onFocus="startCalc();" onBlur="stopCalc();"/>
                                        </td>
                                        <td>
                                            <input readonly type=text value='' name="harga" readonly style="text:bold">
                                        </td>
                                        <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                </form>
                                @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <hr class="divider-w">
                    <div class="row mt-70">
                        <div class="col-sm-5 col-sm-offset-7">
                            <div class="shop-Cart-totalbox">
                                <h4 class="font-alt">Total</h4>
                                <form name="checkout">
                                    <table class="table table-striped table-border checkout-table">
                                        <tbody>
                                        <tr>
                                            <th>Subtotal :</th>
                                            <td><input readonly type=text value='' name="harga" readonly
                                                       style="text:bold"></td>
                                        </tr>
                                        <tr>
                                            <th>Biaya Admin :</th>
                                            <td>Rp.1000</td>
                                        </tr>
                                        <tr class="shop-Cart-totalprice">
                                            <th>Total :</th>
                                            <td><input readonly type=text value='' name="hargaf" readonly
                                                       style="text:bold"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                                <button onclick="myFunction()" class="btn btn-lg btn-block btn-round btn-d"
                                        type="submit">
                                    Submit
                                </button>
                            </div>
                            <script>
                                function myFunction() {
                                    alert("Pemesanan Berhasil!\nTotal belanja :" + document.checkout.hargaf.value);
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </section>
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
@endsection

@section('scripts')
    @parent
    <script>
        function startCalc() {
            interval = setInterval("calc()", 1);
        }

        function calc() {
            bpkeju = document.keju.keju.value;
            // two = document.hkeju.keju.value;
            // three = document.diskon.value;
            document.keju.harga.value = "Rp." + (bpkeju * 3100);
            bpayam = document.ayam.ayam.value;
            document.ayam.harga.value = "Rp." + (bpayam * 3500);

            total = (bpkeju * 3100) + (bpayam * 3500);
            document.checkout.harga.value = "Rp." + total;
            document.checkout.hargaf.value = "Rp." + (total + 1000);
        }

        function stopCalc() {
            clearInterval(interval);
        }
    </script>
@endsection