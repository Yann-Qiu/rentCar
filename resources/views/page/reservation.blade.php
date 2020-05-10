@extends('common.layout')

@section('body')
    <script
        src="https://www.paypal.com/sdk/js?client-id=ARuN8hHkHGdGK2kqAkxkrYlYjdRI_h0Mna-khP8K5GlRivQTXNeRZsdJ3h1WMGKpmCFW6ssoK0_JmUbz">
    </script>

    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(tpl/images/img_6.jpg)">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">
                    <div class="row row-mt-15em">

                        <div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
                            <h1>Reservation</h1>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </header>

    <div class="gtco-section">
        <div class="gtco-container">
            <form method="post" action="reservationcont/valide" id="deal">
                <div class="form-group">
                    <label>Name</label>
                    <input  type="text" class="form-control"  name="name" required>
                </div>
                <div class="form-group">
                    <label>Contact email</label>
                    <?php
                    use Illuminate\Support\Facades\Session;
                    use \Illuminate\Support\Facades\Request;

                        $userName =  Session::get('userName');
                        $user = DB::table('comptes')->where('userName','=',$userName)->get()->toArray()[0];
                        $email = $user->email;
                        $userId = $user->id;
                        $carId =  Request::post('carId');
                    ?>
                    <input  type= "email" class="form-control"  name="email" value=<?php echo $email; ?>>
                </div>
                <div class="form-group">
                    <label>Number of your driving licence</label>
                    <input   type= "text" class="form-control"  name="licence" required>
                </div>
                <div class="form-group">
                    <label>Start day of renting</label>
                    <input   type= "date" class="form-control"  name="startTime" required>
                </div>
                <div class="form-group">
                    <label>Duration</label>
                    <input   type= "number" class="form-control"  name="duration" required>
                </div>
                <div class="form-group">
                    <label>Where</label>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    <style>
                                        /* Set the size of the div element that contains the map */
                                        #map {
                                            height: 400px;  /* The height is 400 pixels */
                                            width: 100%;  /* The width is the width of the web page */
                                        }
                                    </style>
                                    <h3>My Google Maps Demo</h3>
                                    <!--The div element for the map -->
                                    <div id="map"></div>
                                    <script>
                                        // Initialize and add the map
                                        function initMap() {
                                            // The location of Uluru
                                            var Paris = {lat: 48.8569, lng: 2.3514};
                                            var Strasbourg = {lat: 48.5733, lng: 7.7522};
                                            var Lyon = {lat: 45.7589, lng: 4.8414};
                                            var Bordeaux = {lat: 44.837778, lng: -0.579444};
                                            var Nantes = {lat: 47.2172, lng: -1.5539};
                                            var center = {lat:<?php echo \Illuminate\Support\Facades\Cookie::get('lat'); ?>,lng: <?php echo \Illuminate\Support\Facades\Cookie::get('lng'); ?>};
                                            var image = './tpl/images/location.png';
                                            // The map, centered at Uluru
                                            var map = new google.maps.Map(
                                                document.getElementById('map'), {zoom: 6, center: center});
                                            // The marker, positioned at Uluru
                                            var marker1 = new google.maps.Marker({position: Paris, map: map,title: 'Paris'});
                                            var marker2 = new google.maps.Marker({position: Strasbourg, map: map,title: 'Strasbourg'});
                                            var marker3 = new google.maps.Marker({position: Lyon, map: map,title: 'Lyon'});
                                            var marker4 = new google.maps.Marker({position: Bordeaux, map: map,title: 'Bordeaux'});
                                            var marker5 = new google.maps.Marker({position: Nantes, map: map,title: 'Nantes'});
                                            var marker6 = new google.maps.Marker({position: center, map: map,title: 'Your location',icon: image});
                                            var contentString1 = '<h3>13 rue du xxx, Paris</h3>';
                                            var contentString2 = '<h3>29 rue du aaa, Strasbourg</h3>';
                                            var contentString3 = '<h3>76 rue du bbb, Lyon</h3>';
                                            var contentString4 = '<h3>36 rue du ccc, Bordeaux</h3>';
                                            var contentString5 = '<h3>19 rue du ddd, Nantes</h3>';
                                            var contentString6 = '<h3>Your location<br/><?php echo \Illuminate\Support\Facades\Cookie::get('cityName'); ?></h3>';
                                            var infowindow1 = new google.maps.InfoWindow({
                                                content: contentString1
                                            });
                                            var infowindow2 = new google.maps.InfoWindow({
                                                content: contentString2
                                            });
                                            var infowindow3 = new google.maps.InfoWindow({
                                                content: contentString3
                                            });
                                            var infowindow4 = new google.maps.InfoWindow({
                                                content: contentString4
                                            });
                                            var infowindow5 = new google.maps.InfoWindow({
                                                content: contentString5
                                            });
                                            var infowindow6 = new google.maps.InfoWindow({
                                                content: contentString6
                                            });
                                            marker1.addListener('click', function() {
                                                infowindow1.open(map, marker1);
                                            });
                                            marker2.addListener('click', function() {
                                                infowindow2.open(map, marker2);
                                            });
                                            marker3.addListener('click', function() {
                                                infowindow3.open(map, marker3);
                                            });
                                            marker4.addListener('click', function() {
                                                infowindow4.open(map, marker4);
                                            });
                                            marker5.addListener('click', function() {
                                                infowindow5.open(map, marker5);
                                            });
                                            marker6.addListener('click', function() {
                                                infowindow6.open(map, marker6);
                                            });
                                        }
                                    </script>
                                    <script async defer
                                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZj9TOwFQCVga6mhp52toDTq1ODs4tiAc&callback=initMap">
                                    </script>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <select class="form-control" name="lieu">
                        <option>13 rue du xxx, Paris</option>
                        <option>29 rue du aaa, Strasbourg</option>
                        <option>76 rue du bbb, Lyon</option>
                        <option>36 rue du ccc, Bordeaux</option>
                        <option>19 rue du ddd, Nantes</option>
                    </select>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        click to watch on the map
                    </button>
                </div>
                <div class="form-group">
                    <input  type="hidden" class="form-control"  name="userId" value="<?php echo $userId; ?>">
                </div>
                <div class="form-group">
                    <input  type="hidden" class="form-control"  name="carId" value="<?php echo $carId;?>">
                </div>
                <div class="form-group">
                    <label>Type of vehicule</label>
                    <input type="text" class="form-control"  name="type" value=<?php echo Request::post('type');?>>
                </div>
                <div class="form-group">
                    <label>Number of passengers</label>
                    <select class="form-control" name="passengerNum" required>
                        <option>0 to 4 persons</option>
                        <option>4 to 6 persons</option>
                        <option>Under 12 persons</option>
                    </select>
                </div>
                <br/>
                <div id="paypal-button-container" style="width:200px;margin: 0 auto;"></div>

                {{csrf_field()}}
                <script>
                    paypal.Buttons({
                        createOrder: function(data, actions) {
                            // This function sets up the details of the transaction, including the amount and line item details.
                            return actions.order.create({
                                purchase_units: [{
                                    amount: {
                                        value: '0.01'
                                    }
                                }]
                            });
                        },
                        onApprove: function(data, actions) {
                            // This function captures the funds from the transaction.
                            return actions.order.capture().then(function(details) {
                                // This function shows a transaction success message to your buyer.
                                alert('Transaction completed by ' + details.payer.name.given_name);
                                document.getElementById('deal').submit();
                            });
                        }
                    }).render('#paypal-button-container');
                </script>

{{--                <button type="submit" class="btn btn-primary">Submit</button>--}}
            </form>
        </div>
    </div>
@endsection
