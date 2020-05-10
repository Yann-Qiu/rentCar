@extends('common.layout')

@section('body')
    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(/tpl/images/back6.jpg)">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">
                    <div class="row row-mt-15em">

                        <div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
                            <h1>Reservation Detail</h1>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <div class="gtco-section">
        <div class="gtco-container">
            <div class="jumbotron">
                <div class="container" style="text-align: center;">
                    <h1>Reservation Detail</h1>
                    <div>Order ID: <?php echo $demande['id']; ?></div>
                    <div>Car Type: <?php echo $demande['type']; ?></div>
                    <div>Name: <?php echo $demande['name']; ?></div>
                    <div>Number Licence: <?php echo $demande['licence']; ?></div>
                    <div>Start Time: <?php echo $demande['startTime']; ?></div>
                    <div>Duration: <?php echo $demande['duration']; ?></div>
                    <div>Place to get car: <?php echo $demande['lieu']; ?></div>
                    <div>Passager Number: <?php echo $demande['passengerNum']; ?></div>
                    <a class="twitter-share-button"
                       href="https://twitter.com/intent/tweet?text=I%20reserve%20a%20car%20on%20TRAVELCAR..Come%20with%20me!%0A&hashtags=TRAVELCAR.%0A&via=TRAVELCAR.DEV&"
                       data-size="large"
                       data-text="custom share text"
                       data-url="renrcar.io"
                       data-hashtags="TRAVELCAR."
                       data-via="TRAVELCAR.DEV">
                    </a>
                    <script type="text/javascript" async src="https://platform.twitter.com/widgets.js"></script>
                </div>
            </div>
        </div>
    </div>
@endsection
