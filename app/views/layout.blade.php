<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'No Idea Project')</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}"/>
</head>
<body>
    <div class="container well">
        <h2 class="text-center" style="margin-top: 5px; padding-top: 0;">No Idea Project Lists</h2>
    </div>

    <div class="container">
        @yield('mainContent')
    </div>
</body>
</html>