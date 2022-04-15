<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/vendor/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
</head>
<body>
    <section id="login">
        <div class="agent-login">
            <div class="row">
                <div class="col-md-6">
                    <form action="/agent/login" method="POST">
                    @csrf
                        <h3>AGENT <span class="color_primary">LOGIN</span></h3>
                        <p class="text-muted">Login to your account</p>
                        @if (Session::has('message'))
                        <div class='text-danger'>{{Session::get('message') }}</div>
                        @endif
                        <input type="email" class="form-input" name="email" placeholder="Email address">
                        <input type="password" name="password" class="form-input" placeholder="Password">
                        <div class="text-right">
                            <a class="text-right" href=""> <small>forgotten password?</small></a>
                        </div>
                        <button type="submit" class="btn my-2 transparent-button" >Log in</button>

                        <div style="position: fixed; bottom: 40px">
                            <a class="btn filled-button text-right" href="{{ route('agentsignup') }}"> <small>Create account</small></a>
                        </div>
                        <!-- <div class="social-login">
                            <a href="#" class="facebook btn d-flex justify-content-center align-items-center">
                                <span class="fa fa-facebook  mr-3"></span> Login with Facebook
                            </a>

                            <a href="#" class="google btn d-flex justify-content-center align-items-center">
                                <span class="fa fa-google mr-3"></span> Login with  Google
                            </a>
                        </div> -->
                    </form>

                    
                </div>
                <div class="col-md-6 windows">
                    <div class="login-bg">

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>