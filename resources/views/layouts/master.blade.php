<!DOCTYPE html>
<html>

    <header>
        <title>
            @yield('title', 'bmi')
        </title>

        <meta charset='utf-8'>
        <link href='/css/app.css' type='text/css' rel='stylesheet'>

        @stack('header')

    </header>
    <body>
        <div class="container">
            <header>
                <img
                    src='/img/bmi.png'
                    alt='BMI Logo'>
                <h1>Body Mass Index Calculator</h1>
            </header>
            <nav>
                @yield('nav')
            </nav>
            <article>
                <section>
                    @yield('content')
                </section>
            </article>
            <footer>
                Amir Mokhtar &copy; {{ date('Y') }}
                <BR>
                <a href="https://github.com/amokhtar78/assignment3">GitHub Repository</a>
            </footer>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

            @stack('body')
        </div>
    </body>
</html>
