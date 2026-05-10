<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Brand New Cars - Shawer</title>

  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  @include('partials.meta-pixel')
</head>
<body>

  @include('partials.navbar')

  <main class="bncPage">
    <div class="bncContainer">

      <div class="bncGrid">

        {{-- LEFT COLUMN --}}
        <section class="bncLeft">

          <h1 class="bncTitle" id="usedTitle">Used Cars</h1>

          <ul class="mortgageList">
            <li id="usedBullet1">From 2009.</li>
            <li id="usedBullet2">Start from 10% Down Payment.</li>
            <li id="usedBullet3">Up to 7 years.</li>
            <li id="usedBullet4">Without Admin Fees.</li>
          </ul>

          <a class="autoHero__btn" href="{{ route('home') }}#contact" id="usedApplyBtn">APPLY NOW</a>
        </section>

        {{-- RIGHT COLUMN --}}
        <aside class="bncRight">
          <div class="bncMedia">
            <img src="{{ asset('img/UsedCars.png') }}" alt="Used cars header">
          </div>
        </aside>

      </div>

      {{-- CALCULATOR IN CENTER --}}
      <section class="carDCalcWrap">
        <div class="bncCalc">
          <div class="bncCalc__head" id="usedCalcHead">CAR LOAN CALCULATOR</div>

          <div class="bncCalc__body">
            <div class="bncField">
              <label class="bncLabel" id="usedLabelPrice">PRICE OF CAR</label>
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
              <label class="bncLabel" id="usedLabelDown">DOWN PAYMENT</label>
                                <input
      class="bncInput js-price-comma"
      type="text"
      id="downPayment"
      placeholder="e.g. 20,000"
      inputmode="numeric"
    >
            </div>

            <div class="bncField">
              <label class="bncLabel" id="usedLabelYears">PERIOD (YEARS)</label>
              <input class="bncInput" type="number" id="years" placeholder="5" min="1">
            </div>

            <div class="bncField">
              <label class="bncLabel" id="usedLabelInterest">INTEREST (% P.A.)</label>
              <input class="bncInput" type="number" id="interest" value="14" disabled>
            </div>

            <button class="btn bncCalcBtn" id="calcBtn" type="button">
              <span id="usedCalcBtnText">CALCULATE</span>
            </button>

            <div class="bncResults">
              <div class="bncResultRow">
                <span id="usedMonthlyLabel">MONTHLY INSTALLMENT</span>
                <b id="monthly">0</b>
              </div>
              <div class="bncResultRow">
                <span id="usedLoanLabel">LOAN AMOUNT</span>
                <b id="loanAmount">0</b>
              </div>
              <div class="bncResultRow">
                <span id="usedInterestLabel">TOTAL INTEREST PAID</span>
                <b id="totalInterest">0</b>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
  </main>

  @include('partials.footer')

  <script src="{{ asset('js/home.js') }}"></script>
  <script src="{{ asset('js/lang.js') }}"></script>
</body>
</html>