@extends('layouts.teacher.index')
@push('css')
@endpush
@section('content')
<div class="x_content">
  <div id="step-1">
    <form method="post" action="{{url('/updated')}}" class="form-horizontal form-label-left">
      @csrf
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Username

        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input type="text" disabled id="last-name" value="{{$update->username}}" class="form-control col-md-7 col-xs-12">
          @if ($errors->has('phone'))
          <span class="invalid-feedback" role="alert">
            <strong style="color:red">{{ $errors->first('phone') }}
            </strong>
          </span>
          @endif
        </div>
      </div>

      
      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input id="email" class="form-control col-md-7 col-xs-12"  value="{{$update->email}}"type="text" disabled >
          @if ($errors->has('email'))
          <span class="invalid-feedback" role="alert">
            <strong style="color:red">{{ $errors->first('email') }}
            </strong>
          </span>
          @endif
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Role
          <span class="required">*
          </span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input id="birthday" disabled class="date-picker form-control col-md-7 col-xs-12" value="{{$update->role->name}}" type="text">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">
        </label>
        <div  class="col-md-6 col-sm-6 col-xs-12">
          <button  type="submit" class="btn btn-fill  btn-success btnu">UPDATE
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@push('js')
@endpush
@endsection
