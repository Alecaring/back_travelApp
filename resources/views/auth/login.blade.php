@extends('layouts.app')

@section('content')
    <div class="container-fluid ms_vhHeaderContainerTop p-0 ">
        <div class="ms_vhHeaderContainer">
            <div class="col-md-8 ms_col_md8">
                <img class="img w-100" src="https://www.decioviaggi.com/img/box-viaggi.jpg" alt="">
                <div class="containerUnderCol8 p-3">


                    <div
                        class="d-flex flex-column flex-md-row justify-content-center align-items-center fs-1 mb-5 gap-4 fw-bold">
                        {{-- <div class="ms_btIc card-header me-3">{{ __('LOGIN') }}</div> --}}
                        @if (Route::has('login'))
                            <a class="ms_btIc card-header me-3 text-decoration-none" href="{{ route('login') }}">
                                {{ __('LOGIN') }}
                            </a>
                        @endif
                        {{-- <div class="ms_btIc2 card-header">{{ __('REGISTER') }}</div> --}}
                        @if (Route::has('register'))
                            <a class="ms_btIc2 card-header text-decoration-none" href="{{ route('register') }}">
                                {{ __('REGISTER') }}
                            </a>
                        @endif
                    </div>


                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-4 row position-relative justify-content-center">
                                <label for="logEmail" class="col-md-4 col-form-label text-md-right ms_lable">
                                    <span>
                                        {{ __('E-Mail Address') }} *
                                    </span>
                                </label>

                                <div class="col-8">
                                    <input id="logEmail" type="email"
                                        class="ms_input form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" autocomplete="email" autofocus>
                                        <p id="validEmailLog"></p>


                                    {{-- @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>

                            <div class="mb-4 row position-relative justify-content-center">
                                <label for="logPassword" class="col-md-4 col-form-label text-md-right ms_lable">
                                    <span>
                                        {{ __('Password') }} *
                                    </span>
                                </label>

                                <div class="col-8">
                                    <input id="logPassword" type="password"
                                        class="ms_input form-control @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password">

                                    {{-- @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                    {{-- <div>
                                        <ul>
                                            <li id="pLenght">Lunghezza Password: 8</li>
                                            <li id="pCharM">Alemeno una Maiuscola</li>
                                            <li id="pNum">Numeri</li>
                                            <li id="pCharSpecial">Caratteri Speciali</li>
                                        </ul>
                                    </div> --}}
                                </div>
                            </div>

                            <div class="mb-4 d-flex justify-content-center">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label " for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4 row justify-content-center">
                                <div class="col-8 d-flex flex-column align-items-center">
                                    <button type="submit" class="btn btn-primary w-50">
                                        {{ __('Login') }}
                                    </button>

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
