<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
 
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>

  <div class="admin-login">
    <form method="POST" action="{{ route('admin.login') }}" class="admin-card">
      @csrf

      <h2 class="admin-title">Admin Login</h2>

      @if ($errors->any())
        <div class="admin-error">
          {{ $errors->first() }}
        </div>
      @endif

      <div class="admin-field">
        <label for="email" class="admin-label">Email</label>
        <input
          id="email"
          class="admin-input"
          type="email"
          name="email"
          required
          autocomplete="off"
        >
      </div>

      <div class="admin-field">
        <label for="password" class="admin-label">Password</label>
        <input
          id="password"
          class="admin-input"
          type="password"
          name="password"
          required
          autocomplete="new-password"
        >
      </div>

      <button type="submit" class="admin-btn">Login</button>
      <a href="{{ route('home') }}"class="admin-back" >back to site</a>
    </form>
  </div>

</body>
</html>