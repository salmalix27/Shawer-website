<!-- ================= NAVBAR ================= -->
<header class="nav">
  <div class="container nav__inner">
 
    <div class="nav__left">
      <a class="brand" href="{{ route('home') }}">
        <img class="brand__img" src="{{ asset('img/logo.png') }}" alt="Shawer Logo">
      </a>
      <span class="nav__divider" aria-hidden="true"></span>
    <nav class="menu" id="menu">
  <a class="menu__link {{ request()->routeIs('home') ? 'is-active' : '' }}" href="{{ route('home') }}">Home</a>

  <a class="menu__link {{ request()->routeIs('about') ? 'is-active' : '' }}" href="{{ route('about') }}">About us</a>

  <a class="menu__link {{ request()->routeIs('products') ? 'is-active' : '' }}" href="{{ route('products') }}">Products</a>

  <a class="menu__link {{ request()->routeIs('cars') ? 'is-active' : '' }}" href="{{ route('cars') }}">Cars for sale</a>
</nav>
    </div>
 
 <div class="nav__right">
  <button class="burger" id="burger" aria-label="Toggle menu">☰</button>
  <a class="btn btn--navContact" id=navContact href="#footer">Contact Us</a>
    <button class="langToggle" id="langToggle" type="button">EN</button>
</div>

  </div>
</header>