@extends('layouts.teacher.index')
@push('css')
@endpush
@section('content')
<div class="x_content">
  <div id="step-1">
    <form method="post" action="{{route('user.update',$update->id)}}" class="form-horizontal form-label-left">
      @csrf
      @method('PUT')
    
      <div class="form-group">
        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input disabled id="email" class="form-control col-md-7 col-xs-12"  value="{{$update->email}}"type="text" name="email">
        </div>
      </div>


        <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sel1">Role  </label>
        <select style="padding:5px" name="role"  class="col-md-6 col-sm-6 col-xs-12" id="sel1">
          <option @if(Auth::user()->role_id > 1) disabled @endif value="" >Select One</option>
          <?php $rol=DB::table('roles')->get(); ?>
          @foreach($rol as $role)
          <option  @if(Auth::user()->role_id > 1) disabled @endif value="{{$role->id}}" @if($role->id==$update->role_id)  selected="selected"@endif>{{$role->name}} </option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">
        </label>
        <div  class="col-md-6 col-sm-6 col-xs-12">
          <button type="submit" class="btn btn-fill  btn-success btnu">UPDATE
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@push('js')
@endpush
@endsection
