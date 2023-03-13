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
</body>
</html>