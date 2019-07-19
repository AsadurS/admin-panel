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
    <strong>{{Session::get('error')}}
    </strong>
  </div>
  @endif
</div>
<div class="x_content">
  <a href="{{url('/pdf/asad')}}">pdf download</a>
  <div class="col-md-5" id="step-1">
      <h3>Active Gest <span class="badge badge-primary">{{$s}}</span> </h3>
    <table id="datatable" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Sl. No
          </th>
          <th>Ip
          </th>
        </tr>
      </thead>
      <tbody>
  @foreach($actr as $key=>$al)
  @if($al->deleteActiveUser2())
  <?php
  if(!empty($_SERVER["HTTP_CLIENT_IP"])){
  $ip=$_SERVER["HTTP_CLIENT_IP"];
  }
  elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
  $ip=$_SERVER["HTTP_X_FORWARDED_FOR"];
  }
  else{
  $ip=$_SERVER["REMOTE_ADDR"];
}
  $session=session_id();
   ?>
<td>
{{
  $ip
}}
{{
  $session
}}
</td>

@else
<td>
  ki koram
</td>
  @endif
  @endforeach
      </tbody>
    </table>
  </div>
  

    <div class="col-md-5" id="step-1">
      <h3>Total Active User <span class="badge badge-primary">{{$d}}</span></h3>
    <table id="datatable" class="table-bordered col-md-5 table table-striped">
      <thead>
        <tr>
          <th>Sl. No
          </th>
          <th>User Name
          </th>
          <th>User id
          </th>
        </tr>
      </thead>
      <tbody>
      @foreach ($activeUser as $key => $a)
        <tr>
          <td>

          </td>
          <td>

          </td>
            @if($a->deleteActiveUser())
          <td>


          </td>
          @else
          <td>
hoina kan
          </td>
            @endif
      </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class=" col-md-offset-2 col-md-8">
    
    {!! Charts::assets() !!}
  {!! $chart->render() !!}
  </div>
</div>

@endsection
