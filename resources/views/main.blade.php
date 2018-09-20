<!doctype html>
<html lang="{{ app()->getLocale() }}" ng-app="myApp">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Easy Job</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-grid.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-reboot.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />

    <link href="https://fonts.googleapis.com/css?family=Kanit:200,300,400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit:200,300,400,500|Quicksand:300,400,500" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

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

    <section class="section-navbar">
        <header>
            <nav class="navbar navbar-light bg-light text-nav">
                <!-- <a class="navbar-brand" href="#">Easy Job</a> -->
            </nav>
        </header>
    </section>

    <!-- modal sign in -->
    <!-- <div class="modal-body">
        <h5>Sign in</h5>
        <p>This <a href="#" role="button" class="btn btn-secondary popover-test" title="Popover title" data-content="Popover body content is set in this attribute.">button</a>
            triggers a popover on click.</p>
        <hr>
        <h5>Tooltips in a modal</h5>
        <p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that
                link</a> have tooltips on hover.</p>
    </div> -->

    @yield('body')
    <footer>

    </footer>
    <script src="{{asset('js/MainController/MainJs.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    @yield('script')
</body>

</html>