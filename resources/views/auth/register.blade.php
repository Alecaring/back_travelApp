@extends('layouts.app')

@section('content')
    <div class="container-fluid ms_vhHeaderContainerTop p-0 ">
        <div class="ms_vhHeaderContainer">
            <div class="col-md-8 ms_col_md8">
                <img class="img w-100" src="https://www.decioviaggi.com/img/box-viaggi.jpg" alt="">
                <div class="containerUnderCol8 p-3">
                    <div class="ms_log_container_txt">
                        <a href="{{ route('login') }}" class="card-header text-center ">{{ __('Log in') }}</a>
                        <a href="{{ route('register') }}" class="card-header text-center ">{{ __('Register') }}</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class=" row">
                                <label for="name"
                                    class="ms_letter_input col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="nameReg" type="text" autocomplete="off"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" autofocus>
                                        <p id="nameFeedback" class="feedback"></p>


                                    
                                </div>
                            </div>

                            <div class="row">
                                <label for="email"
                                    class="ms_letter_input col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="emailReg" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" autocomplete="off">
                                        <p id="emailFeedback" class="feedback"></p>

                                    {{-- @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror --}}
                                </div>
                            </div>

                            <div class=" row">
                                <label for="regPassword"
                                    class="ms_letter_input col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="regPassword" type="password" class="form-control" name="password"
                                    autocomplete="off">

                                    {{-- @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror --}}
                                    <div>
                                        <ul class="list-group pt-2 text-light pb-3">
                                            <li class="ms_letter_input list-group-item bg-transparent border-0 py-1 ms_fs_li_register" id="pLenght">Lunghezza password: 8</li>
                                            <li class="ms_letter_input list-group-item bg-transparent border-0 py-1 ms_fs_li_register" id="pCharM">Alemeno una maiuscola</li>
                                            <li class="ms_letter_input list-group-item bg-transparent border-0 py-1 ms_fs_li_register" id="pNum">Almeno un numeri</li>
                                            <li class="ms_letter_input list-group-item bg-transparent border-0 py-1 ms_fs_li_register" id="pCharSpecial">Caratteri Speciali @$!%*?&</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class=" row">
                                <label for="password-confirm"
                                    class="ms_letter_input col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="off">
                                </div>
                                <div id="errorMessages" class="col-md-6 alert-danger border-0 py-2 feedback text-danger"  role="alert">
                                    
                                </div>
                                  
                            </div>

                            <div class="mt-5 row mb-0 ms_btnCont">
                                <div id="button-container" class="genBtn div col-md-6 offset-md-4 ">
                                    <button id="submitButton" type="submit" class=" btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                    
                                </div>
                                <div id="layerButton" class="fiBtn div col-md-6 offset-md-4 ms_stilebotton">
                                    <button class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script></script>
@endsection
