<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home Finishing - Shawer</title>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  @include('partials.meta-pixel')
</head>
<body>

@include('partials.navbar')

<!-- ===== Gold Header ===== -->
<section class="autoHero">
  <div class="autoContainer autoHero__inner">

    <div class="autoHero__left">
      <h1 class="autoHero__title" id="goldTitle">Gold</h1>
  <p class="mortgageSubtitle" id="goldSubtitle">Premium Benefits. Smart Investment.</p>
      <ul class="mortgageList">
        <li id="goldBullet1">Zero Down Payment.</li>
        <li id="goldBullet2">Up to 2 years.</li>
        <li id="goldBullet3">Up to 3 million.</li>.
</ul>

      <a class="autoHero__btn" href="{{ route('home') }}#contact" id="goldApplyBtn">APPLY NOW</a>
    </div>

    <div class="autoHero__right">
      <div class="autoHero__imgWrap">
        <img src="{{ asset('img/gold.png') }}" alt="Automotive">
      </div>
    </div>

  </div>
</section>

@include('partials.footer')

<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/lang.js') }}"></script>
</body>
</html>