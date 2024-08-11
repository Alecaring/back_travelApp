{{-- @extends('layouts.app')

@section('content')
<div class="mainLoginCont" style="background: #f4f4f4; min-height: 100vh; display: flex; align-items: center; justify-content: center; font-family: 'Poppins', sans-serif;">

    <div class="container p-5" style="max-width: 500px; background: #ffffff; border-radius: 15px; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);">
        <!-- Pills navs -->
        <ul class="nav nav-pills nav-justified mb-4" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="tab-login" href="#pills-login" role="tab"
                    aria-controls="pills-login" aria-selected="true" style="font-weight: 600; text-transform: uppercase; color: #6e8efb;">{{ __('Login') }}</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-register" href="#pills-register" role="tab"
                    aria-controls="pills-register" aria-selected="false" style="font-weight: 600; text-transform: uppercase; color: #a777e3;">{{ __('Register') }}</a>
            </li>
        </ul>
        <!-- Pills navs -->

        <!-- Pills content -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="text-center mb-4">
                        <p style="font-size: 1.2em; color: #333;">Sign in with:</p>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-link btn-floating mx-2" style="color: #3b5998; font-size: 1.5em; transition: transform 0.3s;">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button type="button" class="btn btn-link btn-floating mx-2" style="color: #db4a39; font-size: 1.5em; transition: transform 0.3s;">
                                <i class="fab fa-google"></i>
                            </button>
                            <button type="button" class="btn btn-link btn-floating mx-2" style="color: #1da1f2; font-size: 1.5em; transition: transform 0.3s;">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button type="button" class="btn btn-link btn-floating mx-2" style="color: #333; font-size: 1.5em; transition: transform 0.3s;">
                                <i class="fab fa-github"></i>
                            </button>
                        </div>
                    </div>

                    <p class="text-center text-muted" style="margin-top: 20px;">or:</p>

                    <!-- Email input -->
                    <div class="form-group floating-label">
                        <input type="email" id="loginEmail" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                        <label for="loginEmail">{{ __('E-Mail Address') }}</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- Password input -->
                    <div class="form-group floating-label">
                        <input type="password" id="loginPassword"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password" />
                        <label for="loginPassword">{{ __('Password') }}</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <!-- 2 column grid layout -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }} />
                            <label class="form-check-label" for="remember" style="color: #555;">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #6e8efb;">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4 w-100" style="background: #6e8efb; border: none; padding: 10px 15px; font-size: 1em; border-radius: 5px; transition: background 0.3s ease;">
                        Sign in
                    </button>

                    <!-- Register buttons -->
                    <div class="text-center">
                        <p style="color: #555;">Not a member? <a href="{{ route('register') }}" style="color: #a777e3;">Register</a></p>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="text-center mb-4">
                        <p style="font-size: 1.2em; color: #333;">Sign up with:</p>
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn btn-link btn-floating mx-2" style="color: #3b5998; font-size: 1.5em; transition: transform 0.3s;">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button type="button" class="btn btn-link btn-floating mx-2" style="color: #db4a39; font-size: 1.5em; transition: transform 0.3s;">
                                <i class="fab fa-google"></i>
                            </button>
                            <button type="button" class="btn btn-link btn-floating mx-2" style="color: #1da1f2; font-size: 1.5em; transition: transform 0.3s;">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button type="button" class="btn btn-link btn-floating mx-2" style="color: #333; font-size: 1.5em; transition: transform 0.3s;">
                                <i class="fab fa-github"></i>
                            </button>
                        </div>
                    </div>

                    <p class="text-center text-muted" style="margin-top: 20px;">or:</p>

                    <!-- Name input -->
                    <div class="form-group floating-label">
                        <input type="text" id="registerName" class="form-control" name="name" required />
                        <label for="registerName">Name</label>
                    </div>

                    <!-- Username input -->
                    <div class="form-group floating-label">
                        <input type="text" id="registerUsername" class="form-control" name="username" required />
                        <label for="registerUsername">Username</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-group floating-label">
                        <input type="email" id="registerEmail" class="form-control" name="email" required />
                        <label for="registerEmail">Email</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-group floating-label">
                        <input type="password" id="registerPassword" class="form-control" name="password" required />
                        <label for="registerPassword">Password</label>
                    </div>

                    <!-- Repeat Password input -->
                    <div class="form-group floating-label">
                        <input type="password" id="registerRepeatPassword" class="form-control" name="password_confirmation" required />
                        <label for="registerRepeatPassword">Repeat Password</label>
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" required />
                        <label class="form-check-label" for="registerCheck" style="color: #555;">
                            I have read and agree to the <a href="#" style="color: #a777e3;">terms</a>
                        </label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-3" style="background: #6e8efb; border: none; padding: 10px 15px; font-size: 1em; border-radius: 5px; transition: background 0.3s ease;">
                        Sign up
                    </button>
                </form>
            </div>
        </div>
        <!-- Pills content -->
    </div>
</div>
@endsection --}}


@extends('layouts.app')

