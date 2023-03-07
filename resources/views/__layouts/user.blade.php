<!DOCTYPE html>
<html lang="en">
<head>

  @include('__includes.headd')

</head>
<body>
    @hasSection ('page-content')
        @yield('page-content')
    @endif
</body>
</html>