<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload file and image</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <form class="well form-horizontal"   method="post" enctype="multipart/form-data" action="{{url('/upload/store')}}">
      @csrf
            <fieldset>
              <input type="text"hidden name="jobid" value="{{'ST-'.time()}}">
                <legend><center><h2><b>Demo From</b></h2></center></legend><br>
                <div class="col-md-8 col-md-offset-2">
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="dob">Categoty</label>
                    <div class="col-md-4 ">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-check"></i></span>
                            <select  value=""name="category"  class="form-control">
                                <option value="">Select One</option>
                                @foreach($role as $rol)
                                <option value="{{$rol->id}}">{{$rol->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if ($errors->has('role'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color:red">{{ $errors->first('role') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                 <div class="form-group">
                    <label class="col-md-4 control-label" >Phone</label>
                    <div class="col-md-4 ">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                            <input  name="phone" placeholder="Please give your phone no...." class="form-control"  type="number">
                        </div>
                        @if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert">
                                <strong style="color:red">{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>

                </div>
                <!--Success message-->
    			 <div class="form-group">

    			  <label class="col-md-4 control-label" >Image</label>

    			 <div class="col-md-4 ">
    		 <input type="file" name="image" value="">
           @if ($errors->has('image'))
               <span class="invalid-feedback" role="alert">
                   <strong style="color:red">{{ $errors->first('image') }}</strong>
               </span>
           @endif
    			</div>

    			</div>
    			 <div class="form-group">

    			  <label class="col-md-4 control-label" >file</label>

    			 <div class="col-md-4 ">
    		 <input type="file" name="file" value="">
           @if ($errors->has('file'))
               <span class="invalid-feedback" role="alert">
                   <strong style="color:red">{{ $errors->first('file') }}</strong>
               </span>
           @endif
    			</div>

    			</div>
    			 <div class="form-group">

    			  <label class="col-md-4 control-label" >Gender</label>

    			 <div class="col-md-4 ">
    			  <input type="radio" name="gender" value="male">Male</label>
    			 <input style="margin-left:10px" type="radio" name="gender" value="female">Female
           @if ($errors->has('gender'))
               <span class="invalid-feedback" role="alert">
                   <strong style="color:red">{{ $errors->first('gender') }}</strong>
               </span>
           @endif
    			</div>

    			</div>
    			 <div class="form-group">

    			  <label class="col-md-4 control-label" >Subject</label>

    			 <div class="col-md-4 ">
    			  <input type="checkbox" name="subject[]" value="bangla">bangla</label>
    			 <input style="margin-left:10px" type="checkbox" name="subject[]" value="english">english
           @if ($errors->has('subject'))
               <span class="invalid-feedback" role="alert">
                   <strong style="color:red">{{ $errors->first('subject') }}</strong>
               </span>
           @endif
    			</div>

    			</div>

                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4 control-label"></label>
                    <div class="col-md-4"><br>
                        <button type="submit"  class="btn btn-warning btn-block btn-large">Registration</button>
                    </div>
                </div>

            </fieldset>
        </form>
  </body>
</html>
