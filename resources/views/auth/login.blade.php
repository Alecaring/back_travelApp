@extends('layouts.app')

@section('content')
<div class="container-fluid ms_vhHeaderContainerTop p-0 ">
    <div class="ms_vhHeaderContainer">
        <div class="col-md-8 ms_col_md8">
            <img class="img" src="https://www.decioviaggi.com/img/box-viaggi.jpg" alt="">
            <div class="containerUnderCol8">


                <div class="d-flex fs-1 mb-5 gap-4 fw-bold">
                    <div class="ms_btIc card-header me-3">{{ __('LOGIN') }}</div>
                    <div class="ms_btIc2 card-header">{{ __('REGISTER') }}</div>
                </div>


                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4 row position-relative">
                            <label for="email" class="col-md-4 col-form-label text-md-right ms_lable">
                                <span>
                                    {{ __('E-Mail Address') }} *
                                </span>
                            </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="ms_input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row position-relative">
                            <label for="password" class="col-md-4 col-form-label text-md-right ms_lable">
                                <span>
                                    {{ __('Password') }} *
                                </span>
                            </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="ms_input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-4 row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label " for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4 row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary w-100">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link w-100 text-center mt-4 " href="{{ route('password.request') }}">
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
