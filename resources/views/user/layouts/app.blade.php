<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'MyCompany')</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Navbar -->
  <header class="bg-white shadow-md">
    <div class="container mx-auto flex justify-between items-center p-4">
      <h1 class="text-2xl font-bold text-indigo-600">MyCompany</h1>
      <nav>
        <ul class="flex space-x-6">
          <li><a href="/" class="hover:text-indigo-600">Home</a></li>
          <li><a href="{{url('about')}}" class="hover:text-indigo-600">About</a></li>
          <li><a href="{{url('service')}}" class="hover:text-indigo-600">Services</a></li>
          <li><a href="{{url('portfolio')}}" class="hover:text-indigo-600">Portfolio</a></li>
          <li><a href="{{url('contact')}}" class="hover:text-indigo-600">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Content -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-gray-800 text-gray-300 py-6 text-center">
    <p>&copy; 2025 MyCompany. All rights reserved.</p>
  </footer>

</body>
</html>