@section('content')
<div class="login-wrap">
    <div class="login-html">
        <!-- Tabs per Login e Registrazione -->
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
        <label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up">
        <label for="tab-2" class="tab">Sign Up</label>

        <!-- Form di Login -->
        <div class="login-form">
            <form class="sign-in-htm" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="group">
                    <label for="loginEmail" class="label">E-Mail Address</label>
                    <input type="email" id="loginEmail" class="input @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="group">
                    <label for="loginPassword" class="label">Password</label>
                    <input type="password" id="loginPassword" class="input @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="group">
                    <input id="check" type="checkbox" class="check" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Sign In">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Forgot Password?</a>
                    @endif
                </div>
            </form>

            <!-- Form di Registrazione -->
            <form class="sign-up-htm" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="group">
                    <label for="user" class="label">Username</label>
                    <input id="user" type="text" class="input" name="username" value="{{ old('username') }}" required>
                </div>
                <div class="group">
                    <label for="email" class="label">E-Mail Address</label>
                    <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="group">
                    <label for="pass" class="label">Password</label>
                    <input id="pass" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="group">
                    <label for="pass_confirmation" class="label">Repeat Password</label>
                    <input id="pass_confirmation" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Sign Up">
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <label for="tab-1">Already Member?</label>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    html, body {
    margin: 0;
    padding: 0;
    height: 100%;
    overflow: hidden; /* Rimuove lo scroll */
}
    body {
        margin: 0;
        color: #6a6f8c;
        background: #c8c8c8;
        font: 600 16px/18px 'Open Sans', sans-serif;
    }

    *,
    :after,
    :before {
        box-sizing: border-box
    }

    .clearfix:after,
    .clearfix:before {
        content: '';
        display: table
    }

    .clearfix:after {
        clear: both;
        display: block
    }

    a {
        color: inherit;
        text-decoration: none
    }

    .login-wrap {
        width: 100%;
        height: 93vh;
        
        margin:7vh auto 0;
        max-width: 525px;
        min-height: 670px;
        position: relative;
        background: url('https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg') no-repeat center;
        background-size: cover;
        box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19);
    }

    .login-html {
        
        width: 100%;
        height: 93vh;
        position: absolute;
        padding: 90px 70px 50px 70px;
        background: rgba(40, 57, 101, .9);
    }

    .login-html .sign-in-htm,
    .login-html .sign-up-htm {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        transform: rotateY(180deg);
        backface-visibility: hidden;
        transition: all .4s linear;
    }

    .login-html .sign-in,
    .login-html .sign-up,
    .login-form .group .check {
        display: none;
    }

    .login-html .tab,
    .login-form .group .label,
    .login-form .group .button {
        text-transform: uppercase;
    }

    .login-html .tab {
        font-size: 22px;
        margin-right: 15px;
        padding-bottom: 5px;
        margin: 0 15px 10px 0;
        display: inline-block;
        border-bottom: 2px solid transparent;
    }

    .login-html .sign-in:checked+.tab,
    .login-html .sign-up:checked+.tab {
        color: #fff;
        border-color: #1161ee;
    }

    .login-form {
        min-height: 345px;
        position: relative;
        perspective: 1000px;
        transform-style: preserve-3d;
    }

    .login-form .group {
        margin-bottom: 15px;
    }

    .login-form .group .label,
    .login-form .group .input,
    .login-form .group .button {
        width: 100%;
        color: #fff;
        display: block;
    }

    .login-form .group .input,
    .login-form .group .button {
        border: none;
        padding: 15px 20px;
        border-radius: 25px;
        background: rgba(255, 255, 255, .1);
    }

    .login-form .group input[data-type="password"] {
        text-security: circle;
        -webkit-text-security: circle;
    }

    .login-form .group .label {
        color: #aaa;
        font-size: 12px;
    }

    .login-form .group .button {
        background: #1161ee;
    }

    .login-form .group label .icon {
        width: 15px;
        height: 15px;
        border-radius: 2px;
        position: relative;
        display: inline-block;
        background: rgba(255, 255, 255, .1);
    }

    .login-form .group label .icon:before,
    .login-form .group label .icon:after {
        content: '';
        width: 10px;
        height: 2px;
        background: #fff;
        position: absolute;
        transition: all .2s ease-in-out 0s;
    }

    .login-form .group label .icon:before {
        left: 3px;
        width: 5px;
        bottom: 6px;
        transform: scale(0) rotate(0);
    }

    .login-form .group label .icon:after {
        top: 6px;
        right: 0;
        transform: scale(0) rotate(0);
    }

    .login-form .group .check:checked+label {
        color: #fff;
    }

    .login-form .group .check:checked+label .icon {
        background: #1161ee;
    }

    .login-form .group .check:checked+label .icon:before {
        transform: scale(1) rotate(45deg);
    }

    .login-form .group .check:checked+label .icon:after {
        transform: scale(1) rotate(-45deg);
    }

    .login-html .sign-in:checked+.tab+.sign-up+.tab+.login-form .sign-in-htm {
        transform: rotate(0);
    }

    .login-html .sign-up:checked+.tab+.login-form .sign-up-htm {
        transform: rotate(0);
    }

    .hr {
        height: 2px;
        margin: 60px 0 50px 0;
        background: rgba(255, 255, 255, .2);
    }

    .foot-lnk {
        text-align: center;
    }
</style>
