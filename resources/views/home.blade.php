<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Shawer - FinanceFlow</title>

  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  @include('partials.meta-pixel')
</head>
<body>

  <!-- ================= NAVBAR ================= -->
  @include('partials.navbar')

  <!-- ================= HERO ================= -->
  <main class="hero" id="home">
    <div class="container hero__inner">

      <!-- LEFT -->
      <section class="hero__left">
        <h1 class="hero__title" id="heroTitle">Because Your Dreams<br>
        <h1 class="hero__title" id="heroTitleSpan">Deserve Funding</h1>
        </h1>

        <p class="hero__desc" id="heroDesc">
          FinanceFlow connects you with trusted banks & financing partners, handles your application,
          and keeps you updated until approval.
        </p>

        <div class="hero__cta">
          <a class="btn btn--apply" href="#contact" id="heroApplyBtn">Apply Now</a>
        </div>

      </section>

      <!-- RIGHT CARD / IMAGE -->
      <section class="hero__right">
        <div class="preview">

          <div class="preview__media">
            <img src="{{ asset('img/headerCar.png') }}" alt="Auto Financing">
            <div class="preview__overlay">
              <h3 id="overlayTitle">Shawer</h3>
              <p id="overlayDesc">Flexible plans that match your budget</p>

              <div class="steps">
                <div class="step is-active" id="step1"><span>1</span> Submit request</div>
                <div class="step" id="step2"><span>2</span> Review </div>
                <div class="step" id="step3"><span>3</span> Approval</div>
              </div>

              <div class="progress">
                <div class="progress__bar" id="progressBar"></div>
              </div>
            </div>
          </div>

        </div>
      </section>

    </div>
  </main>

  <!-- ================= PRODUCTS ================= -->
  <section id="products" class="products">
    <div class="container">
      <div class="products__head">
        <h2 class="products__title" id="productsTitle">Our Financial Products</h2>
      </div>

      <div class="products__slider" id="prodSlider">
        <button class="arrow arrow--left" id="prodPrev" aria-label="Previous">‹</button>
        <button class="arrow arrow--right" id="prodNext" aria-label="Next">›</button>

        <div class="products__track" id="prodTrack">
          <a class="productCard" href="{{ route('Automotive') }}">
            <img class="productCard__img" src="{{ asset('img/Automotive.png') }}" alt="Automotive">
            <div class="productCard__overlay">
              <span class="productCard__label" id="prodAutoLabel">AUTOMOTIVE</span>
            </div>
          </a>

          <a class="productCard" href="{{ route('homeFinishing')}}">
            <img class="productCard__img" src="{{ asset('img/home_finishing.png') }}" alt="Home finishing">
            <div class="productCard__overlay">
              <span class="productCard__label" id="prodHomeFinLabel">HOME FINISHING</span>
            </div>
          </a>

          <a class="productCard" href="{{ route('mortgage')}}">
            <img class="productCard__img" src="{{ asset('img/mortgage.png') }}" alt="Mortgage">
            <div class="productCard__overlay">
              <span class="productCard__label" id="prodMortgageLabel">MORTGAGE</span>
            </div>
          </a>

          <a class="productCard" href="{{ route('gold')}}">
            <img class="productCard__img" src="{{ asset('img/gold.png') }}" alt="Gold">
            <div class="productCard__overlay">
              <span class="productCard__label" id="prodGoldLabel">GOLD</span>
            </div>
          </a>

          <a class="productCard" href="{{ route('summerVehicles')}}">
            <img class="productCard__img" src="{{ asset('img/summer_vehicles.png') }}" alt="Summer vehicles">
            <div class="productCard__overlay">
              <span class="productCard__label" id="prodSummerLabel">SUMMER VEHICLES</span>
            </div>
          </a>

          <a class="productCard" href="{{ route('insurance')}}">
            <img class="productCard__img" src="{{ asset('img/insurance.png') }}" alt="Insurance">
            <div class="productCard__overlay">
              <span class="productCard__label" id="prodInsuranceLabel">INSURANCE</span>
            </div>
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- ================= ABOUT ================= -->
  <section class="about" id="about">
    <div class="container about__inner">

      <!-- LEFT TEXT -->
      <div class="about__content">
        <h2 class="about__title" id="aboutTitle">About Shawer Company</h2>

        <p class="about__text" id="aboutP1">
          Shawer is a smart financing platform built to help you move
          faster toward your goals.
        </p>

        <p class="about__text" id="aboutP2">
          We simplify the financing process by handling everything for you —
          from collecting your information and documents to submitting your
          application and following up until approval.
        </p>

        <p class="about__text" id="aboutP3">
          No confusion. No endless paperwork. No stress.
        </p>

        <a href="{{ route('about') }}" class="btn about__btn" id="aboutBtn">Get To Know Us More</a>
      </div>

      <!-- RIGHT IMAGE -->
      <div class="about__image">
        <img src="{{ asset('img/aboutShawer.png') }}" alt="About Shaver">
      </div>

    </div>
  </section>

  <!-- ================= CONTACT ================= -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="contact__wrap">

        <h2 class="contact__title" id="contactTitle">Get in touch</h2>

        <div class="contact__card">
          <form id="contact__form" class="contact__form" method="POST" action="{{ route('contact.store') }}" novalidate>
            @csrf

            <div class="field">
              <label class="field__label" for="c_name" id="labelName">Name</label>
              <input class="field__input" id="c_name" name="name" type="text" placeholder="Enter your name" required>
              <div class="field__error">This field is required</div>
            </div>

            <div class="field">
              <label class="field__label" for="c_phone" id="labelPhone">Phone Number</label>
              <input class="field__input" id="c_phone" name="phone" type="tel" placeholder="Enter your phone" required>
              <div class="field__error">This field is required</div>
            </div>

            <div class="field">
              <label class="field__label" for="c_product" id="labelProduct">Product Name</label>
              <select class="field__input field__select" id="c_product" name="product" required>
                <option value="" selected disabled id="optSelect">Please select</option>
                <option value="Automotive" id="optAuto">Automotive</option>
                <option value="Home Finishing" id="optHomeFin">Home Finishing</option>
                <option value="Mortgage" id="optMortgage">Mortgage</option>
                <option value="Gold" id="optGold">Gold</option>
                <option value="Insurance" id="optInsurance">Insurance</option>
              </select>
              <div class="field__error">This field is required</div>
            </div>

            <!-- Automotive Sub Product (hidden by default) -->
            <div class="field" id="autoSubWrap" required>
              <label class="field__label" for="c_auto_sub" id="labelSubProduct">Sub Product</label>
              <select class="field__input field__select" id="c_auto_sub" name="sub_product">
                <option value="" selected disabled id="optSelect2">Please select</option>
                <option value="Brand New Cars" id="optBrandNew">Brand New Cars</option>
                <option value="Used Cars" id="optUsed">Used Cars</option>
                <option value="Transportation" id="optTransport">Transportation</option>
                <option value="Vans" id="optVans">Vans</option>
              </select>
              <div class="field__error">This field is required</div>
            </div>

            <!-- Extra Fields (hidden by default) -->
            <div class="field" id="carBrandWrap" style="display:none;">
              <label class="field__label" for="c_car_brand" id="labelCarBrand">Car Brand</label>
              <input class="field__input" id="c_car_brand" name="car_brand" type="text" placeholder="e.g. Toyota">
              <div class="field__error">This field is required</div>
            </div>

            <div class="field" id="carModelWrap" style="display:none;">
              <label class="field__label" for="c_car_model" id="labelCarModel">Car Model</label>
              <input class="field__input" id="c_car_model" name="car_model" type="text" placeholder="e.g. Corolla">
              <div class="field__error">This field is required</div>
            </div>

            <div class="field" id="carCommentWrap" style="display:none;">
              <label class="field__label" for="c_car_comment" id="labelCarComment">Your Comment</label>
              <input class="field__input" id="c_car_comment" name="car_comment" type="text" placeholder="Type your comment">
              <div class="field__error">This field is required</div>
            </div>

            <div class="contact__actions">
              <button type="submit" class="btn btn--pill btn--white" id="sendBtn">SEND</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>

  <script src="{{ asset('js/home.js') }}"></script>
  @include('partials.footer')
  <script src="{{ asset('js/lang.js') }}"></script>
@if(session('success'))
<script>
  if (typeof fbq !== 'undefined') {
    fbq('track', 'Lead');
  }
</script>
@endif
</body>
</html>