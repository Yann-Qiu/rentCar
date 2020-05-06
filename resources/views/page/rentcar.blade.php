@extends('common.layout')

@section('body')
    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(tpl/images/back4.jpg)">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-center">
                    <div class="row row-mt-15em">

                        <div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
                            <h1>Rent a car</h1>
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
                    <?php
                        $carlist = \App\Car::get()->toArray();
                        foreach($carlist as $key=>$car):
                    ?>
                    <form action="reserv" method="post">
                        <div class="col-sm-4">
                            <div class="panel panel-info"  style="margin: 50px 5px 5px 5px">
                                <div class="panel-heading">
                                    <h2 class="panel-title"><?php echo $car["grade"]; ?></h2>
                                    <input type="hidden" value="<?php echo $car["grade"]; ?>" name="type">
                                    <input type="hidden" value="<?php echo $key+1; ?>" name="carId">
                                </div>
                                <div class="panel-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <?php echo '<img src="tpl/images/'.$car["image"].'" alt="bmw" style="width: 300px;height: 200px;">' ?>
                                        </li>
                                        <li class="list-group-item">
                                            <h4 style="text-align: center;">prix: <?php echo $car["price"]; ?> euros/jour</h4>
                                        </li>
                                    </ul>

                                    {{csrf_field()}}

                                    <button type="submit" class="btn btn-success">choisir</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
@endsection
