@extends('layouts.admin')

@section('content')
<div class="adminWrap">
  <h1 class="adminH1">Add Car</h1>

  @if ($errors->any())
    <div class="adminErr">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form class="adminForm" method="POST" action="{{ route('admin.cars.store') }}" enctype="multipart/form-data">
    @csrf

    {{-- ===== Basics ===== --}}
    <div class="grid2">
<div>
  <label>Brand</label>
  <select name="brand" id="adminBrandSelect" required>
    <option value="">Select Brand</option>
    @foreach($brands as $brand)
      <option value="{{ $brand }}" {{ old('brand') == $brand ? 'selected' : '' }}>
        {{ $brand }}
      </option>
    @endforeach
  </select>
</div>

<div>
  <label>Model</label>
  <select name="model" id="adminModelSelect" required data-selected="{{ old('model') }}">
    <option value="">Select Model</option>
  </select>
</div>

<script>
  window.adminModelsByBrand = @json($modelsByBrand);
</script>

      <div>
        <label>Year</label>
        <input type="number" name="year" value="{{ old('year') }}" required>
      </div>

      <div>
        <label>Price (EGP)</label>
        <input type="number" name="price" value="{{ old('price') }}" required>
      </div>

      <div>
        <label>Kilometres</label>
        <input type="number" name="kilometres" value="{{ old('kilometres') }}" required>
      </div>

      <div>
        <label>category</label>
        <input name="version" value="{{ old('version') }}" placeholder="AMG">
      </div>

      <div>
        <label>Number of doors</label>
        <input type="number" name="doors" value="{{ old('doors') }}" placeholder="4">
      </div>
    </div>

    {{-- ===== Bilingual Values (EN / AR) ===== --}}
    <div class="grid2" style="margin-top:14px;">
      <div>
        <label>City (EN)</label>
        <input name="city_en" value="{{ old('city_en') }}">
      </div>
      <div>
        <label>المدينة (AR)</label>
        <input name="city_ar" value="{{ old('city_ar') }}">
      </div>

      <div>
        <label>Condition (EN)</label>
        <input name="condition_en" value="{{ old('condition_en') }}" placeholder="USED">
      </div>
      <div>
        <label>حالة السيارة (AR)</label>
        <input name="condition_ar" value="{{ old('condition_ar') }}" placeholder="مستعملة">
      </div>

      <div>
        <label>Fuel (EN)</label>
        <input name="fuel_en" value="{{ old('fuel_en') }}" placeholder="ELECTRIC">
      </div>
      <div>
        <label>نوع الوقود (AR)</label>
        <input name="fuel_ar" value="{{ old('fuel_ar') }}" placeholder="كهرباء">
      </div>

      <div>
        <label>Transmission (EN)</label>
        <input name="transmission_en" value="{{ old('transmission_en') }}" placeholder="AUTOMATIC">
      </div>
      <div>
        <label>ناقل الحركة (AR)</label>
        <input name="transmission_ar" value="{{ old('transmission_ar') }}" placeholder="أوتوماتيك">
      </div>

      <div>
        <label>Payment Options (EN)</label>
        <input name="payment_options_en" value="{{ old('payment_options_en') }}" placeholder="CASH OR INSTALLMENT">
      </div>
      <div>
        <label>خيارات الدفع (AR)</label>
        <input name="payment_options_ar" value="{{ old('payment_options_ar') }}" placeholder="كاش أو تقسيط">
      </div>

      <div>
        <label>Body Type (EN)</label>
        <input name="body_type_en" value="{{ old('body_type_en') }}" placeholder="SEDAN">
      </div>
      <div>
        <label>نوع الهيكل (AR)</label>
        <input name="body_type_ar" value="{{ old('body_type_ar') }}" placeholder="سيدان">
      </div>

      <div>
        <label>Air Conditioning (EN)</label>
        <input name="air_conditioning_en" value="{{ old('air_conditioning_en') }}" placeholder="AUTOMATIC AIR CONDITIONING">
      </div>
      <div>
        <label>مكيف الهواء (AR)</label>
        <input name="air_conditioning_ar" value="{{ old('air_conditioning_ar') }}" placeholder="تكييف أوتوماتيك">
      </div>

      <div>
        <label>Color (EN)</label>
        <input name="color_en" value="{{ old('color_en') }}" placeholder="BLUE">
      </div>
      <div>
        <label>اللون (AR)</label>
        <input name="color_ar" value="{{ old('color_ar') }}" placeholder="أزرق">
      </div>

      <div>
        <label>Interior (EN)</label>
        <input name="interior_en" value="{{ old('interior_en') }}" placeholder="FULL LEATHER">
      </div>
      <div>
        <label>المقصورة (AR)</label>
        <input name="interior_ar" value="{{ old('interior_ar') }}" placeholder="جلد كامل">
      </div>
    </div>

    {{-- ===== Description bilingual ===== --}}
    <div style="margin-top:16px;">
      <label>Description (EN)</label>
      <textarea name="description_en" rows="5">{{ old('description_en') }}</textarea>

      <label style="margin-top:10px;">الوصف (AR)</label>
      <textarea name="description_ar" rows="5">{{ old('description_ar') }}</textarea>
    </div>

    {{-- ===== Images ===== --}}
    <div style="margin-top:16px;">
      <label>Upload 9 Images (exactly)</label>
      <input type="file" name="images[]" multiple accept="image/*" required>
      <small style="display:block;opacity:.75;margin-top:6px;">You must select exactly 9 images.</small>
    </div>

    <div style="margin-top:18px;display:flex;gap:10px;">
      <button class="adminBtn" type="submit">Save</button>
      <a class="adminBtnGhost" href="{{ route('admin.cars') }}">Cancel</a>
    </div>
<div class="form-check my-3">
    <input 
        class="form-check-input" 
        type="checkbox" 
        name="is_special" 
        value="1" 
        id="is_special"
    >

    <label class="form-check-label" for="is_special">
        Special
    </label>
</div>
  </form>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const brandSelect = document.getElementById("adminBrandSelect");
  const modelSelect = document.getElementById("adminModelSelect");
  const modelsByBrand = window.adminModelsByBrand || {};

  if (!brandSelect || !modelSelect) return;

  function fillModels() {
    const selectedBrand = brandSelect.value;
    const selectedModel = modelSelect.dataset.selected || "";

    modelSelect.innerHTML = '<option value="">Select Model</option>';

    const models = modelsByBrand[selectedBrand] || [];

    models.forEach(function (model) {
      const option = document.createElement("option");
      option.value = model;
      option.textContent = model;

      if (model === selectedModel) {
        option.selected = true;
      }

      modelSelect.appendChild(option);
    });
  }

  brandSelect.addEventListener("change", function () {
    modelSelect.dataset.selected = "";
    fillModels();
  });

  fillModels();
});
</script>
@endsection