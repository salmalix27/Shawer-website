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
          <h1 class="bncTitle" id="bncTitle">Brand New Cars</h1>

          <ul class="mortgageList">
            <li id="bncBullet1">Zero Down Payment.</li>
            <li id="bncBullet2">Up to 10 years.</li>
            <li id="bncBullet3">Without Admin Fees.</li>
            <li id="bncBullet4">Insurance (Your Choice).</li>
          </ul>

          <a class="autoHero__btn" href="{{ route('home') }}#contact" id="bncApplyBtn">APPLY NOW</a>
        </section>

        {{-- RIGHT COLUMN --}}
        <aside class="bncRight">
          <div class="bncMedia">
            <img src="{{ asset('img/brandNewCar.png') }}" alt="Brand new car">
          </div>
        </aside>

      </div>

      {{-- CALCULATOR IN CENTER --}}
      <section class="carDCalcWrap">
        <div class="bncCalc">
          <div class="bncCalc__head" id="bncCalcHead">CAR LOAN CALCULATOR</div>

          <div class="bncCalc__body">
            <div class="bncField">
              <label class="bncLabel" id="bncLabelPrice">PRICE OF CAR</label>
              <input class="bncInput" type="number" id="carPrice" placeholder="e.g. 200000" min="0" max="6000000">
            </div>

            <div class="bncField">
              <label class="bncLabel" id="bncLabelDown">DOWN PAYMENT</label>
              <input class="bncInput" type="number" id="downPayment" placeholder="e.g. 20000" min="0">
            </div>

            <div class="bncField">
              <label class="bncLabel" id="bncLabelYears">PERIOD (YEARS)</label>
              <input class="bncInput" type="number" id="years" placeholder="5" min="1">
            </div>

            <div class="bncField">
              <label class="bncLabel" id="bncLabelInterest">INTEREST (% P.A.)</label>
              <input class="bncInput" type="number" id="interest" value="13" disabled>
            </div>

            <button class="btn bncCalcBtn" id="calcBtn" type="button">
              <span id="bncCalcBtnText">CALCULATE</span>
            </button>

            <div class="bncResults">
              <div class="bncResultRow">
                <span id="bncMonthlyLabel">MONTHLY INSTALLMENT</span>
                <b id="monthly">0</b>
              </div>
              <div class="bncResultRow">
                <span id="bncLoanLabel">LOAN AMOUNT</span>
                <b id="loanAmount">0</b>
              </div>
              <div class="bncResultRow">
                <span id="bncInterestLabel">TOTAL INTEREST PAID</span>
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