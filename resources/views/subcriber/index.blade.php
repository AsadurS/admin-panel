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
   <!-- <a class="btn btn-info float-right"href="{{url('/pdf')}}"> Download Pdf</a> -->
  <div id="step-1">
   <!-- <button class="btn btn-info float-right" id="cmd">Generate PDF</button> -->
    <table  id="content"   class="table table-striped table-border">

      <thead>
        <tr>
          <th>Sl.No
          </th>

          <th>Email
          </th>
          <th>Action
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach($sub as $key=>$all)
        <tr>
          <td>{{1+$key++}}
          </td>

             <td >
              {{$all->email}}
         </td>


          <td>

            <a  href="{{url('/subcriber/delete/'.$all->id)}}" onclick="return confirm('are you sure want to delete it?')">
               <!-- onclick="return confirm('are you sure want to delete it')" -->
              <i class="fa fa-trash fa-lg man_delete">
              </i>
            </a>
          </td>
        </tr>

        @endforeach

      </tbody>
  <!-- <a style="float:right" href="{{url('send')}}" class="btn btn-info btn-md"> All Send</a> -->
    </table>


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
