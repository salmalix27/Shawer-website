<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Transportation- Shawer</title>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  @include('partials.meta-pixel')
</head>
<body>

@include('partials.navbar')

<!-- ===== Transportation Header ===== -->
<section class="autoHero">
  <div class="autoContainer autoHero__inner">

    <div class="autoHero__left">
      <h1 class="autoHero__title" id="trTitle">Transportation</h1>

      <ul class="mortgageList">
        <li id="trBullet1">20% Down Payment.</li>
        <li id="trBullet2">Up to 5 years.</li>
        <li id="trBullet3">Insurance (Your Choice).</li>
      </ul>

      <a class="autoHero__btn" href="{{ route('home') }}#contact" id="trApplyBtn">APPLY NOW</a>
    </div>

    <div class="autoHero__right">
      <div class="autoHero__imgWrap">
        <img src="{{ asset('img/transHeader.png') }}" alt="Automotive">
      </div>
    </div>

  </div>
</section>

<section class="autoCategories">
  <div class="autoContainer">

    <div class="autoGrid">
      <a class="autoCard autoCard--b autoCard--big">
        <img src="{{ asset('img/bus.png') }}" alt="Bus">
        <div class="autoCard__label" id="trBus">BUS</div>
      </a>

      <a class="autoCard autoCard--c" href="#">
        <img src="{{ asset('img/coaster.png') }}" alt="Coaster">
        <div class="autoCard__label" id="trCoaster">COASTER</div>
      </a>

      <a class="autoCard autoCard--e" href="#">
        <img src="{{ asset('img/microbus.png') }}" alt="Microbus">
        <div class="autoCard__label" id="trMicrobus">MICROBUS</div>
      </a>

      <a class="autoCard autoCard--e" href="#">
        <img src="{{ asset('img/truck.png') }}" alt="Truck">
        <div class="autoCard__label" id="trTruck">TRUCK</div>
      </a>

      <a class="autoCard autoCard--e" href="#">
        <img src="{{ asset('img/pickup.png') }}" alt="Pickup">
        <div class="autoCard__label" id="trPickup">PICKUP</div>
      </a>

      <a class="autoCard autoCard--e" href="#">
        <img src="{{ asset('img/trailer_head.png') }}" alt="Trailer head">
        <div class="autoCard__label" id="trTrailerHead">TRAILER HEAD</div>
      </a>

      <a class="autoCard autoCard--e" href="#">
        <img src="{{ asset('img/trailer_tail.png') }}" alt="Trailer tail">
        <div class="autoCard__label" id="trTrailerTail">TRAILER TAIL</div>
      </a>
    </div>

  </div>
</section>

{{-- CALCULATOR --}}
 <section class="carDCalcWrap">
<div class="bncCalc">
  <div class="bncCalc__head" id="trCalcHead">CAR LOAN CALCULATOR</div>

  <div class="bncCalc__body">
    <div class="bncField">
      <label class="bncLabel" id="trLabelPrice">PRICE OF CAR</label>
                    <input
      class="bncInput js-price-comma"
      type="text"
      id="carPrice"
      placeholder="e.g. 200,000"
      inputmode="numeric"
      data-max="6000000"
    >
    </div>

    <div class="bncField">
      <label class="bncLabel" id="trLabelDown">DOWN PAYMENT</label>
                   <input
      class="bncInput js-price-comma"
      type="text"
      id="downPayment"
      placeholder="e.g. 20,000"
      inputmode="numeric"
    >
    </div>

    <div class="bncField">
      <label class="bncLabel" id="trLabelYears">PERIOD (YEARS)</label>
      <input class="bncInput" type="number" id="years" placeholder="5" min="1">
    </div>

    <div class="bncField">
      <label class="bncLabel" id="trLabelInterest">INTEREST (% P.A.)</label>
      <input class="bncInput" type="number" id="interest" value="19" disabled>
    </div>

    <button class="btn bncCalcBtn" id="calcBtn" type="button">
      <span id="trCalcBtnText">CALCULATE</span>
    </button>

    <div class="bncResults">
      <div class="bncResultRow">
        <span id="trMonthlyLabel">MONTHLY INSTALLMENT</span>
        <b id="monthly">0</b>
      </div>
      <div class="bncResultRow">
        <span id="trLoanLabel">LOAN AMOUNT</span>
        <b id="loanAmount">0</b>
      </div>
      <div class="bncResultRow">
        <span id="trInterestLabel">TOTAL INTEREST PAID</span>
        <b id="totalInterest">0</b>
      </div>
    </div>
  </div>
</div>
</section>

@include('partials.footer')

<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/lang.js') }}"></script>
</body>
</html>