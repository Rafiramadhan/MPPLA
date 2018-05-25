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
                        .
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
                                    <th class="hidden-xs">Stok</th>
                                    <th>Jumlah</th>
                                    <th>Total Harga</th>
                                    <th>Hapus</th>
                                </tr>
                                    <form  action="/tes/tambahtransaksi" method="post">
                                @foreach($bakpaos as $bakpao)
                                    @csrf
                                        <tr>
                                            <td class="hidden-xs"><a href="#"><img src="assets/images/shop/{{$bakpao->path_gambar}}"
                                                                                   alt="Accessories Pack"/></a></td>
                                            <td>
                                                <h5 class="product-title font-alt">{{$bakpao->jenis_bakpao}}</h5>
                                            </td>
                                            <td class="hidden-xs">
                                                <h5 class="product-title font-alt">Rp.{{$bakpao->harga_bakpao}}</h5>
                                            </td>
                                            <td class="hidden-xs">
                                                <h5 class="product-title font-alt">{{$bakpao->stok_bakpao}}</h5>
                                            </td>
                                            <td>
                                                <input class="form-control" onkeyup="calcu({{$bakpao->id}}, {{$bakpao->harga_bakpao}})" id="B{{$bakpao->id}}" data-harga = "{{$bakpao->harga_bakpao}}"  name="jumlah[]" type="number" max="{{$bakpao->stok_bakpao}}"   value="0" 
                                                />
                                            </td>
                                            <td>
                                                Rp.<input readonly class="currency" type=text name="harga" id="{{$bakpao->id}}" 
                                                          readonly
                                                          style="text:bold" value="0">
                                            </td>
                                            <input type="hidden" name="bakpao_id[]" value="{{$bakpao->id}}">
                                            
                                            <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a>
                                            </td>
                                        </tr>
                                @endforeach
                                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                        <input type="hidden" name="total_harga" id="total_biaya" value="0">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-block btn-round btn-b">Pesan</button>
                                            </div>
                                    </form>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <hr class="divider-w">
                    <div class="row mt-70">
                        <div class="col-sm-5 col-sm-offset-7">
                            <div class="shop-Cart-totalbox">
                                <h4 class="font-alt">Total</h4>
                                
                                    <table class="table table-striped table-border">
                                        <tbody>
                                        <tr>
                                            <th>Subtotal&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</th>
                                            <td>Rp.<input readonly class="currency"  readonly id="subtotal" onkeyup="calcu()" 
                                                          style="text:bold"></td>
                                        </tr>
                                        <tr>
                                            <th>Biaya Admin&nbsp&nbsp:</th>
                                            <td>Rp.1000</td>
                                        </tr>
                                        <tr class="shop-Cart-totalprice">
                                            <th>Total&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</th>
                                            <td>Rp.<input readonly class="currency"  readonly id="biaya" 
                                                          style="text:bold" value="0"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                
                                <button class="btn btn-lg btn-block btn-round btn-d"
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
        </div>
        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
@endsection

@section('scripts')
    @parent
    <script>

        function calcu(bakpao, harga){
            document.getElementById(bakpao).value = document.getElementById('B' + bakpao).value * harga;
            
            subTotal();
            $(document.getElementById(bakpao)).manageCommas();
        }
        function subTotal(){
            var total = parseInt("0");
            console.log("masuk");
            @foreach($bakpaos as $bakpao)
                var harga = parseInt(document.getElementById('B{{$bakpao->id}}').value) * '{{$bakpao->harga_bakpao}}';
                console.log(harga);
                total +=parseInt(harga);
                
            @endforeach
            console.log(total);
            document.getElementById('subtotal').value = total;
            document.getElementById('total_biaya').value = total - 1000;
            document.getElementById('biaya').value = total - 1000;
            $(document.getElementById('subtotal')).manageCommas();
            $(document.getElementById('biaya')).manageCommas();

            return total;
        }
        function startCalc() {
            interval = setInterval("calc()", 1);
        }

       
    </script>
    <script>
        $(document).ready(function () {
            //apply on typing and focus
            $('input.currency').on('focus', function () {
                $(this).manageCommas();
                console.log("asdasd");
            });
            //then sanatize on leave
            // if sanitizing needed on form submission time,
            //then comment beloc function here and call in in form submit function.
            // $('input.currency').on('focus', function () {
            //     $(this).santizeCommas();
            // });
        });

        String.prototype.addComma = function () {
            return this.replace(/(.)(?=(.{3})+$)/g, "$1,")
        }
        //Jquery global extension method
        $.fn.manageCommas = function () {
            return this.each(function () {
                $(this).val($(this).val().replace(/(,| )/g, '').addComma());
            })
        }

    </script>
@endsection