@extends('common.layout')

@section('body')
    <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(tpl/images/img_login.jpg)">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-left">
                    <div class="row row-mt-15em">
                        <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                            <h1>Welcome back!</h1>
                        </div>
                        <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                            <div class="form-wrap">
                                <div class="tab">
                                    <div class="tab-content">
                                        <div class="tab-content-inner active" data-content="signup">
                                            <h3>Log in</h3>
                                            <div id="choose" style="color: red"></div>
                                            <form  method="post" action="logincont/valide">
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="fullname">UserName</label>
                                                        <input type="text" id="fullname" class="form-control" name="userName">
                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="pwd">Password</label>
                                                        <input type="password" id="pwd" class="form-control" name="pwd">
                                                        <div style='color:red' id='info'></div>
                                                        <?php
                                                        use Illuminate\Support\Facades\Cookie;
                                                        if(Cookie::has('loginInfo')) {
                                                            $info = Cookie::get('loginInfo');
                                                            echo "<div style='color:red'> $info </div>";
                                                            setcookie('loginInfo');
                                                        }

                                                        ?>
                                                    </div>
                                                </div>

                                                <input type="hidden" name="_token" id='token' value={{csrf_token()}}>

                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <!-- <input type="submit" class="btn btn-primary btn-block" value="Submit"> -->
                                                        <button id="submit" class="btn btn-primary btn-block" type="button">
                                                            Submit
                                                        </button>

                                                    </div>
                                                </div>

                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label for="zhuce">Don't have a account? </label>
                                                        <a href="regis">
                                                            <input type="button" class="btn btn-primary btn-block" value="Register right now!">
                                                        </a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('#submit').click(function(event) {
            /* Act on the event */
            $.post('/logincont/valide',{'userName' : $('#fullname').val(),"pwd":$('#pwd').val(),"_token":$('#token').val()},function(data){
                    data = JSON.parse(data);
                    if(data['status'] === 'true')
                    {
                        console.log(1);
                        $(location).attr('href', '/');
                    }
                    else
                    {
                        $('#info').text('username or password false');
                    }
            },'json')
        });
        
    });
</script>
@endsection
