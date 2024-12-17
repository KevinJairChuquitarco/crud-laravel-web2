<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Animales')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('animales.index') }}">
            <img src="https://www.animal-ethics.org/wp-content/uploads/Eastern-gray-squirrel.jpg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Gestión Animales
          </a>
        </div>
    </nav>
    <main class="container">
        @yield('content')
    </main>
</body>
</html>