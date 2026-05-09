<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Van- Shawer</title>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  @include('partials.meta-pixel')
</head>
<body>

@include('partials.navbar')

<!-- ===== Van Header ===== -->
<section class="autoHero">
  <div class="autoContainer autoHero__inner">

    <div class="autoHero__left">
      <h1 class="autoHero__title" id="vanTitle">Van</h1>

      <ul class="mortgageList">
        <li id="vanBullet1">30% Down Payment.</li>
        <li id="vanBullet2">Up to 7 years.</li>
      </ul>

      <a class="autoHero__btn" href="{{ route('home') }}#contact" id="vanApplyBtn">APPLY NOW</a>
    </div>

    <div class="autoHero__right">
      <div class="autoHero__imgWrap">
        <img src="{{ asset('img/vansHeader.png') }}" alt="Automotive">
      </div>
    </div>

  </div>
</section>

<section class="autoCategories">
  <div class="autoContainer">

    <div class="autoGrid">
      <a class="autoCard autoCard--b autoCard--big">
        <img src="{{ asset('img/suzuki.png') }}" alt="Suzuki">
        <div class="autoCard__label" id="vanSuzuki">SUZUKI</div>
      </a>

      <a class="autoCard autoCard--c" href="#">
        <img src="{{ asset('img/chevorlate.png') }}" alt="Chevrolet">
        <div class="autoCard__label" id="vanChevrolet">CHEVORLATE</div>
      </a>

      <a class="autoCard autoCard--e" href="#">
        <img src="{{ asset('img/kyc.png') }}" alt="KYC">
        <div class="autoCard__label" id="vanKyc">KYC</div>
      </a>
    </div>

  </div>
</section>

{{-- CALCULATOR --}}
 <section class="carDCalcWrap">
<div class="bncCalc">
  <div class="bncCalc__head" id="vanCalcHead">CAR LOAN CALCULATOR</div>

  <div class="bncCalc__body">
    <div class="bncField">
      <label class="bncLabel" id="vanLabelPrice">PRICE OF CAR</label>
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
      <label class="bncLabel" id="vanLabelDown">DOWN PAYMENT</label>
                       <input
      class="bncInput js-price-comma"
      type="text"
      id="downPayment"
      placeholder="e.g. 20,000"
      inputmode="numeric"
    >
    </div>

    <div class="bncField">
      <label class="bncLabel" id="vanLabelYears">PERIOD (YEARS)</label>
      <input class="bncInput" type="number" id="years" placeholder="5" min="1">
    </div>

    <div class="bncField">
      <label class="bncLabel" id="vanLabelInterest">INTEREST (% P.A.)</label>
      <input class="bncInput" type="number" id="interest" value="21" disabled>
    </div>

    <button class="btn bncCalcBtn" id="calcBtn" type="button">
      <span id="vanCalcBtnText">CALCULATE</span>
    </button>

    <div class="bncResults">
      <div class="bncResultRow">
        <span id="vanMonthlyLabel">MONTHLY INSTALLMENT</span>
        <b id="monthly">0</b>
      </div>
      <div class="bncResultRow">
        <span id="vanLoanLabel">LOAN AMOUNT</span>
        <b id="loanAmount">0</b>
      </div>
      <div class="bncResultRow">
        <span id="vanInterestLabel">TOTAL INTEREST PAID</span>
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