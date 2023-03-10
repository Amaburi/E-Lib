<!DOCTYPE html>
<html lang="en">
<head>

  @include('__includes.headd')

</head>
<body>
  
  <div id="content-wrapper" class="d-flex flex-column">
    @include('__includes.topbaruser')
    @hasSection ('page-content')
      @yield('page-content')
    @endif
  </div>

  <!-- Footer -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; Jy</span>
      </div>
    </div>
  </footer>
  <!-- End of Footer -->
</body>
</html>