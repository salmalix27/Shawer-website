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

<!-- ===== Insurance Header ===== -->
<section class="autoHero">
  <div class="autoContainer autoHero__inner">

    <div class="autoHero__left">
      <h1 class="autoHero__title" id="insTitle">Insurance</h1>
      <p class="autoHeroSubtitle" id="inssubtitle">PROTECT YOUR CAR & DRIVE WITH PEACE OF MIND !</p>
      <p class="autoHeroSubtitle2" id="inssubtitle2">We offer the best car insurance plans with competitive prices and comprehensive coverage</p>
       <ul class="mortgageList">
        <li id="insBullet1">Comprehensive or Third-Party Insurance.</li>
        <li id="insBullet2">Fast policy issuance.</li>
        <li id="insBullet3">Quick claims and compensation.</li>
        <li id="insBullet4">Wide network of approved service centers.</li>
        <li id="insBullet5">Best interest rate in the market.</li>.
</ul>

      <a class="autoHero__btn" href="{{ route('home') }}#contact" id="insApplyBtn">APPLY NOW</a>
    </div>

    <div class="autoHero__right">
      <div class="autoHero__imgWrap">
        <img src="{{ asset('img/insurance.png') }}" alt="Automotive">
      </div>
    </div>

  </div>
</section>

@include('partials.footer')

<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/lang.js') }}"></script>
</body>
</html>