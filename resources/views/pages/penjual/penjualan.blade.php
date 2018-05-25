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
                            <a href="/lihathasiljual" class="btn btn-round btn-b">Submit {{Auth::user()->id}}</a>
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

                        .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
      #target {
        width: 345px;
      }

                </style>

                <div id="map">
                    
                </div>
                <input id="pac-input" class="controls" type="text" placeholder="Search Box">
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
    function post(path, params) {
    var method = method || "post"; // Set method to post by default if not specified.
      console.log(params);
      
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);




    for(var key in params) {
        if(params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);

            form.appendChild(hiddenField);
        }
    }

    document.body.appendChild(form);
    form.submit();
}
    var map
        function initMap() {
            var lokasipedagang = {lat: -7.2898334, lng: 112.7981243};
             map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
                center: lokasipedagang
            });
            var marker = new google.maps.Marker({
                position: lokasipedagang,
                map: map
            });
        }
        function initAutocomplete() {
            
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -7.2898334, lng: 112.7981243},
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();
          
          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            console.log(place.geometry.location.lat());
            post('/addlocation', {user_id: '{{Auth::user()->id}}', user_latitude: place.geometry.location.lat(), user_longitude: place.geometry.location.lng() });
            

            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }



        

    </script>
    <!-- <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD762LMhWEzKWxMhAQVpoAVDiTReRr_fKM&callback=initMap">
    </script> -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD762LMhWEzKWxMhAQVpoAVDiTReRr_fKM&libraries=places&callback=initAutocomplete"
         async defer></script>

@endsection