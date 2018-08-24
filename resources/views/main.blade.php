<!doctype html>
<html lang="{{ app()->getLocale() }}" ng-app="myApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Easy Job</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}"/>
        <script src="{{asset('js/angularjs.min.js')}}"></script>
        <script src="{{asset('js/jquery.js')}}"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        @yield('import')        
    </head>
    <body>
        <nav>
        
        </nav>
        
        @yield('body')

        <footer>
        
        </footer>
        <script src={{asset('js/MainController/MainJs.js')}}></script>
        @yield('script')  
    </body>
</html>
