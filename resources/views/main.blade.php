<!doctype html>
<html lang="{{ app()->getLocale() }}" ng-app="myApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Easy Job</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-grid.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-reboot.css')}}"/>

        <link href="https://fonts.googleapis.com/css?family=Kanit:200,300,400,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kanit:200,300,400,500|Quicksand:300,400,500" rel="stylesheet">

        <script src="{{asset('js/angularjs.min.js')}}"></script>
        <script src="{{asset('js/jquery.js')}}"></script>
        <script type="text/javascript">
            var base_path = "{{url('/')}}";
        </script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        @yield('import')
    </head>
    <body>
        @yield('body')

        <header>

        </header>


        <footer>

        </footer>
        <script src="{{asset('js/MainController/MainJs.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
        @yield('script')
    </body>
</html>
