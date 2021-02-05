@extends('layouts.app', ['class' => 'register-page', 'page' => __('Register Page'), 'contentClass' => 'register-page'])

@section('content')
<style>
 button.btn.btn-primary.btn-lg.btn-round{
    background:#1c478e !important;
    color:#ffffff;
}
h4.card-title.text-center{
    color:#1c478e !important;
    font-weight:900;
}
</style>
    <div class="row">
        <div class="col-md-5 ml-auto">
            <div class="info-area info-horizontal mt-5">
            

                 <h1>Covid 19  MEASURES</h1>
                <div class="description">
                    <h3 class="info-title">{{ __('MEASURE 1') }}</h3>
                    <p class="description ml-3 ">
                      Wear a mask Always
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <div class="description">
                    <h3 class="info-title">MEASURE 2</h3>
                    <p class="description ml-3">
                        Wash Hands Always
                    </p>
                </div>
            </div>
            <div class="info-area info-horizontal">
                <!-- <div class="icon icon-info">
                    <i class="tim-icons icon-trophy"></i>
                </div> -->
                <div class="description">
                    <h3 class="info-title">Measure 3</h3>
                    <p class="description ml-3">
                    Keep a distance Always
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-7 mr-auto">
            <div class="card card-register card-white">
                <div class="card-header">
                    <h4 class="card-title text-center mt-3">Register</h4>
                </div>
                <form class="form" method="post" action="{{ route('register') }}">
                    @csrf

                    <div class="card-body">
                        <div class="input-group mt-3{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input type="text" name="name" class="form-control p-3{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}">
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>
                        <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-email-85"></i>
                                </div>
                            </div>
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}">
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>
                        <div class="input-group mt-4{{ $errors->has('role') ? ' has-danger' : '' }}">
                            <select name="role" id="Role" class="form-control">
                                <option value="Director">Director</option>
                                <option value="Admin">Administrator</option>
                            </select>
                            @include('alerts.feedback', ['field' => 'role'])
                        </div>
                        <div class="input-group mt-4{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password" class="form-control p-3{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}">
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>

                    
                        <div class="input-group mt-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password_confirmation" class="form-control p-3" placeholder="{{ __('Confirm Password') }}">
                        </div>
                        <div class="form-check text-left">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-sign"></span>
                                {{ __('I agree to the') }}
                                <a href="#">{{ __('terms and conditions') }}</a>.
                            </label>
                        </div>
                    </div>
                    <div class="card-footer d-flex flex-column">
                        <button type="submit" class="btn btn-primary btn-round btn-lg">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
