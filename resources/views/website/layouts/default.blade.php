<!DOCTYPE html>
<html lang="en">

@include('website.includes.head')
<body>

  <!-- Navigation -->
  @include('website.includes.nav')

  <!-- Page Content -->
  <div class="container">
    @yield('content')
    
  </div>
  <!-- /.container -->

  <!-- Footer -->
  @include('website.includes.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('ui/website/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('ui/website/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
