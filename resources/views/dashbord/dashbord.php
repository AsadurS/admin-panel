@extends('layouts.teacher.index')
@section('content')
<div id="id" class="col-md-8">
  @if(Session::has('success'))
              <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;
      </span>
    </button>
    <strong>{{Session::get('success')}}
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
  <div id="step-1">
    <table id="datatable" class="table table-striped table-border">
      <thead>
        <tr>
          <th>Sl. No
          </th>
          <th>Session id
          </th>
          <th>Ip
          </th>
        </tr>
      </thead>
      <tbody>
      @foreach ($$activeGuest as $key => $a)
        <tr>
          <td>
            {{$key +1}}
          </td>

          <td>
            {{$a->sesion_id}}
          </td>
          <td>
            {{$a->ip}}
          </td>



      </tr>

        @endforeach

      </tbody>

    </table>
    
  </div>
</div>
@endsection
