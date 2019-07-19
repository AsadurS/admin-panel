@extends('layouts.teacher.index')
@push('css')
@endpush
@section('content')
<div id="id" class="col-md-8">
@if(Session::has('success'))
     <div class="alert alert-success alert-dismissible" role="alert">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <strong>Success!</strong> Successfully password change.
     </div>
 @endif
 @if(Session::has('error'))
   <div class="alert alert-danger alert-dismissible" role="alert">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <strong>Error!</strong>not change;
   </div>
 @endif
 @if(Session::has('er'))
   <div class="alert alert-danger alert-dismissible" role="alert">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <strong>Error!</strong>Old password not match;
   </div>
 @endif
</div>
<div class="x_content">
  <div id="step-1">
    <!-- @if (count($errors)>0)
     @foreach ($errors->all() as $error)
       <p class="alert alert-danger"> {{ $error }} </p>
     @endforeach
   @endif -->
    <form method="POST" action="{{ url('/change/pass') }}">
        @csrf
        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __(' Old Password') }}</label>
            <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="oldpassword" required>
                @if ($errors->has('oldpassword'))
                    <span class="invalid-feedback" role="alert">
                        <strong style="color:red">{{ $errors->first('oldpassword') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __(' New Password') }}</label>
            <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong style="color:red">{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>
        <div class="form-group row mb-0">
          <label for="password-confirm" class="col-md-4 col-form-label text-md-right"></label>
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('update pass') }}
                </button>
            </div>
        </div>
    </form>
  </div>
 </div>
@push('js')
@endpush
@endsection
