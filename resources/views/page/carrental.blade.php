@extends('common.layout')

@section('body')
    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url('tpl/images/back14.jpg')">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">
                    <div class="row row-mt-15em">

                        <div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
                            <h1>self car rentral</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="gtco-section border-bottom">
        <div class="gtco-container">
            <div class="container">
                <div class="row">
                    <?php foreach($demandeList as $demande):?>
                    <div class="col-sm-12">
                        <div class="panel panel-info"  style="margin: 50px 5px 5px 5px">
                            <div class="panel-heading">
                                <h2 class="panel-title">Ordre of User: <?php echo $userName; ?></h2>
                            </div>
                            <div class="panel-body">
                                <div>Order ID: <?php echo $demande['id']; ?></div>
                                <div>Car Type: <?php echo $demande['type']; ?></div>
                                <div>Name: <?php echo $demande['name']; ?></div>
                                <div>Number Licence: <?php echo $demande['licence']; ?></div>
                                <div>Start Time: <?php echo $demande['startTime']; ?></div>
                                <div>Duration: <?php echo $demande['duration']; ?></div>
                                <div>Place to get car: <?php echo $demande['lieu']; ?></div>
                                <div>Passager Number: <?php echo $demande['passengerNum']; ?></div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
@endsection
