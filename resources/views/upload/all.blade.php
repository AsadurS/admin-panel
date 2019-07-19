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
          <th>Subject
          </th>
          <th>image
          </th>
          <th>Fil Name
          </th>
          <td> Action</td>
          <td> Download file</td>
        </tr>
      </thead>
      <tbody>
      @foreach ($al as $key => $a)
          <td>
            <img src="{{asset('storage/image/'.$a->image)}}" style="width:100px"alt="">
          </td>

          <td>{{$a->file}}
          </td>
       <td>
      <a href="#" class="btn btn-info">Image view</a>
       </td>
       <td>
         <a href="{{url('/upload/fileview',$a->id)}}" class="btn btn-info"> file view</a>
      <a href="{{url('/upload/fileview',$a->file)}}" download="{{$a->file}}"class="btn btn-info">Download File</a>
       </td>
        </tr>
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
              </div>
              <div class="modal-body">
               @foreach ($al as $key => $a)

              <embed src="{{asset('storage/file/'.$a->file)}}" width="90%" height="900px" />
                  @endforeach
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
        @endforeach

      </tbody>

    </table>
  </div>
</div>
@endsection
