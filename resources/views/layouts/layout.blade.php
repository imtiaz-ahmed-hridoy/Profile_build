<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body >



    {{-- Website_Navbar --}}

    <header>
        @yield('navbar')
    </header>

    {{-- Website_Mainbody --}}
    <main>
        @yield('body')
    </main>

    {{-- Website_Customizer --}}
    <section>
        @yield('customizer')
    </section>
    {{-- Website_Footer --}}
    <footer>
        @yield('footer')
    </footer>


</body>

</html>
