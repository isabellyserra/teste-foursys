<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/custom.css') }}">
    <link href="{{ asset ('js/datepicker/jquery-ui.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('js/select2/select2.min.css') }}">
    
    
    <title>Teste Foursys</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-info mb-4">
            <a class="navbar-brand" href="{{ url('/') }}">Teste Foursys</a>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="center">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>


<script type="text/javascript" src="{{ asset ('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset ('js/maskmoney/dist/jquery.mask.js') }}"></script>
<script src="{{ asset('js/select2/select2.full.js') }}"></script>
<script src="{{ asset('js/datepicker/jquery-ui.min.js') }}"></script>