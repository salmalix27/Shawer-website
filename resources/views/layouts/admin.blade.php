<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
  <header class="adminTopbar">
    <a href="{{ route('admin.dashboard') }}" class="adminLogo">SHAWER ADMIN</a>
    <nav class="adminNav">
      <a href="{{ route('admin.dashboard') }}">Dashboard</a>
      <a href="{{ route('admin.applications') }}">Applications</a>
      <a href="{{ route('admin.cars') }}">Cars</a>
     

      <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button class="adminLogout" type="submit">Logout</button>
      </form>
    </nav>
  </header>

  <main class="adminMain">
    @yield('content')
  </main>
</body>
</html>