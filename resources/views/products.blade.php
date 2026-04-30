<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title id="productsPageTitleTag">Shawer - Products</title>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  @include('partials.meta-pixel')
</head>
<body>

<!-- NAVBAR -->
@include('partials.navbar')

<main class="productsPage">
  <div class="productsPage__container">

    <section class="productsGridWrap">
      <div class="productsGrid">

        <a class="prodCard" href="{{ route('Automotive') }}">
          <img src="{{ asset('img/Automotive.png') }}" alt="Automotive">
          <span class="prodCard__label">
            <span class="prodCard__badge" id="prodPageAuto">AUTOMOTIVE</span>
          </span>
        </a>

        <a class="prodCard" href="{{ route('homeFinishing')}}">
          <img src="{{ asset('img/home_finishing.png') }}" alt="Home Finishing">
          <span class="prodCard__label">
            <span class="prodCard__badge" id="prodPageHomeFin">HOME FINISHING</span>
          </span>
        </a>

        <a class="prodCard" href="{{ route('gold')}}">
          <img src="{{ asset('img/gold.png') }}" alt="Gold">
          <span class="prodCard__label">
            <span class="prodCard__badge" id="prodPageGold">GOLD</span>
          </span>
        </a>

        <a class="prodCard" href="{{ route('mortgage')}}">
          <img src="{{ asset('img/mortgage.png') }}" alt="Mortgage">
          <span class="prodCard__label">
            <span class="prodCard__badge" id="prodPageMortgage">MORTGAGE</span>
          </span>
        </a>

        <a class="prodCard" href="{{ route('summerVehicles')}}">
          <img src="{{ asset('img/summer_vehicles.png') }}" alt="Summer Vehicles">
          <span class="prodCard__label">
            <span class="prodCard__badge" id="prodPageSummer">SUMMER VEHICLES</span>
          </span>
        </a>

        <a class="prodCard" href="{{ route('insurance')}}">
          <img src="{{ asset('img/insurance.png') }}" alt="Insurance">
          <span class="prodCard__label">
            <span class="prodCard__badge" id="prodPageInsurance">INSURANCE</span>
          </span>
        </a>

      </div>
    </section>

  </div>
</main>

<script src="{{ asset('js/home.js') }}"></script>

<!-- Footer anchor -->
<div id="footer"></div>
@include('partials.footer')
 
<script src="{{ asset('js/lang.js') }}"></script>
</body>
</html>