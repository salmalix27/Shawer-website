<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cars for Sale - Shawer</title>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  @include('partials.meta-pixel')
</head>
<body>

@include('partials.navbar')

<main class="cfsPage">
  <div class="container">

    <!-- Title row -->
    <div class="cfsTop">
      <div>
        <h1 class="cfsTitle" id="cfsTitle">Cars for Sale</h1>
        <p class="cfsSub" id="cfsSub">Find your perfect car with smart filters.</p>
      </div>

      <div class="cfsCountPill">
        <span id="cfsResultsLabel">Result(s)</span>:
        {{ method_exists($cars,'total') ? $cars->total() : ($cars->count() ?? 0) }}
      </div>
    </div>

    <!-- Filters (Top Card) -->
    <section class="cfsFilterCard" data-brands='@json($brands ?? [])'>
      <button class="cfsFilterHead" type="button" data-acc="filters">
        <div>
          <div class="cfsFilterHead__title" id="cfsFiltersTitle">Filters</div>
          <div class="cfsFilterHead__hint" id="cfsFiltersHint">Pick what you need</div>
        </div>
        <span class="cfsChevron" aria-hidden="true">▾</span>
      </button>

      <div class="cfsFilterBody" data-acc-body="filters">
        <form class="cfsForm" method="GET" action="{{ route('cars') }}">
          <div class="cfsGridFilters">

            <!-- Brand/Model -->
           <div class="cfsFilterGroup">
    <label id="cfsBrandLabel" class="cfsLabel">Brand</label>

    <div class="cfsNiceSelect" data-custom-select="brand">
        <input type="hidden" name="brand" id="brandInput" value="{{ request('brand') }}">

        <button type="button" class="cfsNiceSelectBtn" data-select-btn>
            <span data-select-text>
                {{ request('brand') ?: 'All Brands' }}
            </span>
            <span class="cfsSelectArrow">▾</span>
        </button>

        <div class="cfsNiceSelectList" data-select-list hidden>
            <button type="button" class="cfsNiceOption" data-value="">All Brands</button>

            @foreach($brands as $brandItem)
                <button 
                    type="button" 
                    class="cfsNiceOption" 
                    data-value="{{ $brandItem }}">
                    {{ $brandItem }}
                </button>
            @endforeach
        </div>
    </div>
</div>

<div class="cfsFilterGroup">
    <label id="cfsModelLabel" class="cfsLabel">Model</label>

    <div class="cfsNiceSelect" data-custom-select="model">
        <input type="hidden" name="model" id="modelInput" value="{{ request('model') }}">

        <button type="button" class="cfsNiceSelectBtn" data-select-btn>
            <span data-select-text>
                {{ request('model') ?: 'All Models' }}
            </span>
            <span class="cfsSelectArrow">▾</span>
        </button>

        <div class="cfsNiceSelectList" id="modelCustomList" data-select-list hidden>
            <button type="button" class="cfsNiceOption" data-value="">All Models</button>
        </div>
    </div>
</div>

<script>
    window.modelsByBrand = @json($modelsByBrand);
    window.selectedBrand = @json(request('brand'));
    window.selectedModel = @json(request('model'));
</script>

            <!-- Price -->
            <div class="cfsDrop" data-drop>
              <button type="button" class="cfsDropHead" data-drop-btn>
                <span id="cfsPriceLabel">Price (EGP)</span>
                <span class="cfsChevronSmall">▾</span>
              </button>
              <div class="cfsDropBody" data-drop-body>
                <div class="cfsDual">
                 <input
  class="cfsInput js-price-comma"
  type="text"
  name="min_price"
  value="{{ request('min_price') ? number_format((float) request('min_price')) : '' }}"
  placeholder="Min"
  id="cfsMinPrice"
  inputmode="numeric"
>

<input
  class="cfsInput js-price-comma"
  type="text"
  name="max_price"
  value="{{ request('max_price') ? number_format((float) request('max_price')) : '' }}"
  placeholder="Max"
  id="cfsMaxPrice"
  inputmode="numeric"
