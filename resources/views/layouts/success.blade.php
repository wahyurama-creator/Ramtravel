<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title')</title>

    {{--    Style--}}
    @stack('prepend-style')
    @include('includes.user.style')
    @stack('addon-style')

</head>

<body>
{{--Navbar--}}
@include('includes.user.navbar-secondary')

{{--Main--}}
@yield('content')

{{--Script--}}
@stack('prepend-script')
@include('includes.user.script')
@stack('addon-script')

</body>
</html>
