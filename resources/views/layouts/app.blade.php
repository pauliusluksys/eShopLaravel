<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
{{--    livewire--}}
    @livewireStyles

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body class="c-app">
@include('partials.menu')

<div class="c-wrapper c-fixed-components">
    <header class="c-header c-header-light c-header-fixed c-header-with-subheader">

    </header>
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                {{ $slot }}
{{--                @yield('content')--}}

            </div>
        </main>
        <footer class="c-footer">
            <div><a href="https://coreui.io">CoreUI</a> © 2020 creativeLabs.</div>
            <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
        </footer>
    </div>
</div>

@livewireScripts


<!-- Optional JavaScript -->
<!-- Popper.js first, then CoreUI JS -->
<script src="{{ asset('js/app.js') }}" defer />
{{--<script src="https://unpkg.com/@popperjs/core@2"></script>--}}
<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
{{--livewire--}}

</body>
</html>