>
 </div>
              </div>
            </div>

            <!-- Kilometres -->
            <div class="cfsDrop" data-drop>
              <button type="button" class="cfsDropHead" data-drop-btn>
                <span id="cfsKmLabel">Kilometres</span>
                <span class="cfsChevronSmall">▾</span>
              </button>
              <div class="cfsDropBody" data-drop-body>
                <div class="cfsDual">
                  <input class="cfsInput" type="number" name="min_km" value="{{ request('min_km') }}" placeholder="Min" id="cfsMinKm">
                  <input class="cfsInput" type="number" name="max_km" value="{{ request('max_km') }}" placeholder="Max" id="cfsMaxKm">
                </div>
              </div>
            </div>

            <!-- Year -->
            <div class="cfsDrop" data-drop>
              <button type="button" class="cfsDropHead" data-drop-btn>
                <span id="cfsYearLabel">Year</span>
                <span class="cfsChevronSmall">▾</span>
              </button>
              <div class="cfsDropBody" data-drop-body>
                <div class="cfsDual">
                  <input class="cfsInput" type="number" name="min_year" value="{{ request('min_year') }}" placeholder="Min" id="cfsMinYear">
                  <input class="cfsInput" type="number" name="max_year" value="{{ request('max_year') }}" placeholder="Max" id="cfsMaxYear">
                </div>
              </div>
            </div>

            <!-- Transmission -->
            <div class="cfsDrop" data-drop>
              <button type="button" class="cfsDropHead" data-drop-btn>
                <span id="cfsTransLabel">Transmission</span>
                <span class="cfsChevronSmall">▾</span>
              </button>
              <div class="cfsDropBody" data-drop-body>
                @php $t = (array) request('transmission', []); @endphp
                <div class="cfsChecks">
                  @foreach(['Automatic','Manual','Hybrid'] as $tr)
                    <label class="cfsCheck">
                      <input type="checkbox" name="transmission[]" value="{{ $tr }}" {{ in_array($tr,$t) ? 'checked' : '' }}>
                      <span data-tr="{{ $tr }}" class="cfsTransItem">{{ $tr }}</span>
                    </label>
                  @endforeach
                </div>
              </div>
            </div>

            <!-- Fuel -->
            <div class="cfsDrop" data-drop>
              <button type="button" class="cfsDropHead" data-drop-btn>
                <span id="cfsFuelLabel">Fuel Type</span>
                <span class="cfsChevronSmall">▾</span>
              </button>
              <div class="cfsDropBody" data-drop-body>
                @php $f = (array) request('fuel', []); @endphp
                <div class="cfsChecks">
                  @foreach(['Benzine','Electric','Diesel','Natural gas','Hybrid'] as $fuel)
                    <label class="cfsCheck">
                      <input type="checkbox" name="fuel[]" value="{{ $fuel }}" {{ in_array($fuel,$f) ? 'checked' : '' }}>
                      <span data-fuel="{{ $fuel }}" class="cfsFuelItem">{{ $fuel }}</span>
                    </label>
                  @endforeach
                </div>
              </div>
            </div>

          </div>

          <!-- Actions -->
          <div class="cfsActionsRow">
            <a class="cfsBtnGhost" href="{{ route('cars') }}" id="cfsResetBtn">Reset</a>
            <button class="cfsBtnPrimary" type="submit" id="cfsApplyBtn">Apply Filters</button>
          </div>
        </form>
      </div>
    </section>

    <!-- Results -->
    <section class="cfsResults">
    @if(($cars->count() ?? 0) == 0)
  <div class="cfsEmptyPage">
    <div class="cfsEngineWrap" aria-hidden="true">
      <img
    class="cfsEngine"
    src="https://www.shareicon.net/data/512x512/2016/02/21/722482_engine_512x512.png"
    alt="Engine icon"
  >
    </div>

    <h3 id="cfsEmptyTitle">Oops! No cars match your filters</h3>
    <p id="cfsEmptyDesc">Try removing some filters or reset to see all available cars.</p>
    <a class="cfsEmptyBack" href="{{ route('cars') }}" id="cfsEmptyBack">Back to Cars</a>
  </div>
@else

        <div class="cfsCardsGrid">
          @foreach($cars as $car)
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
  $imgPath = $imgs[0];
