<!doctype html>
<html lang="en">

@include('partials.head')

<body>

@include('partials.loading')

@include('partials.header')

@yield('content')

@include('partials.footer')

@include('includes.scripts')

</body>
</html>
