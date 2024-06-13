<!doctype html>
<html lang="en" />

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <title>PWP 3</title>
  <link rel="shortcut icon" href="https://adensahwaludin.github.io/Logo%20Aden%20Sahwaludin.png" type="image/x-icon">

  @stack('prepend-style')
  @include('includes.style')
  @stack('addon-style')
</head>

<body>

  @include('includes.navbar')

  @yield('content')

  @include('includes.footer')

  @stack('prepend-script')
  @include('includes.script')
  @stack('addon-script')

</body>

</html>