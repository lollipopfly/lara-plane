<!doctype html>
<html lang="ru" ng-app="app">
<head>
    <title>Admin Panel</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- BOOTSTRAP -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="{!! asset('adm-panel/css/style.css') !!}" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-24">
                <header>
                    <a href="/admin/" class="admin-logo">ADMIN PANEL</a>
                </header>
                {{-- Message after successfuly added spaceship--}}
                @include('partials.admin.flash')

                @yield('content')
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{!! asset('js/libs/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('bower/angular/angular.min.js') !!}"></script>
    <script src="{!! asset('adm-panel/js/create_controller.js') !!}"></script>
    <script src="{!! asset('adm-panel/js/common.js') !!}"></script>
</body>
</html>