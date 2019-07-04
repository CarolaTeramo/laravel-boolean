<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>


    <!-- @include('includes.esempioinclude') -->
    @include('includes.navbar')
    @include('includes.section1')

    @yield('content')

    @include('includes.footer')

  </body>
</html>
