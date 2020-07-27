<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <title>@yield('title')</title>
        @yield('style')
    </head>
<body>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12">
                @include('partials.menu')
                @yield('content')
                @section('extra')
                    <h3>Extra Details</h3>
                @show
            </div>
        </div>
    </div>
    @yield('script')
</body>
</html>
