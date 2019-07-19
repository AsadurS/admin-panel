<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      @if (count($errors)>0)
      @foreach ($errors->all() as $error)
        <p class="alert alert-danger"> {{ $error }} </p>
      @endforeach
    @endif
                                    <div id="id" class="col-md-8">
       @if(Session::has('success'))
                                         <div class="alert alert-success alert-dismissible" role="alert">
                                             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            {{Session::get('success')}}
                                         </div>
                                         @endif
                                         @if(Session::has('err'))
                                         <div class="alert alert-danger alert-dismissible" role="alert">
                                             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                           <strong>Sorry </strong>You are Suspend please with Admin
                                         </div>
                                         @endif
                                       </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>

                </div>
                <form class="" action="{{url('/add/subcriber')}}" method="post">
                  @csrf
                  <input type="email" name="email" placeholder="example@gmail.com">
                      @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                              <strong style="color:red">{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  <input type="submit" class="btn btn-info"name="submit" value="submit">

                </form>
            </div>
        </div>

    </body>

    @if (count($errors)>0)
     @foreach ($errors->all() as $error)
     toastr.error('{{$error}}','Error',{
       closeButton: true,
       progressBar:true,
     })
     @endforeach
   @endif
   <script type="text/javascript">
   $(document).ready(function() {
       setTimeout(function() {
           $("#id").fadeOut(1500);
       }, 3000);

       $('#btnReset').click(function() {
           $("#id").show();
           setTimeout(function() {
               $("#id").fadeOut(1500);
           }, 3000);
       });
   });
       </script>
   <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
           <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
           {!! Toastr::message() !!}
</html>
