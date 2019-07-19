@extends('layouts.teacher.index')
@section('content')

<div class="x_content">
  <div id="step-1">
  <embed src="{{asset('storage/file/'.$find->file)}}" width="90%" height="500px" />
  </div>
</div>
@endsection
