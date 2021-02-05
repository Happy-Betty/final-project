@extends('layouts.app', 
['class' => 'login-page', 'contentClass' => 'login-page'])


@section('content')
<style>
img{
    object-fit:contain !important;
}
button.btn.btn-primary.btn-lg.btn-block.mb-3{
    background:#1c478e !important;
    color:#ffffff;
}
</style>
    <div class="col-md-10 text-center ml-auto mr-auto">
    <h1 class="text-center m-4">LOGIN PAGE</h1>

    </div>
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
    
        <form class="form" method="post" action="{{ route('login') }}">
            @csrf

            <div class="card card-login card-white">
                <div class="card-header">
                    <img src="https://www.eu-cord.org/2015/wp-content/uploads/2020/04/covid-19.jpg
                    " alt="" class="mb-4">
                    <h1 class="card-title text-center">{{ __('Log in') }}</h1>
                </div>
                <div class="card-body">
                    <p class="text-dark mb-2">Sign in with <strong>admin@black.com</strong> 
                    and the password <strong>secret</strong></p>

                    <div class="input-group mt-5{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-email-85"></i>
                            </div>
                        </div>
                        <input type="email" name="email" 
                        
                        class="form-control p-4{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                        placeholder="{{ __('Email') }}">
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="input-group mt-5{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" placeholder="{{ __('Password') }}" name="password" 
                        class="form-control p-4{{ $errors->has('password') ? ' is-invalid' : '' }}">
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" href=""
                     class="btn btn-primary btn-lg btn-block mb-3 font-bold">{{ __('Login') }}</button>
                    <div class="pull-left">
                        <h6>
                            <a href="{{ route('register') }}" 
                            class="link footer-link">{{ __('Create Account') }}</a>
                        </h6>
                    </div>
                    <div class="pull-right">
                        <h6>
                            <a href="{{ route('password.request') }}" 
                            class="link footer-link">{{ __('Forgot password?') }}</a>
                        </h6>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
