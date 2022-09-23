<!doctype html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/styl.css') }}" />
</head>
<body class="white">
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 text-white border-bottom shadow-sm"
     style="background-color: #d90315;            ">
    <h1 class="my-0 mr-md-auto font-weight-normal">Pinterest <img src="/images/icon.png" width="80">
    </h1>

</div>
<div class="container mt-5">
    @yield('main_content')
</div>

</body>
</html>
