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
  <strong>{{Session::get('error')}}
  </div>
  @endif
</div>

<a name="asadur" href="/user/?role_id=1">asadur</a>
<div  id="content" class="x_content">
   <a class="btn btn-info float-right"href="{{url('/pdf')}}"> Download Pdf</a>
  <div id="step-1">
   <!-- <button class="btn btn-info float-right" id="cmd">Generate PDF</button> -->
    <table  id="content"   class="table table-striped table-border">

      <thead>
        <tr>
          <th>Name
          </th>
          <th>Active Status
          </th>
          <th>Email
          </th>
          <th>Role
          </th>
          <th>Status
          </th>
          @if(Auth::user()->role_id==1)
          <th>Change Status
          </th>
          @endif
          <th>Contact
          </th>
          <th>Action
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach($a as $all)
        <tr>
          <td>{{$all->name}}
          </td>
          @if($all->isOnline())
             <td >
                Online
         </td>
         @else
       <td >
           Last active at {{ $all->last_activity->diffForHumans()}}

     </td>
     @endif

          <td>{{$all->email}}
          </td>
      
          <td>{{$all->role->name}}
          </td>
          @if($all->status==1)
          <td> active
          </td>
          @else
          <td> Not active
          </td>
          @endif
          @if(Auth::user()->role_id==1)
          <td>
            <a style="padding:10px" href="{{url('/user/active/'.$all->id)}}">
              <i class="fa fa-thumbs-o-up" aria-hidden="true">
              </i>
            </a>
            <a style="padding:10px" href="{{url('/user/inactive/'.$all->id)}}">
              <i class="fa fa-thumbs-o-down" aria-hidden="true">
              </i>
            </a>
          </td>
          @endif
          <td>
            <a  class="btn btn-success" href="{{url('/sendto/'.$all->id)}}"> Send Email</a>
          </td>
          <td>
            <a href="">
              <i class="fa fa-plus-square fa-lg man_view">
              </i>
            </a>
            <a href="{{route('user.edit',$all->id)}}">
              <i class="fa fa-edit fa-lg man_edit">
              </i>
            </a>
            @if(Auth::user()->role_id==1)
            <a  href="{{url('/user/delete/'.$all->id)}}" onclick="return confirm('are you sure want to delete it?')">
               <!-- onclick="return confirm('are you sure want to delete it')" -->
              <i class="fa fa-trash fa-lg man_delete">
              </i>
            </a>
            @endif
          </td>
        </tr>

        @endforeach

      </tbody>
  <a style="float:right" href="{{url('send')}}" class="btn btn-info btn-md"> All Send</a>
    </table>

{{ $a->links() }}
  </div>
</div>
<div id="editor"></div>
@push('js')
<script type="text/javascript">
    function deleteTag(id) {
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            buttonsStyling: false,
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                event.preventDefault();
                document.getElementById('delete-form-'+id).submit();
            } else if (
                // Read more about handling dismissals
                result.dismiss === swal.DismissReason.cancel
            ) {
                swal(
                    'Cancelled',
                    'Your data is safe :)',
                    'error'
                )
            }
        })
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>
<script type="text/javascript">
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#cmd').click(function () {
    doc.fromHTML($('#content').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});
</script>


@endpush
@endsection
