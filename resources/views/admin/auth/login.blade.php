<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

    <div class="card shadow-lg p-4" style="width: 380px;">
        <h3 class="text-center mb-3">🔐 Login Admin</h3>

        {{-- Pesan error umum --}}
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        {{-- Pesan sukses (misal setelah register) --}}
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ url('admin/login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email Admin</label>
                <input type="email" id="email" name="email" class="form-control"
                       value="{{ old('email') }}" required autofocus>
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" id="password" name="password" class="form-control" required>
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>

            <p class="text-center mt-3 mb-0">
                Belum punya akun? <a href="{{ route('admin.register') }}">Register</a>
            </p>
        </form>
    </div>

</body>
</html>
