@extends('layouts.teacher.index')
@push('css')
@endpush
@section('content')
<div id="id" class="col-md-8">
  @if(Session::has('success'))
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;
      </span>
    </button>
    <strong> {{Session::get('success')}}
    </strong>
  </div>
  @endif
  @if(Session::has('error'))
  <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;
      </span>
    </button>
    <strong>Error!
    </strong>not change;
  </div>
  @endif
</div>
<div class="x_content">
  <table  class="table table-striped table-bordered ">
    <tbody>

      <tr>
    <td>User Name
    </td>
    <td>:
    </td>
    <td>{{$view->username}}
    </td>
    </tr>


    <tr>
  <td>Email
  </td>
  <td>:
  </td>
  <td>{{$view->email}}
  </td>
  </tr>
  <tr>
<td>Role Name
</td>
<td>:
</td>
<td>{{$view->role->name}}
</td>
</tr>
</tbody>
</table>
<button type="button" class="btn btn-primary" name="button">
  <a style="color:white" href="{{url('/update/'.$view->id)}}"> update profile
  </a>
</button>
<button type="button" class="btn btn-primary" name="button">
  <a  style="color:white" href="{{url('/change/'.$view->id)}}"> update Pass
  </a>
</button>
</div>
@push('js')
@endpush
@endsection
