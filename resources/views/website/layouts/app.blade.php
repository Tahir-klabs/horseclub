@include('../includes/compatibility')
<title>{{ config('app.name', 'Laravel') }}</title>
<meta name="description" content="">
@include('../website/includes/style')
<meta charset='utf-8' />
</head>

<body data-layout="detached" data-topbar="colored">

    {{-- <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper"> --}}

            @include('../website/includes/header')

            @yield('content')

            @include('../website/includes/footer')
            
        {{-- </div>
        <!-- END layout-wrapper -->

    </div> --}}
    @include('../website/includes/scripts')
</body>

</html>
