<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}
    <title>@yield('title')</title>
</head>
<body>
    <header>
         <nav>
            <div class="menu">
                <a href="/">Escuela</a>
                <div class="menu-items">
                    <ul class="items">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('cursos.index') }}">Cursos</a></li>
                        <li><a href="{{ route('nosotros') }}">Nosotros</a></li>
                    </ul>
                </div>
            </div>
         </nav>
    </header>
    @yield('content')
</body>
</html>