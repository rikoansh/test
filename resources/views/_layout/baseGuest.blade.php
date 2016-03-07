<!DOCTYPE html>
<html lang="en">
  <head>
    @include('include/head')
  </head>
  
  <body>

    <script type="text/javascript" src="{{ asset('themes/js/jquery-1.10.2.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/js/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/js/bootstrap-3.1.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/js/holder.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/js/dropdowns-enhancement.js')}}"></script>


    <div id="navtop" class="navbar navbar-inverse" role="navigation">
    @include('include/navbar')
    </div><!-- #navtop -->

    <div id="header" class="hidden-print">
      <div class="container">
        <div class="row hidden-xs">
          <div class="col-md-6 header-left">
            <div class="logougm"></div>
            <div class="geser1">
            <h2>Tracer Study</h2>
            <h3>Universitas Lambung Mangkurat</h3>
            </div>
          </div>
          <div class="col-md-6 header-right hidden-sm">
            &nbsp;
      </div>
    </div>

    <div class="row navmain navbar-inverse">
    <div id="navmain" class="col-md-12 navmain-left collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-left">
          @if(Auth::guest())
          <li><a href="{{route('/')}}">Home</a></li>
          @else
          <li><a href="{{route('/')}}">Home</a></li>
          <li><a href="{{route('getLogout')}}">Log Out</a></li>
            @endif
        </ul>
          </div>
        </div>
      </div>
    </div> <!-- #header -->

    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-4 col-md-push-8">
                 @if(Auth::guest())
                <a class="btn btn-primary lebar" href="{{ route('getLogin') }}">Login Alumni</a>

                <br><br>
@endif
  <div class="panel panel-info">
    @include('include/sidebar2')
  </div><!-- panel -->

  <div class="panel panel-primary">
  @include('include/sidebar3')
  </div>
</div><!-- col-md-4 -->

<div class="col-md-8 col-md-pull-4">

    @yield('konten')
    
</div><!-- col-md-7 -->
            </div>
        </div>
      </div>
    </div>

    <div id="footer">
      @include('include/footer')
    </div> <!-- #footer -->

<script type="text/javascript">
$(function () {
    $('.checkall').on('click', function () {
        $(this).closest('fieldset').find(':checkbox').prop('checked', this.checked);
    });
});
</script>
@section('js')
          <script src="{{ asset('js/frontend.js') }}"></script>
    @show
  </body>
</html>