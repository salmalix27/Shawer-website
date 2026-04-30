<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Automotive - Shawer</title>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  @include('partials.meta-pixel')
</head>
<body class="theme-blue summerVehiclesPage">

@include('partials.navbar')

<!-- ===== Summer Vehicles Header ===== -->
<section class="autoHero">
  <div class="autoContainer autoHero__inner">

    <div class="autoHero__left">
      <h1 class="autoHero__title" id="svTitle">Summer Vehicles</h1>

        <ul class="mortgageList">
        <li id="svBullet1">Zero Down Payment.</li>
        <li id="svBullet2">Up to 5 years.</li>
     </ul>

      <a class="autoHero__btn" href="{{ route('home') }}#contact" id="svApplyBtn">APPLY NOW</a>
    </div>

    <div class="autoHero__right">
      <div class="autoHero__imgWrap">
        <img src="{{ asset('img/summer_vehicles.png') }}" alt="Automotive">
      </div>
    </div>

  </div>
</section>

<section class="autoCategories">
  <div class="autoContainer">

    <div class="autoGrid">
      <a class="autoCard autoCard--a" href="#">
        <img src="{{ asset('img/yacht.png') }}" alt="Brand New Cars">
        <div class="autoCard__label" id="svYacht">YACHT</div>
      </a>

      <a class="autoCard autoCard--b autoCard--big" href="#">
        <img src="{{ asset('img/beachBuggy.png') }}" alt="Used Cars">
        <div class="autoCard__label" id="svBeachBuggy">BEACH BUGGY</div>
      </a>

      <a class="autoCard autoCard--c" href="#">
        <img src="{{ asset('img/golfCar.png') }}" alt="Transportation">
        <div class="autoCard__label" id="svGolfCar">GOLF CAR</div>
      </a>

      <a class="autoCard autoCard--e" href="#">
        <img src="{{ asset('img/jetSki.png') }}" alt="Vans">
        <div class="autoCard__label" id="svJetSki">JET SKI</div>
      </a>

      <a class="autoCard autoCard--e" href="#">
        <img src="{{ asset('img/boat.png') }}" alt="boat">
        <div class="autoCard__label" id="svBoat">BOAT</div>
      </a>
    </div>

  </div>
</section>

@include('partials.footer')

<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/lang.js') }}"></script>
</body>
</html>