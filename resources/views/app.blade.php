<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskMVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="{{ asset('LogoIUD.png') }}" rel="icon" type="image/png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .color-container {
            width: 16px;
            height: 16px;
            display: inline-block;
            border-radius: 4px;
        }

        .navbar-light .navbar-brand {
            color: rgba(79, 107, 169, 1);
        }

        #navb {
            background-color: rgba(215, 223, 249, .2) !important;
            text-align: center;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav id="navb" class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <a class="navbar-brand" href="{{ route('todos-store') }}">Todos </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ str_contains('todos', Route::current()->getName()) ? 'active' : '' }}"
                            href="{{ route('todos-store') }}">Tareas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ str_contains('categories', Route::current()->getName()) ? 'active' : '' }}"
                            href="{{ route('categories.index') }}">Categorias</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>
