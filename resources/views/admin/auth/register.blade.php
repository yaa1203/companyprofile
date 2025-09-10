<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Admin - MyCompany</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #6366f1, #8b5cf6);
            --secondary-gradient: linear-gradient(135deg, #4f46e5, #7c3aed);
        }
        
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }
        
        /* Animated background elements */
        .bg-animation {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: -1;
            overflow: hidden;
        }
        
        .bg-blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(60px);
            opacity: 0.6;
            animation: float 20s infinite ease-in-out;
        }
        
        .blob-1 {
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            top: -150px;
            left: -150px;
            animation-delay: 0s;
        }
        
        .blob-2 {
            width: 400px;
            height: 400px;
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
            bottom: -200px;
            right: -200px;
            animation-delay: 5s;
        }
        
        .blob-3 {
            width: 250px;
            height: 250px;
            background: linear-gradient(135deg, #8b5cf6, #a78bfa);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation-delay: 10s;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }
            25% {
                transform: translate(30px, -30px) scale(1.1);
            }
            50% {
                transform: translate(-20px, 20px) scale(0.9);
            }
            75% {
                transform: translate(15px, 15px) scale(1.05);
            }
        }
        
        .register-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 450px;
            transform: translateY(0);
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .register-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.15);
        }
        
        .register-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .register-icon {
            width: 70px;
            height: 70px;
            background: var(--primary-gradient);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 10px 20px rgba(99, 102, 241, 0.3);
        }
        
        .register-icon i {
            font-size: 32px;
            color: white;
        }
        
        .register-title {
            font-size: 28px;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 10px;
        }
        
        .register-subtitle {
            color: #64748b;
            font-size: 16px;
        }
        
        .form-floating {
            margin-bottom: 20px;
        }
        
        .form-control, .form-select {
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            padding: 14px 16px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }
        
        .form-label {
            color: #475569;
            font-weight: 500;
        }
        
        .btn-register {
            background: var(--secondary-gradient);
            color: white;
            border: none;
            border-radius: 12px;
            padding: 14px 24px;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
        }
        
        .btn-register:active {
            transform: translateY(0);
        }
        
        .btn-register::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 5px;
            height: 5px;
            background: rgba(255, 255, 255, 0.5);
            opacity: 0;
            border-radius: 100%;
            transform: scale(1, 1) translate(-50%);
            transform-origin: 50% 50%;
        }
        
        .btn-register:focus:not(:active)::after {
            animation: ripple 1s ease-out;
        }
        
        @keyframes ripple {
            0% {
                transform: scale(0, 0);
                opacity: 0.5;
            }
            20% {
                transform: scale(25, 25);
                opacity: 0.3;
            }
            100% {
                opacity: 0;
                transform: scale(40, 40);
            }
        }
        
        .alert {
            border-radius: 12px;
            border: none;
            margin-bottom: 20px;
        }
        
        .alert-danger {
            background-color: #fef2f2;
            color: #dc2626;
        }
        
        .alert-success {
            background-color: #f0fdf4;
            color: #16a34a;
        }
        
        .alert i {
            margin-right: 8px;
        }
        
        .register-footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e2e8f0;
        }
        
        .register-footer a {
            color: #6366f1;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .register-footer a:hover {
            color: #4f46e5;
        }
        
        .form-floating > label {
            padding: 14px 16px;
        }
        
        .password-strength {
            margin-top: 5px;
            height: 4px;
            border-radius: 2px;
            background-color: #e2e8f0;
            overflow: hidden;
        }
        
        .password-strength-bar {
            height: 100%;
            width: 0;
            transition: all 0.3s ease;
            border-radius: 2px;
        }
        
        .password-strength-text {
            font-size: 12px;
            margin-top: 5px;
            font-weight: 500;
        }
        
        .weak {
            background-color: #ef4444;
            width: 33%;
        }
        
        .medium {
            background-color: #f59e0b;
            width: 66%;
        }
        
        .strong {
            background-color: #10b981;
            width: 100%;
        }
        
        @media (max-width: 576px) {
            .register-container {
                padding: 30px 20px;
            }
            
            .register-title {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <!-- Animated background -->
    <div class="bg-animation">
        <div class="bg-blob blob-1"></div>
        <div class="bg-blob blob-2"></div>
        <div class="bg-blob blob-3"></div>
    </div>

    <!-- Register container -->
    <div class="register-container">
        <div class="register-header">
            <div class="register-icon">
                <i class="bi bi-person-plus-fill"></i>
            </div>
            <h2 class="register-title">Daftar Admin</h2>
            <p class="register-subtitle">Buat akun administrasi baru untuk MyCompany</p>
        </div>

        <!-- Alert messages -->
        @if(session('error'))
            <div class="alert alert-danger d-flex align-items-center">
                <i class="bi bi-exclamation-circle-fill"></i>
                <div>{{ session('error') }}</div>
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success d-flex align-items-center">
                <i class="bi bi-check-circle-fill"></i>
                <div>{{ session('success') }}</div>
            </div>
        @endif

        <!-- Register form -->
        <form method="POST" action="{{ url('admin/register') }}">
            @csrf
            <div class="form-floating">
                <input type="text" id="name" name="name" class="form-control" 
                       value="{{ old('name') }}" placeholder="Nama Lengkap" required>
                <label for="name">Nama Lengkap</label>
                @error('name')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-floating">
                <input type="email" id="email" name="email" class="form-control" 
                       value="{{ old('email') }}" placeholder="Email Admin" required>
                <label for="email">Email Admin</label>
                @error('email')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-floating">
                <input type="password" id="password" name="password" class="form-control" 
                       placeholder="Kata Sandi" required>
                <label for="password">Kata Sandi</label>
                @error('password')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
                <div class="password-strength">
                    <div class="password-strength-bar"></div>
                </div>
                <div class="password-strength-text"></div>
            </div>
            
            <div class="form-floating">
                <input type="password" id="password_confirmation" name="password_confirmation"
                       class="form-control" placeholder="Konfirmasi Kata Sandi" required>
                <label for="password_confirmation">Konfirmasi Kata Sandi</label>
            </div>
            
            <button type="submit" class="btn btn-register">
                <i class="bi bi-person-plus me-2"></i> Daftar
            </button>
        </form>
        
        <div class="register-footer">
            <p class="mb-0">Sudah punya akun? <a href="{{ route('admin.login') }}">Masuk</a></p>
        </div>
    </div>

    <script>
        // Password strength checker
        const passwordInput = document.getElementById('password');
        const strengthBar = document.querySelector('.password-strength-bar');
        const strengthText = document.querySelector('.password-strength-text');
        
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            
            // Check password length
            if (password.length >= 8) strength++;
            
            // Check for uppercase letters
            if (/[A-Z]/.test(password)) strength++;
            
            // Check for numbers
            if (/[0-9]/.test(password)) strength++;
            
            // Check for special characters
            if (/[^A-Za-z0-9]/.test(password)) strength++;
            
            // Update strength bar and text
            strengthBar.className = 'password-strength-bar';
            strengthText.textContent = '';
            
            if (password.length > 0) {
                if (strength <= 1) {
                    strengthBar.classList.add('weak');
                    strengthText.textContent = 'Kata sandi lemah';
                    strengthText.style.color = '#ef4444';
                } else if (strength === 2) {
                    strengthBar.classList.add('medium');
                    strengthText.textContent = 'Kata sandi sedang';
                    strengthText.style.color = '#f59e0b';
                } else {
                    strengthBar.classList.add('strong');
                    strengthText.textContent = 'Kata sandi kuat';
                    strengthText.style.color = '#10b981';
                }
            }
        });
    </script>
</body>
</html>