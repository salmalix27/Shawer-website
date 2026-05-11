<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ $car->brand }} {{ $car->model }} - Details</title>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  @include('partials.meta-pixel')
</head>
<body>

@include('partials.navbar')

<main class="carDPage">
  <div class="container carDWrap">
{{-- ===== Gallery ===== --}}
@php
  $raw = $car->images;

  if (is_string($raw)) {
    $raw = json_decode($raw, true) ?: [];
  }

  if (is_array($raw) && count($raw)) {
    $imgs = array_map(
      fn($p) => \Illuminate\Support\Facades\Storage::disk('cars')->url($p),
      $raw
    );
  } else {
    $fallback = $car->image
      ? \Illuminate\Support\Facades\Storage::disk('cars')->url($car->image)
      : asset('img/mercedes.png');

    $imgs = [$fallback];
  }

  while (count($imgs) < 9) {
    $imgs[] = asset('img/mercedes.png');
  }

  $imgs = array_slice($imgs, 0, 9);
  $mainImg = $imgs[0];
@endphp
<section class="carDGallery">
  <div class="carDMain">
    <img id="carMainImg" src="{{ $mainImg }}" alt="Car image">
  </div>

  <div class="carDThumbs">
    @foreach(array_slice($imgs, 0, 9) as $i => $img)
      <button class="carDThumb" type="button" data-img="{{ $img }}">
        <img src="{{ $img }}" alt="thumb {{ $i + 2 }}">
      </button>
    @endforeach
  </div>
</section>
{{-- ===== Price bar ===== --}}
<section class="carDBar">
  <div class="carDPriceBox">
    <div class="carDPrice">  <span>{{ number_format($car->price) }}</span>
  <span>EGP</span></div>

    <div class="carDCity">
      <span class="valEn">{{ strtoupper($car->city_en ?? '') }}</span>
      <span class="valAr" style="display:none;">{{ $car->city_ar ?? '' }}</span>
    </div>
  </div>

  <div class="carDActions">
    <div class="carDButtons">
      <a class="carDWhats" target="_blank" href="https://wa.me/201034221233 id="carDWhatsappBtn">WHATSAPP</a>
      <a class="carDWhats" href="tel:01044154470" id="carDCallBtn" title="01034324525">CALL NOW</a>
    </div>

    <button type="button" class="carDShareBtn" id="sharePageBtn" aria-label="Share this page">
      <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
        <circle cx="18" cy="5" r="3"></circle>
        <circle cx="6" cy="12" r="3"></circle>
        <circle cx="18" cy="19" r="3"></circle>
        <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
        <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
      </svg>
    </button>
  </div>
