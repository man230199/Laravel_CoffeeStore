<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coffee - Free Bootstrap 4 Template by Colorlib</title>
    @include('store.elements.head')
</head>

<body>
    @include('store.elements.nav_bar')

    @yield('content')
    @include('store.elements.footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    @include('store.elements.script')
</body>

</html>
