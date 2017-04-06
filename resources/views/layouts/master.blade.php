<!DOCTYPE html>
<html>

    <header>
        <title>
            @yield('title', 'bmi')
        </title>

        <meta charset='utf-8'>
        <link href='/css/app.css' type='text/css' rel='stylesheet'>

        @stack('head')

    </header>
    <body>
        <div class="container">
            <header>
                <img
                    src='/img/bmi.png'
                    alt='BMI Logo'>
            </header>
            <article>
                <section>
                    @yield('content')
                </section>
            </article>
            <footer>
                <hr>
                Amir Mokhtar &copy; {{ date('Y') }}
                <BR>
                <a href="https://github.com/amokhtar78/assignment3">GitHub Repository</a>
            </footer>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

            @stack('body')
        </div>
    </body>
</html>
