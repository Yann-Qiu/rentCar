<nav class="gtco-nav" role="navigation">
    <div class="gtco-container">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <?php

                use Illuminate\Support\Facades\Session;

                if (!session_id()){
                    session_start();
                    if(isset($_GET["status"])){
                        if($_GET["status"]==='logout'){
                            unset($_SESSION['userName']);
                        }
                    }
                }
                ?>
                <div id="gtco-logo"><a href="/">TravelCar <em>.</em></a></div>
            </div>
            <div class="col-xs-8 text-right menu-1">
                <ul>
                    <li><a href="dest">Destination</a></li>

                    <li><a href="pricing">Pricing</a></li>
                    <li><a href="carrent">Self-Car-rental</a></li>
                    <li><a href="rent">Rent-a-car</a></li>
                    <?php
                    if(Session::get('userName')) {
                        echo '<div style="color:white;display:inline-block">Welcome, '.Session::get('userName').'</div>';
                        echo '<a href="logincont/logout" style="color:white;display:block">logout</a>';
                    }
                    else{
                        echo '<li><a href="login">Log in</a></li>';
                        echo '<li><a href="regis">Register</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</nav>
