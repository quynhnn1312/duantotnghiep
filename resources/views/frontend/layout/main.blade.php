<!DOCTYPE html>
<html lang="zxx" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title', 'Education')</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet" />
    <meta charset="UTF-8" />
    {{--start style--}}
    @include('frontend.layout._share.head')
</head>

<body>
{{--start header--}}
@include('frontend.layout._share.header')


{{--start banner--}}
@yield('banner')

{{--start content--}}
@yield('content')


{{--start footer--}}
@include('frontend.layout._share.footer')

{{--start script--}}
@include('frontend.layout._share.script')

</body>

</html>
