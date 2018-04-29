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
    <title>Mega Jaya</title>
    <!--  
    Stylesheets
    =============================================
    
    -->
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
              <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#custom-collapse"><span
                          class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="/indexpenjual">Mega Jaya</a>
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
                    <tr>
                      <td class="hidden-xs"><a href="#"><img src="assets/images/shop/bakpaokeju.jpg" alt="Accessories Pack"/></a></td>
                      <td>
                        <h5 class="product-title font-alt">Keju</h5>
                      </td>
                      <td class="hidden-xs">
                        <h5 class="product-title font-alt">Rp.3100</h5>
                      </td>
                      <td>
                        <input class="form-control" type="number" name="" value="1" max="50" min="1"/>
                      </td>
                      <td>
                        <h5 class="product-title font-alt">Rp.6200</h5>
                      </td>
                      <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                    </tr>
                    <tr>
                      <td class="hidden-xs"><a href="#"><img src="assets/images/shop/bakpaoayam.jpg" alt="Men’s Casual Pack"/></a></td>
                      <td>
                        <h5 class="product-title font-alt">Ayam</h5>
                      </td>
                      <td class="hidden-xs">
                        <h5 class="product-title font-alt">Rp.3500</h5>
                      </td>
                      <td>
                        <input class="form-control" type="number" name="" value="1" max="50" min="1"/>
                      </td>
                      <td>
                        <h5 class="product-title font-alt">Rp.7000</h5>
                      </td>
                      <td class="pr-remove"><a href="#" title="Remove"><i class="fa fa-times"></i></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
           
            <hr class="divider-w">
            <div class="row mt-70">
              <div class="col-sm-5 col-sm-offset-7">
                <div class="shop-Cart-totalbox">
                  <h4 class="font-alt">Total</h4>
                  <table class="table table-striped table-border checkout-table">
                    <tbody>
                      <tr>
                        <th>Subtotal :</th>
                        <td>Rp.13200</td>
                      </tr>
                      <tr>
                        <th>Biaya Admin :</th>
                        <td>Rp.1000</td>
                      </tr>
                      <tr class="shop-Cart-totalprice">
                        <th>Total :</th>
                        <td>Rp.13300</td>
                      </tr>
                    </tbody>
                  </table>
                  <button onclick="myFunction()" class="btn btn-lg btn-block btn-round btn-d" type="submit">Submit</button>
                </div>
                      <script>
                      function myFunction() {
                       alert("Pemesanan Berhasil!");
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
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
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
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>