<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Automotive - Shawer</title>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  @include('partials.meta-pixel')
</head>
<body class="theme-blue">

@include('partials.navbar')

<!-- ===== Automotive Header ===== -->
<section class="autoHero">
  <div class="autoContainer autoHero__inner">

    <div class="autoHero__left">
      <h1 class="autoHero__title" id="autoPageTitle">Automotive</h1>

      <p class="autoHero__desc" id="autoPageDesc">
        We simplify the process and offer flexible payment options.
        From application to approval, Shawer with you in every step.
      </p>

      <a class="autoHero__btn" href="{{ route('home') }}#contact" id="autoPageApplyBtn">APPLY NOW</a>
    </div>

    <div class="autoHero__right">
      <div class="autoHero__imgWrap">
        <img src="{{ asset('img/AutomotivePage.png') }}" alt="Automotive">
      </div>
    </div>

  </div>
</section>

<section class="autoCategories">
  <div class="autoContainer">

    <div class="autoGrid">
      <a class="autoCard autoCard--a" href="{{ route('BrandNewCars') }}">
        <img src="{{ asset('img/BrandNewCar.png') }}" alt="Brand New Cars">
        <div class="autoCard__label" id="autoBrandNewLabel">BRAND NEW CARS</div>
      </a>

      <a class="autoCard autoCard--b autoCard--big" href="{{ route('usedCars') }}">
        <img src="{{ asset('img/UsedCars.png') }}" alt="Used Cars">
        <div class="autoCard__label" id="autoUsedLabel">USED CARS</div>
      </a>

      <a class="autoCard autoCard--c" href="{{ route('transportation') }}">
        <img src="{{ asset('img/transportation.png') }}" alt="Transportation">
        <div class="autoCard__label" id="autoTransportLabel">TRANSPORTATION</div>
      </a>

      <a class="autoCard autoCard--e" href="{{ route('vans') }}">
        <img src="{{ asset('img/vans.png') }}" alt="Vans">
        <div class="autoCard__label" id="autoVansLabel">VANS</div>
      </a>
    </div>

  </div>
</section>

@include('partials.footer')

<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/lang.js') }}"></script>
</body>
</html>