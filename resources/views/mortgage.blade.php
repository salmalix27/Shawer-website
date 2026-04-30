<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mortgage - Shawer</title>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  @include('partials.meta-pixel')
</head>
<body>

@include('partials.navbar')

<main class="mortgagePage">

  <div class="mortgageContainer">
    <h1 class="mortgageTitle" id="mortgageTitle">Mortgage</h1>
  <p class="mortgageSubtitle" id="mortgageSubtitle">UNLOCK THE DOOR TO YOUR FUTURE HOME.</p>

    <div class="mortgageBanner">
      <img src="{{ asset('img/mortgage.png') }}" alt="Mortgage banner">
    </div>

    <!-- Block 1 -->
    <section class="mortgageBlock">
      <div class="mortgageCard">
        <h2 class="mortgageCard__title" id="mortgageBlock1Title">Unit Purchasing</h2>

        <ul class="mortgageList">
          <li id="mortgageB1_1">Zero Down Payment.</li>
          <li id="mortgageB1_2">Up to 12 years.</li>
          <li id="mortgageB1_3">Up to Rate 14%.</li>
        </ul>

        <a class="mortgageBtn" href="{{ route('home') }}#contact" id="mortgageApply1">APPLY NOW</a>
      </div>

      <div class="mortgageImg">
        <img src="{{ asset('img/buying.png') }}" alt="Buying mortgage">
      </div>
    </section>

    <!-- Block 2 (reverse) -->
    <section class="mortgageBlock mortgageBlock--reverse">
      <div class="mortgageCard">
        <h2 class="mortgageCard__title" id="mortgageBlock2Title">Sell & Lease Back</h2>

        <ul class="mortgageList">
          <li id="mortgageB2_1">Up to 80% from unit.</li>
          <li id="mortgageB2_2">Up to 12 years.</li>
          <li id="mortgageB2_3">Up to Rate 16%.</li>
        </ul>

        <a class="mortgageBtn" href="{{ route('home') }}#contact" id="mortgageApply2">APPLY NOW</a>
      </div>

      <div class="mortgageImg">
        <img src="{{ asset('img/fromUnit.png') }}" alt="From unit mortgage">
      </div>
    </section>

  </div>
</main>

@include('partials.footer')
<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/lang.js') }}"></script>
</body>
</html>