<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>@yield('title') | FuDeShi</title>
    <style> @yield('css') </style>
</head>
<body>
<script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
@include('components.header')

<div class="container">
    @yield('content')
</div>

@include('components.footer')

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script>
    @yield('script')
</script>

</body>
</html>