@endphp

<article class="cfsCard" data-slider data-images='@json($imgs)'>
  <a class="cfsCardLinkOverlay" href="{{ route('cars.show', $car->id) }}" aria-label="View car details"></a>

  <div class="cfsMedia">
    <img class="cfsMediaImg" src="{{ $imgPath }}" alt="{{ $car->brand }} {{ $car->model }}">
@if($car->is_special)
  <div class="cfsSpecialBadge">SPECIAL</div>
@endif
    <button class="cfsArrow cfsArrow--left" type="button" data-prev>‹</button>
    <button class="cfsArrow cfsArrow--right" type="button" data-next>›</button>

    <div class="cfsDots">
      @foreach($imgs as $index => $img)
        <span class="cfsDot {{ $index === 0 ? 'is-on' : '' }}"></span>
      @endforeach
    </div>
  </div>

  <div class="cfsBody">
    <div class="cfsTopRow">
      <h3 class="cfsBrand">{{ strtoupper($car->brand) }}</h3>

      <div class="cfsPrice">
        {{ number_format($car->price) }} <small>EGP</small>
      </div>

      <div class="cfsModel">
        {{ strtoupper($car->model) }} {{ $car->year }}
      </div>
    </div>

<div class="cfsMeta">
  <span>
    <span class="cfsMetaIcon">
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <rect x="3" y="4" width="18" height="17" rx="2"></rect>
        <line x1="16" y1="2" x2="16" y2="6"></line>
        <line x1="8" y1="2" x2="8" y2="6"></line>
        <line x1="3" y1="10" x2="21" y2="10"></line>
        <line x1="8" y1="14" x2="8" y2="14"></line>
        <line x1="12" y1="14" x2="12" y2="14"></line>
        <line x1="16" y1="14" x2="16" y2="14"></line>
        <line x1="8" y1="18" x2="8" y2="18"></line>
        <line x1="12" y1="18" x2="12" y2="18"></line>
      </svg>
    </span>
    {{ $car->year }}
  </span>

  <span>
    <span class="cfsMetaIcon">
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path d="M8 21L12 3L16 21"></path>
        <path d="M10 10H14"></path>
        <path d="M9 15H15"></path>
        <path d="M7 21H17"></path>
      </svg>
    </span>
    {{ number_format($car->kilometres) }} KM
  </span>

  <span>
    <span class="cfsMetaIcon">
      <svg viewBox="0 0 24 24" aria-hidden="true">
        <path d="M4 21V5C4 3.9 4.9 3 6 3H14C15.1 3 16 3.9 16 5V21"></path>
        <path d="M4 11H16"></path>
        <path d="M16 8H18L21 11V18C21 19.1 20.1 20 19 20C17.9 20 17 19.1 17 18V14H16"></path>
      </svg>
    </span>

    <span class="valEn">{{ strtoupper($car->fuel_en ?? '-') }}</span>
    <span class="valAr" style="display:none;">{{ $car->fuel_ar ?? '-' }}</span>
  </span>
</div>

    <div class="cfsCityRow">
      <div class="cfsCity">
        <span class="valEn">{{ strtoupper($car->city_en ?? '') }}</span>
        <span class="valAr" style="display:none;">{{ $car->city_ar ?? '' }}</span>
      </div>

      <a class="cfsSeeMore" href="{{ route('cars.show', $car->id) }}">
        See More
      </a>
    </div>
  </div>

  <div class="cfsCardActions">
<a class="cfsBtnDark cfsWhatsappBtn" target="_blank" href="https://wa.me/201034221233">
  WHATSAPP
</a>

<a class="cfsBtnLight cfsCallBtn" href="tel:01034324525" title="01034324525">
  CALL NOW
</a>
  </div>
 
</article>
          @endforeach
        </div>

        <div class="cfsPagination">
          {{ method_exists($cars,'links') ? $cars->links() : '' }}
        </div>

      @endif
    </section>

  </div>
</main>

@include('partials.footer')
<script src="{{ asset('js/home.js') }}"></script>
<script src="{{ asset('js/lang.js') }}"></script>
</body>
</html>