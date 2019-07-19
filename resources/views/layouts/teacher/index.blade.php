<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('contents/teacher')}}/images/favicon.ico" type="image/ico" />
    <title>Tution
    </title>
    <link href="{{asset('contents/teacher')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('contents/teacher')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('contents/teacher')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="{{asset('contents/teacher')}}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <link href="{{asset('contents/teacher')}}/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link href="{{asset('contents/teacher')}}/build/css/custom.min.css" rel="stylesheet">
    @stack('css')
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div  class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title">
                <i class="fa fa-paw">
                </i>
                <span>Gentelella Alela!
                </span>
              </a>
            </div>
            <div class="clearfix">
            </div>
            <!-- menu profile quick info -->
            <div  class="profile clearfix position-fixed">
              <div class="profile_pic">
                <img src="{{asset('contents/teacher')}}/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,
                </span>
                <h2>{{Auth::user()->name}}
                </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->
            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General
                </h3>
                <ul class="nav side-menu">
                  <li>
                    <a>
                      <i class="fa fa-home ">
                      </i> Home
                      </span>
                  </a>
                </li>
              <li>
                <a>
                  <i class="fa fa-universal-access">
                  </i> User
                  <span class="fa fa-chevron-down">
                  </span>
                </a>
                <ul class="nav child_menu">
                  <li>
                    <a href="{{url('/user')}}">All User
                    </a>
                  </li>
                  @if(Auth::user()->role_id
                  <3)
                      <li>
                  <a href="form.html">General Form
                  </a>
                  </li>
              <li>
                <a href="form.html">General Form
                </a>
              </li>
              @endif
              </ul>
            </li>
              <li>
                <a href="{{url('subcriber/view')}}">
                  <i class="fa fa-universal-access">
                  </i> Subcribers

                </a>



            </li>
          <li>
            <a>
              <i class="fa fa-book">
              </i> Academmic Info
              <span class="fa fa-chevron-down">
              </span>
            </a>
            <ul class="nav child_menu">
              <li>
                <a href="form.html">General Form
                </a>
              </li>
              <li>
                <a href="form_advanced.html">Advanced Components
                </a>
              </li>
              <li>
                <a href="form_validation.html">Form Validation
                </a>
              </li>
              <li>
                <a href="form_wizards.html">Form Wizard
                </a>
              </li>
              <li>
                <a href="form_upload.html">Form Upload
                </a>
              </li>
              <li>
                <a href="form_buttons.html">Form Buttons
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a>
              <i class="fa fa-user">
              </i>Pertional Info
              <span class="fa fa-chevron-down">
              </span>
            </a>
            <ul class="nav child_menu">
              <li>
                <a href="{{url('/view', Auth::user()->id)}}">Pfofile
                </a>
              </li>
              <li>
                <a href="fixed_footer.html">Fixed Footer
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a  href="{{ route('logout') }}"
               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
              <i class=" fa fa-sign-out">
              </i> {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>
          </ul>
      </div>
    </div>
    <!-- /sidebar menu -->
    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true">
        </span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true">
        </span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true">
        </span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
        <span class="glyphicon glyphicon-off" aria-hidden="true">
        </span>
      </a>
    </div>
    <!-- /menu footer buttons -->
    </div>
  </div>
<div   class="position-fixed top_nav ">
  <div  class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle">
          <i class="fa fa-bars">
          </i>
        </a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="{{asset('contents/teacher')}}/images/img.jpg" alt="">{{Auth::user()->name}}
            <span class=" fa fa-angle-down">
            </span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li>
              <a href="javascript:;"> Profile
              </a>
            </li>
            <li>
              <a href="javascript:;">
                <span class="badge bg-red pull-right">50%
                </span>
                <span>Settings
                </span>
              </a>
            </li>
            <li>
              <a href="javascript:;">Help
              </a>
            </li>
            <li>
              <a class="dropdown-item fa fa-sign-out" href="{{ route('log') }}"
                 onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
          </ul>
        </li>
        <li role="presentation" class="dropdown">
          <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-envelope-o">
            </i>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</div>
<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        @yield('content')
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="pull-right">
    Asadur Zaman
  </div>
  <div class="clearfix">
  </div>
</footer>
<!-- /footer content -->
</div>
</div>
{!! Toastr::message() !!}
@if (count($errors)>0)
 @foreach ($errors->all() as $error)
 toastr.error('{{$error}}','Error',{
   closeButton: true,
   progressBar:true,
 })
 @endforeach
@endif
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{asset('contents/teacher')}}/vendors/jquery/dist/jquery.min.js"></script>
   <!-- Bootstrap -->
   <script src="{{asset('contents/teacher')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
   <!-- FastClick -->
   <script src="{{asset('contents/teacher')}}/vendors/fastclick/lib/fastclick.js"></script>
   <!-- NProgress -->
   <script src="{{asset('contents/teacher')}}/vendors/nprogress/nprogress.js"></script>
   <!-- bootstrap-progressbar -->
   <script src="{{asset('contents/teacher')}}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
   <!-- iCheck -->
   <script src="{{asset('contents/teacher')}}/vendors/iCheck/icheck.min.js"></script>
   <!-- bootstrap-daterangepicker -->
   <script src="{{asset('contents/teacher')}}/vendors/moment/min/moment.min.js"></script>
   <script src="{{asset('contents/teacher')}}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
   <!-- bootstrap-wysiwyg -->
   <script src="{{asset('contents/teacher')}}/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
   <script src="{{asset('contents/teacher')}}/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
   <script src="{{asset('contents/teacher')}}/vendors/google-code-prettify/src/prettify.js"></script>
   <!-- jQuery Tags Input -->
   <script src="{{asset('contents/teacher')}}/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
   <!-- Switchery -->
   <script src="{{asset('contents/teacher')}}/vendors/switchery/dist/switchery.min.js"></script>
   <!-- Select2 -->
   <script src="{{asset('contents/teacher')}}/vendors/select2/dist/js/select2.full.min.js"></script>
   <!-- Parsley -->
   <script src="{{asset('contents/teacher')}}/vendors/parsleyjs/dist/parsley.min.js"></script>
   <!-- Autosize -->
   <script src="{{asset('contents/teacher')}}/vendors/autosize/dist/autosize.min.js"></script>
   <!-- jQuery autocomplete -->
   <script src="{{asset('contents/teacher')}}/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
   <!-- starrr -->
   <script src="{{asset('contents/teacher')}}/vendors/starrr/dist/starrr.js"></script>
   <!-- Custom Theme Scripts -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-idletimer/1.0.0/idle-timer.min.js" type="text/javascript"> -->

</script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{asset('contents/teacher')}}/build/js/custom.min.js">
</script>
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
    <script type="text/javascript">
//     $(function() {
//   $( document ).idleTimer(60000);
// });
//
// $(function() {
//   $( document ).on( "idle.idleTimer", function(event, elem, obj){
// //   var $url = base_url+'/logout';
//    window.location = '/log';
//
//
//   });
// });
    </script>



@stack('js')
@if (count($errors)>0)
 @foreach ($errors->all() as $error)
 toastr.error('{{$error}}','Error',{
   closeButton: true,
   progressBar:true,
 })
 @endforeach
@endif
</body>
</html>
​
