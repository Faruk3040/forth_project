<!doctype html>
<html lang="en">

<head>
   @include('css.css')
</head>

<body>

    <!-- ======= Top Body ======= -->
    @include('navigation.header')
    <!-- End Header -->







    <!-- ======= about us ======= -->
    @yield('content')

    <!-- ======= footer ======= -->

    @include('navigation.footer')


  @include('js.js')

</body>

</html>
