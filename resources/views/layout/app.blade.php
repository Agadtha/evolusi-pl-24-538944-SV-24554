<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body>

    <!-- Navbar -->

    <nav>

        <h1>MyBrand</h1>

        <div>

            <a href="/">Home</a>

            <a href="/about">Tentang</a>

            <a href="/contact">Kontak</a>

        </div>

    </nav>


    <!-- Content -->

    <main>

        @yield('content')

    </main>


    <!-- Footer -->

    <footer>

        <p>
            © 2026 MyBrand
        </p>

    </footer>


</body>

</html>