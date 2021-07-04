<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    @include('partials.styles')
</head>

<body>

    @include('partials.navbar')

    <div class="container mt-5" style="height: 100vh">
       @yield('content-wrapper', 'Welcome Section if nothing in child view...')
    </div>
    <!-- Footer -->

    <!-- Footer Links -->

    @include('partials.footer')
    @include('partials.scripts')

    </footer>
    <!-- Footer -->
</body>

</html>
