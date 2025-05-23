<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh; /* Make sidebar full height */
            background-color: #343a40;
            color: white;
            padding-top: 20px;
            position: fixed; /* Fix the sidebar */
            top: 0;
            left: 0;
            width: 250px; /* Set a fixed width */
        }
        .sidebar a {
            padding: 12px 16px; /* Increased padding */
            color: white;
            text-decoration: none;
            display: block;
            transition: background-color 0.3s; /* Added transition */
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .sidebar i {
            margin-right: 8px; /* Added spacing for icons */
        }
        main {
            margin-left: 250px; /* Add margin to main content */
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky">
                    <a href="{{ route('dashboard.index') }}" class="d-block text-white text-decoration-none">
                        <i class="fas fa-home"></i> Dashboard
                    </a>
                    <a href="{{ route('siswa.index') }}" class="d-block text-white text-decoration-none">
                        <i class="fas fa-users"></i> Siswa
                    </a>
                    <a href="{{ route('siswa.create') }}" class="d-block text-white text-decoration-none">
                        <i class="fas fa-plus"></i> Tambah Siswa
                    </a>
                    <!-- Tambahkan menu lain sesuai kebutuhan -->
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
