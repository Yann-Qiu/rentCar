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
                    <div class="col-sm-4">
                        <div class="panel panel-info"  style="margin: 50px 5px 5px 5px">
                            <div class="panel-heading">
                                <h2 class="panel-title">Ordre of User: <?php echo $userName; ?></h2>
                            </div>
                            <div class="panel-body" style="text-align: center;">
                                <div>Order ID: <?php echo $demande['id']; ?></div>
                                <div>Car Type: <?php echo $demande['type']; ?></div>
                                <?php
                                    $data = '';
                                    $data .= "Order ID:".$demande["id"];
                                    $data .= 'Car Type:'.$demande["type"];
                                    $data .= 'Name:'.$demande["name"];
                                    $data .= 'Number Licence:'.$demande["licence"];
                                    $data .= 'Start Time:'.$demande["startTime"];
                                    $data .= 'Duration:'.$demande["duration"];
                                    $data .= 'Place To Get Car:'.$demande["lieu"];
                                    $data .= 'Passager Number:'.$demande["passengerNum"];
                                ?>
                                <img src =<?php echo "https://api.qrserver.com/v1/create-qr-code/?data=". urlencode($data) ."&size=100x100"; ?> alt ="" title ="" /><br/>
                                <a href=<?php echo "/reservDet/".$demande['id']?>>Detail</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
@endsection
