@extends('common.layout')

@section('body')
    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(tpl/images/img_6.jpg)">
        <div class="overlay"></div>tpl/
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
            <form method="post" action="reservationcont/valide">
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
                    <select class="form-control" name="lieu">
                        <option>Paris</option>
                        <option>Strasbourg</option>
                        <option>Lyon</option>
                        <option>Troyes</option>
                        <option>Vannes</option>
                    </select>
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

                {{csrf_field()}}

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
