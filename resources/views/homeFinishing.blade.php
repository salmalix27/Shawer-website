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

<!-- ===== Home Finishing Header ===== -->
<section class="autoHero">
  <div class="autoContainer autoHero__inner">

    <div class="autoHero__left">
      <h1 class="autoHero__title" id="hfTitle">Home Finishing</h1>

     <ul class="mortgageList">
        <li id="hfBullet1">Zero Down Payment.</li>
        <li id="hfBullet2">Up to 5 years.</li>
        <li id="hfBullet3">Up to 6 million.</li>.
</ul>

      <a class="autoHero__btn" href="{{ route('home') }}#contact" id="hfApplyBtn">APPLY NOW</a>
    </div>

    <div class="autoHero__right">
      <div class="autoHero__imgWrap">
        <img src="{{ asset('img/Home_finishing.png') }}" alt="Automotive">
      </div>
    </div>

  </div>
</section>

@include('partials.footer')

<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/lang.js') }}"></script>
</body>
</html>