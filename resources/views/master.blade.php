<!DOCTYPE html>
<html lang="en">

@include('layout._links')
@yield('stylesheets')

<body>
@yield('content')
</body>

@include('layout._javascripts')
@yield('javascripts')

</html>
