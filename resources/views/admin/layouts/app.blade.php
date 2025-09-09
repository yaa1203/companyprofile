<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            height: 100vh;
            width: 220px;
            position: fixed;
            top: 0;
            left: 0;
            background: #343a40;
            color: #fff;
            padding-top: 20px;
        }
        .sidebar a {
            display: block;
            color: #ddd;
            padding: 12px 20px;
            text-decoration: none;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background: #495057;
            color: #fff;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
        }
        .sidebar .active {
            background: #0d6efd;
            color: #fff !important;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center text-light mb-4">⚡ Admin Panel</h4>
        
        <a href="{{ url('home') }}" 
           class="{{ request()->routeIs('home') ? 'active' : '' }}">
           📊 Dashboard
        </a>
        
        <a href="{{ url('tentang') }}" 
           class="{{ request()->routeIs('tentang.*') ? 'active' : '' }}">
           🏢 Tentang
        </a>
        
        <a href="{{ url('layanan') }}" 
           class="{{ request()->routeIs('layanan.*') ? 'active' : '' }}">
           🛠️ Layanan
        </a>
        
        <a href="{{ url('portofolio') }}" 
           class="{{ request()->routeIs('portofolio.*') ? 'active' : '' }}">
           🖼️ Portofolio
        </a>
        
        <a href="{{ url('kontak') }}" 
           class="{{ request()->routeIs('kontak.*') ? 'active' : '' }}">
           📩 Kontak
        </a>
    </div>

    <!-- Konten -->
    <div class="content">
        <h2>@yield('page-title')</h2>
        <hr>
        @yield('content')
    </div>
</body>
</html>
