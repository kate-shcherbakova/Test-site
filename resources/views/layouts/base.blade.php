<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/main.css">
    <title>@yield('title')</title>
</head>
<body>
    @section('header')
        <header>
            <nav>
                <ul class="ul_header">
                </ul>
                <ul class="ul_header">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/passengers">Passengers</a>
                    </li>
                    <li>
                        <a href="/tickets">Tickets</a>
                    </li>
                </ul>
                <ul class="ul_header ul_last">
                    <li class="li_right">
                        <a class="a_logout" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
        </header>
    @show

    @section('table')
    @show

    @yield('content')

</body>
</html>
