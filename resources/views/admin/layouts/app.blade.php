<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #6366f1, #8b5cf6);
            --secondary-gradient: linear-gradient(135deg, #4f46e5, #7c3aed);
            --sidebar-bg: linear-gradient(180deg, #1e293b 0%, #334155 100%);
            --content-bg: #f8fafc;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: var(--content-bg);
            overflow-x: hidden;
        }
        
        /* Sidebar Styling */
        .sidebar {
            height: 100vh;
            width: 260px;
            position: fixed;
            top: 0;
            left: 0;
            background: var(--sidebar-bg);
            color: #fff;
            padding: 0;
            box-shadow: 4px 0 20px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            transition: all 0.3s ease;
        }
        
        .sidebar-header {
            padding: 25px 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            text-align: center;
        }
        
        .sidebar-logo {
            width: 50px;
            height: 50px;
            background: var(--primary-gradient);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            box-shadow: 0 8px 20px rgba(99, 102, 241, 0.3);
        }
        
        .sidebar-logo i {
            font-size: 24px;
            color: white;
        }
        
        .sidebar-title {
            font-size: 20px;
            font-weight: 700;
            color: #fff;
            margin: 0;
        }
        
        .sidebar-subtitle {
            font-size: 12px;
            color: #94a3b8;
            margin-top: 4px;
        }
        
        .sidebar-nav {
            padding: 20px 0;
        }
        
        .sidebar-nav a {
            display: flex;
            align-items: center;
            color: #cbd5e1;
            padding: 16px 24px;
            text-decoration: none;
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
            font-weight: 500;
            font-size: 15px;
        }
        
        .sidebar-nav a:hover {
            background: rgba(255, 255, 255, 0.05);
            color: #fff;
            border-left-color: #6366f1;
            transform: translateX(4px);
        }
        
        .sidebar-nav a.active {
            background: rgba(99, 102, 241, 0.15);
            color: #fff;
            border-left-color: #6366f1;
            box-shadow: inset 0 0 20px rgba(99, 102, 241, 0.1);
        }
        
        .sidebar-nav a i {
            font-size: 18px;
            margin-right: 12px;
            width: 20px;
            text-align: center;
        }
        
        .sidebar-nav a .nav-text {
            flex: 1;
        }
        
        .sidebar-nav a .nav-badge {
            background: var(--primary-gradient);
            color: white;
            font-size: 11px;
            padding: 4px 8px;
            border-radius: 20px;
            font-weight: 600;
        }
        
        /* Main Content Area */
        .main-wrapper {
            margin-left: 260px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
        }
        
        /* Top Navbar */
        .top-navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid #e2e8f0;
            padding: 16px 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .navbar-left {
            display: flex;
            align-items: center;
        }
        
        .navbar-right {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        
        .admin-info {
            display: flex;
            align-items: center;
            background: #f1f5f9;
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 14px;
            color: #475569;
        }
        
        .admin-avatar {
            width: 32px;
            height: 32px;
            background: var(--primary-gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            color: white;
            font-weight: 600;
            font-size: 12px;
        }
        
        .btn-logout {
            background: linear-gradient(135deg, #dc2626, #ef4444);
            color: white;
            border: none;
            border-radius: 25px;
            padding: 8px 20px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(220, 38, 38, 0.3);
        }
        
        .btn-logout:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(220, 38, 38, 0.4);
            color: white;
        }
        
        .btn-logout i {
            margin-right: 6px;
        }
        
        /* Content Area */
        .content {
            flex: 1;
            padding: 32px 24px;
        }
        
        .content-header {
            margin-bottom: 32px;
        }
        
        .page-title {
            font-size: 32px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
        }
        
        .page-title i {
            margin-right: 12px;
            color: #6366f1;
        }
        
        .page-description {
            color: #64748b;
            font-size: 16px;
        }
        
        .content-body {
            background: white;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 1px solid #e2e8f0;
            overflow: hidden;
        }
        
        /* Mobile Responsive */
        @media (max-width: 768px) {
            .sidebar {
                width: 260px;
                transform: translateX(-100%);
            }
            
            .sidebar.show {
                transform: translateX(0);
            }
            
            .main-wrapper {
                margin-left: 0;
            }
            
            .top-navbar {
                padding: 12px 16px;
            }
            
            .content {
                padding: 20px 16px;
            }
            
            .page-title {
                font-size: 24px;
            }
            
            .admin-info {
                display: none;
            }
        }
        
        /* Mobile Menu Toggle */
        .mobile-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 20px;
            color: #475569;
            cursor: pointer;
            padding: 8px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .mobile-toggle:hover {
            background: #f1f5f9;
        }
        
        @media (max-width: 768px) {
            .mobile-toggle {
                display: block;
            }
        }
        
        /* Overlay for mobile */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
        
        @media (max-width: 768px) {
            .sidebar-overlay.show {
                display: block;
            }
        }
        
        /* Animation for content load */
        .content-body {
            animation: fadeInUp 0.5s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">
                <i class="bi bi-lightning-charge-fill"></i>
            </div>
            <h4 class="sidebar-title">Admin Panel</h4>
            <p class="sidebar-subtitle">Management System</p>
        </div>
        
        <div class="sidebar-nav">
            <a href="{{ url('admin/dashboard') }}" 
               class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i>
                <span class="nav-text">Dashboard</span>
            </a>
            
            <a href="{{ url('admin/tentang') }}" 
               class="{{ request()->routeIs('tentang.*') ? 'active' : '' }}">
                <i class="bi bi-building"></i>
                <span class="nav-text">Tentang</span>
            </a>
            
            <a href="{{ url('admin/layanan') }}" 
               class="{{ request()->routeIs('layanan.*') ? 'active' : '' }}">
                <i class="bi bi-tools"></i>
                <span class="nav-text">Layanan</span>
            </a>
            
            <a href="{{ url('admin/portofolio') }}" 
               class="{{ request()->routeIs('portofolio.*') ? 'active' : '' }}">
                <i class="bi bi-images"></i>
                <span class="nav-text">Portofolio</span>
            </a>
            
            <a href="{{ url('admin/kontak') }}" 
               class="{{ request()->routeIs('kontak.*') ? 'active' : '' }}">
                <i class="bi bi-envelope"></i>
                <span class="nav-text">Kontak</span>
            </a>
        </div>
    </div>

    <!-- Overlay for mobile -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Main Content Wrapper -->
    <div class="main-wrapper">
        <!-- Top Navbar -->
        <nav class="top-navbar">
            <div class="navbar-left">
                <button class="mobile-toggle" id="mobileToggle">
                    <i class="bi bi-list"></i>
                </button>
            </div>
            
            <div class="navbar-right">
                <div class="admin-info">
                    <div class="admin-avatar">
                        {{ substr(\App\Models\Admin::find(session('admin_id'))->name ?? 'A', 0, 1) }}
                    </div>
                    <span>
                        <strong>{{ \App\Models\Admin::find(session('admin_id'))->name ?? 'Admin' }}</strong>
                    </span>
                </div>
                
                <form method="POST" action="{{ route('admin.logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-logout">
                        <i class="bi bi-box-arrow-right"></i>
                        Logout
                    </button>
                </form>
            </div>
        </nav>

        <!-- Content -->
        <div class="content">
            <div class="content-header">
                <h1 class="page-title">
                    @yield('page-icon')
                    @yield('page-title', 'Dashboard')
                </h1>
                <p class="page-description">@yield('page-description', 'Kelola sistem administrasi dengan mudah dan efisien')</p>
            </div>
            
            <div class="content-body">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mobile sidebar toggle
        document.getElementById('mobileToggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            
            sidebar.classList.toggle('show');
            overlay.classList.toggle('show');
        });
        
        // Close sidebar when overlay is clicked
        document.getElementById('sidebarOverlay').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            
            sidebar.classList.remove('show');
            overlay.classList.remove('show');
        });
        
        // Close mobile menu when screen size changes
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                const sidebar = document.getElementById('sidebar');
                const overlay = document.getElementById('sidebarOverlay');
                
                sidebar.classList.remove('show');
                overlay.classList.remove('show');
            }
        });
    </script>
</body>
</html>