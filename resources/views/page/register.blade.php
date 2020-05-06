@extends('common.layout')

@section('body')
    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url('tpl/images/img_bg_3.jpg')">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-left">
                    <div class="row row-mt-15em">

                        <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                            <span class="intro-text-small">Don't be shy</span>
                            <h1>Create your account</h1>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </header>


    <div class="gtco-section border-bottom">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6 animate-box">
                        <h3>Your account</h3>
                        <?php
                        use Illuminate\Support\Facades\Cookie;
                        if(Cookie::has('regis_info')){
                            $info = Cookie::get('regis_info');
                            echo '<h4 style="color:red">$info</h4>';
                            setcookie('regis_info');
                        }
                        ?>
                        <form action="registercont/register" method="post">
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label  for="name">UserName</label>
                                    <input required type="text" id="name" class="form-control" placeholder="votre compte d'utilise" name="name">
                                </div>

                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label  for="email">Email</label>
                                    <input required type="email" id="email" class="form-control" placeholder="votre e-mail" name="email">
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="pwd">Password</label>
                                    <input required type="password" id="pwd" class="form-control" placeholder="votre mot de passe" name="pwd">
                                </div>
                            </div>

                            {{csrf_field()}}

                            <div class="form-group">
                                <input type="submit" value="Register!" class="btn btn-primary" name="submit">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 col-md-push-1 animate-box">

                        <div class="gtco-contact-info">
                            <h3>Contact Information</h3>
                            <ul>
                                <li class="address">12 rue de marie curry, <br> Rossiere pres Troyes, 10430</li>
                                <li class="phone"><a href="tel://1234567890">+33 777777777</a></li>
                                <li class="email"><a href="mailto:xun.liu@utt.fr">yanfeng.qiu@utt.fr</a></li>

                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