</section>
    {{-- ===== Highlights ===== --}}
   <section class="carDHighlightsWrap">
  <h2 class="carDSectionTitle" id="carDHighlightsTitle">Highlights</h2>

  <div class="carDHighlightsGrid">
    
    <div class="carDHighlightItem">
      <div class="carDHighlightIcon">
        <!-- Car icon -->
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M3 13l2-5a2 2 0 0 1 1.9-1.3h10.2A2 2 0 0 1 19 8l2 5"></path>
          <path d="M5 13h14a1 1 0 0 1 1 1v4h-2v-2H6v2H4v-4a1 1 0 0 1 1-1z"></path>
          <circle cx="7.5" cy="15.5" r="1"></circle>
          <circle cx="16.5" cy="15.5" r="1"></circle>
        </svg>
      </div>
      <div class="carDHighlightLabel" id="carDCondLabel">Car condition</div>
      <div class="carDHighlightValue">
        <span class="valEn">{{ strtoupper($car->condition_en ?? '') }}</span>
        <span class="valAr" style="display:none;">{{ $car->condition_ar ?? '' }}</span>
      </div>
    </div>

    <div class="carDHighlightItem">
      <div class="carDHighlightIcon">
        <!-- Road / KM icon -->
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M10 3h4l4 18H6l4-18z"></path>
          <path d="M12 7v2"></path>
          <path d="M12 13v2"></path>
        </svg>
      </div>
      <div class="carDHighlightLabel" id="carDKmLabel">K.M</div>
      <div class="carDHighlightValue">{{ $car->kilometres ?? 0 }}</div>
    </div>

    <div class="carDHighlightItem">
      <div class="carDHighlightIcon">
        <!-- Calendar icon -->
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <rect x="3" y="5" width="18" height="16" rx="2"></rect>
          <path d="M16 3v4"></path>
          <path d="M8 3v4"></path>
          <path d="M3 10h18"></path>
          <circle cx="8" cy="14" r=".6"></circle>
          <circle cx="12" cy="14" r=".6"></circle>
          <circle cx="16" cy="14" r=".6"></circle>
        </svg>
      </div>
      <div class="carDHighlightLabel" id="carDYearLabel">Year</div>
      <div class="carDHighlightValue">{{ $car->year ?? '' }}</div>
    </div>

    <div class="carDHighlightItem">
      <div class="carDHighlightIcon">
        <!-- Fuel icon -->
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <path d="M4 4h9v16H4z"></path>
          <path d="M13 7h2l3 3v7a1 1 0 0 0 2 0v-5"></path>
          <path d="M17 7l-1-2"></path>
          <path d="M6 8h5"></path>
        </svg>
      </div>
      <div class="carDHighlightLabel" id="carDFuelLabel">Fuel type</div>
      <div class="carDHighlightValue">
        <span class="valEn">{{ strtoupper($car->fuel_en ?? '') }}</span>
        <span class="valAr" style="display:none;">{{ $car->fuel_ar ?? '' }}</span>
      </div>
    </div>

    <div class="carDHighlightItem">
      <div class="carDHighlightIcon">
        <!-- Transmission icon -->
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="7" cy="5" r="2"></circle>
          <circle cx="17" cy="5" r="2"></circle>
          <circle cx="7" cy="19" r="2"></circle>
          <circle cx="17" cy="19" r="2"></circle>
          <circle cx="12" cy="12" r="2"></circle>
          <path d="M7 7v10"></path>
          <path d="M17 7v10"></path>
          <path d="M9 5h6"></path>
          <path d="M9 19h6"></path>
          <path d="M12 10v-3"></path>
          <path d="M12 14v3"></path>
        </svg>
      </div>
      <div class="carDHighlightLabel" id="carDTransLabel">Transmission type</div>
      <div class="carDHighlightValue">
        <span class="valEn">{{ strtoupper($car->transmission_en ?? '') }}</span>
        <span class="valAr" style="display:none;">{{ $car->transmission_ar ?? '' }}</span>
      </div>
    </div>

  </div>
</section>

    {{-- ===== Details ===== --}}
    <section class="carDCard">
      <h3 class="carDCardTitle" id="carDDetailsTitle">Details</h3>

      <div class="carDDetailsGrid">
        <div class="carDRow"><span id="carDBrandKey">Brand</span><b>{{ strtoupper($car->brand) }}</b></div>
        <div class="carDRow"><span id="carDModelKey">Model</span><b>{{ strtoupper($car->model) }}</b></div>

        <div class="carDRow"><span id="carDVersionKey">Category</span><b>{{ strtoupper($car->version ?? '—') }}</b></div>

        <div class="carDRow">
          <span id="carDPaymentKey">Payment Options</span>
          <b>
            <span class="valEn">{{ strtoupper($car->payment_options_en ?? '—') }}</span>
            <span class="valAr" style="display:none;">{{ $car->payment_options_ar ?? '—' }}</span>
          </b>
        </div>

        <div class="carDRow">
          <span id="carDBodyKey">Body Type</span>
          <b>
            <span class="valEn">{{ strtoupper($car->body_type_en ?? '—') }}</span>
            <span class="valAr" style="display:none;">{{ $car->body_type_ar ?? '—' }}</span>
          </b>
        </div>

        <div class="carDRow">
          <span id="carDAcKey">Air Conditioning</span>
          <b>
            <span class="valEn">{{ strtoupper($car->air_conditioning_en ?? '—') }}</span>
            <span class="valAr" style="display:none;">{{ $car->air_conditioning_ar ?? '—' }}</span>
          </b>
        </div>

        <div class="carDRow">
          <span id="carDColorKey">Color</span>
          <b>
            <span class="valEn">{{ strtoupper($car->color_en ?? '—') }}</span>
            <span class="valAr" style="display:none;">{{ $car->color_ar ?? '—' }}</span>
          </b>
        </div>

        <div class="carDRow"><span id="carDDoorsKey">Number of doors</span><b>{{ $car->doors ?? '—' }}</b></div>

        <div class="carDRow carDRow--full">
          <span id="carDInteriorKey">Interior</span>
          <b>
            <span class="valEn">{{ strtoupper($car->interior_en ?? '—') }}</span>
            <span class="valAr" style="display:none;">{{ $car->interior_ar ?? '—' }}</span>
          </b>
        </div>
      </div>
    </section>

    {{-- ===== Description ===== --}}
    <section class="carDCard">
      <h3 class="carDCardTitle" id="carDDescTitle">Description</h3>
      <div class="carDDesc">
        <div id="descEn">{!! nl2br(e($car->description_en ?? '')) !!}</div>
        <div id="descAr" style="display:none;">{!! nl2br(e($car->description_ar ?? '')) !!}</div>
      </div>
    </section>

    {{-- ===== Calculator ===== --}}
