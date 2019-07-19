@extends('layouts.app')

@section('content')
<div id="id" class="col-md-8">
@if(Session::has('success'))
                               <div class="alert alert-success alert-dismissible" role="alert">
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                   <strong>Success!</strong> Successfully password change.
                               </div>
                               @endif
                               @if(Session::has('err'))
                               <div class="alert alert-danger alert-dismissible" role="alert">
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                {{Session::get('err')}}
                               </div>
                               @endif
                           </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div  class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row {{ $errors->has('email') || $errors->has('username') ? 'has-error' : '' }}">
                               <label for="email" class="col-md-4 control-label  text-md-right">{{ __('Email or Username') }}</label>


                               <div class="col-md-6">
                                   <input style="padding:10px" id="email" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                   @if ($errors->has('username'))
                                       <span class="help-block">
                                           <strong style="color:red">{{ $errors->first('username') }}</strong>
                                       </span>
                                   @endif

                                   @if ($errors->has('email'))
                                       <span class="help-block">
                                           <strong style="color:red">{{ $errors->first('email') }}</strong>
                                       </span>
                                   @endif
                               </div>
                           </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script
  src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $("#id").fadeOut(1500);
    }, 3000);
});
    </script>
@endsection
