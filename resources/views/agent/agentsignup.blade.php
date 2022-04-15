<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
    <link rel="stylesheet" href="{{asset('/vendor/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
</head>
<body>
    <section id="login">
        <div class="agent-login signup">
            <div class="">
                <div class="mx-auto" style="width: 95%; max-width: 600px">
                    <form method="POST" class="w-100 my-3 form" action="{{ route('agentregister') }}">
                    <h3>AGENT <span class="color_primary">SIGNUP</span></h3>
                            <p class="text-muted">Create an account for your business</p>
                        <hr />
                        @csrf
                        <div class="row w-100">
                            <div class="col-12">
                            @if (Session::has('sMessage'))
                            <div class='text-success'>{{Session::get('sMessage') }}</div>
                            @endif
                            @if (Session::has('message'))
                            <div class='text-danger'>{{Session::get('message') }}</div>
                            @endif                            </div>
                            <div class="col-md-6">
                                <label for="name" class="w-100">{{ __('Firstname') }}</label> <br />
    
                                <div class="">
                                    <input id="firstname" type="text" class="form-input w-100 @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
    
                                    @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="name" class="w-100">{{ __('Lastname') }}</label> <br />
    
                                <div class="">
                                    <input id="lastname" type="text" class="form-input w-100 @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                                    <input id="usertype" type="text" hidden value="agent" name="usertype">
    
                                    @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                       
                            <div class="col-12">
                                <label for="email" class="w-100">{{ __('E-Mail Address') }}</label> <br />
    
                                <div class="">
                                    <input id="email" type="email" class="form-input w-100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="col-md-6">
                                <label for="password" class="w-100">{{ __('Password') }}</label> <br />
    
                                <div class="">
                                    <input id="password" type="password" class="form-input w-100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="col-md-6">
                                <label for="password-confirm" class="w-100">{{ __('Confirm Password') }}</label> <br />
    
                                <div class="">
                                    <input id="password-confirm" type="password" class="form-input w-100" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="col-12 my-3">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="text-center my-3">
                            <span class="text-muted">Already have an account? <a class="btn text-right" href="{{ route('agentslogin') }}"> <small>Login</small></a></span>
                        </div>

                    </form>
                </div>
                
            </div>
        </div>
    </section>
</body>
</html>