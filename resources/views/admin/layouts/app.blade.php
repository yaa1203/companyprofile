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
        .sidebar .active {
            background: #0d6efd;
            color: #fff !important;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
        }
        .navbar-custom {
            margin-left: 220px;
            background: #f8f9fa;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center text-light mb-4">⚡ Admin Panel</h4>
        
        <a href="{{ url('admin/dashboard') }}" 
           class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
           📊 Dashboard
        </a>
        
        <a href="{{ url('admin/tentang') }}" 
           class="{{ request()->routeIs('tentang.*') ? 'active' : '' }}">
           🏢 Tentang
        </a>
        
        <a href="{{ url('admin/layanan') }}" 
           class="{{ request()->routeIs('layanan.*') ? 'active' : '' }}">
           🛠️ Layanan
        </a>
        
        <a href="{{ url('admin/portofolio') }}" 
           class="{{ request()->routeIs('portofolio.*') ? 'active' : '' }}">
           🖼️ Portofolio
        </a>
        
        <a href="{{ url('admin/kontak') }}" 
           class="{{ request()->routeIs('kontak.*') ? 'active' : '' }}">
           📩 Kontak
        </a>
    </div>

    <!-- Navbar atas -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom px-3">
        <div class="container-fluid">
            <span class="navbar-text me-auto">
                Selamat datang, 
                <strong>
                    {{ \App\Models\Admin::find(session('admin_id'))->name ?? 'Admin' }}
                </strong>
            </span>
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button type="submit" class="btn btn-outline-danger btn-sm">
                    Logout
                </button>
            </form>
        </div>
    </nav>

    <!-- Konten -->
    <div class="content">
        <h2>@yield('page-title')</h2>
        <hr>
        @yield('content')
    </div>
</body>
</html>
