<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@lang('messages.app_title')</title>

        <!-- CSS And JavaScript -->
        <!-- Bootstrap core CSS -->
          <meta name="csrf-token" content="{{ csrf_token() }}">
          <link rel="stylesheet" href="js/app.js">
          <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
                <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
              </div>
            </nav>
        </div>

        @yield('content')
    </body>
</html>
