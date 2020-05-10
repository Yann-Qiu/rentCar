<nav class="gtco-nav" role="navigation">
    <div class="gtco-container">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <?php

                    use Illuminate\Support\Facades\Session;
                    use GuzzleHttp\Client;

                    if (!session_id()){
                        session_start();
                        if(isset($_GET["status"])){
                            if($_GET["status"]==='logout'){
                                unset($_SESSION['userName']);
                            }
                        }
                    }

                    $coordiante = json_decode(getLocation()->getBody()->getContents())->location;
                    $lat = $coordiante->lat;
                    \Illuminate\Support\Facades\Cookie::queue('lat',$lat);
                    $lng = $coordiante->lng;
                    \Illuminate\Support\Facades\Cookie::queue('lng',$lng);
                    $weather = json_decode(getWeather($lat,$lng)->getBody()->getContents());
                    $city = $weather->name;
                    \Illuminate\Support\Facades\Cookie::queue('cityName',$city);
                    $url = 'http://openweathermap.org/img/wn/'.$weather->weather[0]->icon.'@2x.png';

                    function getLocation()
                    {
                        $client = new Client();
                        $reponse = $client->request('POST', 'https://www.googleapis.com/geolocation/v1/geolocate', [
                            'form_params' => [
                                'key' => ''
                            ]
                        ]);
                        return $reponse;
                    }

                    function getWeather($lat,$lng)
                    {
                        $client = new Client();
                        $reponse = $client->request('GET', 'http://api.openweathermap.org/data/2.5/weather?lat='.$lat.'&lon='.$lng.'&appid=');
                        return $reponse;
                    }
                ?>
                <div id="gtco-logo"><a href="/">TravelCar <em>.</em></a></div>
            </div>
            <div class="col-xs-8 text-right menu-1">
                <ul>
                    <li><a href="/dest">Destination</a></li>

                    <li><a href="/pricing">Pricing</a></li>
                    <li><a href="/carrent">Self-Car-rental</a></li>
                    <li><a href="/rent">Rent-a-car</a></li>
                    <?php
                    if(Session::get('userName')) {
                        echo '<div style="color:white;display:inline-block">Welcome, '.Session::get('userName').'</div>';
                        echo '<a href="/logincont/logout" style="color:white;display:block">logout</a>';
                    }
                    else{
                        echo '<li><a href="/login">Log in</a></li>';
                        echo '<li><a href="/regis">Register</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
        <p style="color:#fff;">{{$city}} <img src={{$url}} alt=''/></p>
    </div>
</nav>
