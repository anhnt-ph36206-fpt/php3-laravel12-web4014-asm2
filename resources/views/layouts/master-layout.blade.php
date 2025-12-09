<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Shop')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('products.index') }}">
                <img src="{{ asset('/assets/img/cellphones.png') }}" alt="logo" width="35" class="me-2">
                <span style="color:white;font-size:22px;font-weight:bold;">MyShop</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header / Search -->
    <header class="bg-light py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="h3 mb-0">@yield('header', 'Welcome to MyShop')</h1>
            <!-- Search Form -->
            @include('layouts.form')
        </div>
    </header>

    <!-- Main Content -->
    <main class="py-5">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-auto">
        <div class="container text-center">
            <p class="mb-0">&copy; {{ date('Y') }} MyShop. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
