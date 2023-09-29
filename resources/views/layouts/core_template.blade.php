<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>@yield('title', 'Título predeterminado')</title>
    <!-- Agrega tus enlaces a hojas de estilo, scripts, etc. aquí -->
</head>
<body>
    <header>
        <!-- Encabezado común -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Pie de página común -->
    </footer>
</body>
</html>
