<!DOCTYPE html>
<html>
<head>
    <title>Manajemen Siswa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Manajemen Siswa</a>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <footer class="text-center mt-4 mb-4 text-muted">
        <small>&copy; {{ date('Y') }} Aplikasi Manajemen Siswa</small>
    </footer>
</body>
</html>
 