<section class="carDCalcWrap">
  <div class="bncCalc">
    <div class="bncCalc__head" id="carDCalcHead">CAR LOAN CALCULATOR</div>

    <div class="bncCalc__body">
      <div class="bncField">
        <label class="bncLabel" id="carDCalcPrice">PRICE OF CAR</label>
   <input
  class="bncInput js-price-comma"
  id="carPrice"
  type="text"
  value="{{ number_format((int) $car->price) }}"
  disabled
>
      </div>

      <div class="bncField">
        <label class="bncLabel" id="carDCalcDown">DOWN PAYMENT</label>
                  <input
      class="bncInput js-price-comma"
      type="text"
      id="downPayment"
      placeholder="e.g. 20,000"
      inputmode="numeric"
    >
      </div>

      <div class="bncField">
        <label class="bncLabel" id="carDCalcYears">PERIOD (YEARS)</label>
        <input
          class="bncInput"
          id="years"
          type="number"
          value="1"
          min="1"
        >
      </div>

      <div class="bncField">
        <label class="bncLabel" id="carDCalcInterest">INTEREST (% P.A.)</label>
        <input
          class="bncInput"
          id="interest"
          type="number"
          value="14"
          disabled
        >
      </div>

      <button class="btn bncCalcBtn" id="calcBtn" type="button">
        <span id="carDCalcBtnText">CALCULATE</span>
      </button>

      <div class="bncResults">
        <div class="bncResultRow">
          <span id="carDMonthlyLabel">MONTHLY INSTALLMENT</span>
          <b id="monthly">0.00</b>
        </div>

        <div class="bncResultRow">
          <span id="carDLoanLabel">LOAN AMOUNT</span>
          <b id="loanAmount">0.00</b>
        </div>

        <div class="bncResultRow">
          <span id="carDTotalInterestLabel">TOTAL INTEREST PAID</span>
          <b id="totalInterest">0.00</b>
        </div>
      </div>
    </div>
  </div>

  <a class="carDApplyNow" href="{{ url('/#contact') }}" id="carDApplyNow">APPLY NOW</a>
</section>
  </div>
</main>
<!-- ===== Lightbox ===== -->
<div class="carLightbox" id="carLightbox" aria-hidden="true">
  <button class="carLightbox__close" id="lbClose" type="button" aria-label="Close">✕</button>

  <button class="carLightbox__nav carLightbox__nav--prev" id="lbPrev" type="button" aria-label="Previous">‹</button>
  <button class="carLightbox__nav carLightbox__nav--next" id="lbNext" type="button" aria-label="Next">›</button>

  <div class="carLightbox__stage" id="lbStage">
    <img id="lbImg" alt="Car image preview">
  </div>

  <div class="carLightbox__count" id="lbCount">1 / 1</div>
</div>

@include('partials.footer')
<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/lang.js') }}"></script>

<script>
  (function () {
    const main = document.getElementById('carMainImg');
    const thumbs = document.querySelectorAll('.carDThumb');
    if (!main || !thumbs.length) return;

    thumbs.forEach(btn => {
      btn.addEventListener('click', () => {
        thumbs.forEach(b => b.classList.remove('is-on'));
        btn.classList.add('is-on');
        const src = btn.getAttribute('data-img');
        if (src) main.src = src;
      });
    });
  })();
</script>

</body>
</html>