@extends('layouts.app')

@section('content')
    <div class="container-fluid ms_vhHeaderContainerTop p-0 ">
        <div class="ms_vhHeaderContainer">
            <div class="col-md-8 ms_col_md8 px-md-5">
                <img class="img w-100" src="https://www.decioviaggi.com/img/box-viaggi.jpg" alt="Travel Image">
                <div class="containerUnderCol8 p-3">

                    <div class="ms_log_container_txt ">
                        <a href="{{ route('login') }}" class="card-header text-center text-primary">{{ __('Log in') }}</a>
                        <a href="{{ route('register') }}" class="card-header text-center ">{{ __('Register') }}</a>
                    </div>

                    <div class="card-body ms_margin">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-4 row justify-content-center">
                                <label for="logEmail" class="ms_letter_input col-form-label text-md-right ms_lable">
                                    {{ __('E-Mail Address') }} *
                                </label>

                                <div class="">
                                    <input id="logEmail" type="email"
                                        class="ms_input form-control"
                                        name="email" value="{{ old('email') }}" autocomplete="off" autofocus required>
                                    <p id="emailValid" class="d-none"></p>
                                    <p id="feedbackEmailLog" class="feedback"></p>
                                </div>
                            </div>

                            <div class="mb-4 row justify-content-center">
                                <label for="logPassword" class="ms_letter_input  col-form-label text-md-right ms_lable">
                                    {{ __('Password') }} *
                                </label>

                                <div class="">
                                    <input id="logPassword" type="password"
                                        class="ms_input form-control"
                                        name="password" required autocomplete="off">
                                    <p id="passwordValid" class="d-none"></p>
                                    <span class="feedback" id="feedbackPasslLog"></span>

                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <div class="">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class=" row justify-content-center w-100 align-items-center m-auto">
                                <div class="col-8 d-flex flex-column align-items-center w-100 justify-content-center p-0">
                                    <div class="mt-4 row mb-4 ms_btnCont">
                                        <button id="submitButton" type="submit" class="genBtn btn btn-primary w-100">
                                            {{ __('Login') }}
                                        </button>
                                        <button id="layerButton" type="button" class="fiBtn btn btn-primary w-100">
                                            {{ __('Login') }}
                                        </button>
                                    </div>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link w-100 text-center mt-4 text-decoration-none text-white"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
