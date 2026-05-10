@extends('layouts.admin')

@section('content')
<div class="adminWrap">
  <h1 class="adminH1">Edit Car</h1>

  @if ($errors->any())
    <div class="adminErr">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form class="adminForm"
        method="POST"
        action="{{ route('admin.cars.update', $car->id) }}"
        enctype="multipart/form-data">
    @csrf
    @method('PUT')

    {{-- ===== Basics ===== --}}
    <div class="grid2">
<div>
  <label>Brand</label>
  <select name="brand" id="adminBrandSelect" required>
    <option value="">Select Brand</option>
    @foreach($brands as $brand)
      <option value="{{ $brand }}" {{ old('brand', $car->brand) == $brand ? 'selected' : '' }}>
        {{ $brand }}
      </option>
    @endforeach
  </select>
</div>

<div>
  <label>Model</label>
  <select name="model" id="adminModelSelect" required data-selected="{{ old('model', $car->model) }}">
    <option value="">Select Model</option>
  </select>
</div>

<script>
  window.adminModelsByBrand = @json($modelsByBrand);
</script>
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

      <div>
        <label>Year</label>
        <input type="number" name="year" value="{{ old('year', $car->year) }}" required>
      </div>

      <div>
        <label>Price (EGP)</label>
        <input type="number" name="price" value="{{ old('price', $car->price) }}" required>
      </div>

      <div>
        <label>Kilometres</label>
        <input type="number" name="kilometres" value="{{ old('kilometres', $car->kilometres) }}" required>
      </div>

      <div>
        <label>Category</label>
        <input name="version" value="{{ old('version', $car->version) }}" placeholder="AMG">
      </div>

      <div>
        <label>Number of doors</label>
        <input type="number" name="doors" value="{{ old('doors', $car->doors) }}" placeholder="4">
      </div>
    </div>

    {{-- ===== Bilingual Values (EN / AR) ===== --}}
    <div class="grid2" style="margin-top:14px;">
      <div>
        <label>City (EN)</label>
        <input name="city_en" value="{{ old('city_en', $car->city_en ?? '') }}" placeholder="CAIRO">
      </div>

      <div>
        <label>المدينة (AR)</label>
        <input name="city_ar" value="{{ old('city_ar', $car->city_ar ?? '') }}" placeholder="القاهرة">
      </div>

      <div>
        <label>Condition (EN)</label>
        <input name="condition_en" value="{{ old('condition_en', $car->condition_en ?? '') }}" placeholder="USED">
      </div>

      <div>
        <label>حالة السيارة (AR)</label>
        <input name="condition_ar" value="{{ old('condition_ar', $car->condition_ar ?? '') }}" placeholder="مستعملة">
      </div>

      <div>
        <label>Fuel (EN)</label>
        <input name="fuel_en" value="{{ old('fuel_en', $car->fuel_en ?? '') }}" placeholder="ELECTRIC">
      </div>

      <div>
        <label>نوع الوقود (AR)</label>
        <input name="fuel_ar" value="{{ old('fuel_ar', $car->fuel_ar ?? '') }}" placeholder="كهرباء">
      </div>

      <div>
        <label>Transmission (EN)</label>
        <input name="transmission_en" value="{{ old('transmission_en', $car->transmission_en ?? '') }}" placeholder="AUTOMATIC">
      </div>

      <div>
        <label>ناقل الحركة (AR)</label>
        <input name="transmission_ar" value="{{ old('transmission_ar', $car->transmission_ar ?? '') }}" placeholder="أوتوماتيك">
      </div>

      <div>
        <label>Payment Options (EN)</label>
        <input name="payment_options_en" value="{{ old('payment_options_en', $car->payment_options_en ?? '') }}" placeholder="CASH OR INSTALLMENT">
      </div>

      <div>
        <label>خيارات الدفع (AR)</label>
        <input name="payment_options_ar" value="{{ old('payment_options_ar', $car->payment_options_ar ?? '') }}" placeholder="كاش أو تقسيط">
      </div>

      <div>
        <label>Body Type (EN)</label>
        <input name="body_type_en" value="{{ old('body_type_en', $car->body_type_en ?? '') }}" placeholder="SEDAN">
      </div>

      <div>
        <label>نوع الهيكل (AR)</label>
        <input name="body_type_ar" value="{{ old('body_type_ar', $car->body_type_ar ?? '') }}" placeholder="سيدان">
      </div>

      <div>
        <label>Air Conditioning (EN)</label>
        <input name="air_conditioning_en" value="{{ old('air_conditioning_en', $car->air_conditioning_en ?? '') }}" placeholder="AUTOMATIC AIR CONDITIONING">
      </div>

      <div>
        <label>مكيف الهواء (AR)</label>
        <input name="air_conditioning_ar" value="{{ old('air_conditioning_ar', $car->air_conditioning_ar ?? '') }}" placeholder="تكييف أوتوماتيك">
      </div>

      <div>
        <label>Color (EN)</label>
        <input name="color_en" value="{{ old('color_en', $car->color_en ?? '') }}" placeholder="BLUE">
      </div>

      <div>
        <label>اللون (AR)</label>
        <input name="color_ar" value="{{ old('color_ar', $car->color_ar ?? '') }}" placeholder="أزرق">
      </div>

      <div>
        <label>Interior (EN)</label>
        <input name="interior_en" value="{{ old('interior_en', $car->interior_en ?? '') }}" placeholder="FULL LEATHER">
      </div>

      <div>
        <label>المقصورة (AR)</label>
        <input name="interior_ar" value="{{ old('interior_ar', $car->interior_ar ?? '') }}" placeholder="جلد كامل">
      </div>
    </div>

    {{-- ===== Description bilingual ===== --}}
    <div style="margin-top:16px;">
      <label>Description (EN)</label>
      <textarea name="description_en" rows="5">{{ old('description_en', $car->description_en ?? '') }}</textarea>

      <label style="margin-top:10px;">الوصف (AR)</label>
      <textarea name="description_ar" rows="5">{{ old('description_ar', $car->description_ar ?? '') }}</textarea>
    </div>

{{-- ===== Current images ===== --}}
<div style="margin-top:16px;">
  <label>Current Images</label>
  <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:8px;">
    @foreach(($car->images ?? []) as $img)
      <img src="{{ asset('storage/'.$img) }}" style="width:110px;height:80px;object-fit:cover;border-radius:12px;">
    @endforeach
  </div>
  <small style="display:block;opacity:.75;margin-top:6px;">Main image is the first one.</small>
</div>

{{-- ===== Remove toggle ===== --}}
<div style="margin-top:14px;">
  <label style="display:flex;align-items:center;gap:10px;">
    <input type="checkbox" id="removeGalleryChk" name="remove_gallery" value="1">
    <span>Remove current images</span>
  </label>
  <small style="display:block;opacity:.75;margin-top:6px;">
    To replace images, enable "Remove current images" first.
  </small>
</div>

{{-- ===== Replace images (disabled unless remove checked) ===== --}}
<div style="margin-top:16px;">
  <label>Upload New Images (exactly 9)</label>
  <input type="file" id="newImagesInput" name="images[]" multiple accept="image/*" disabled>
  <small style="display:block;opacity:.75;margin-top:6px;">
    You must select exactly 9 images.
  </small>
</div>

<script>
  (function () {
    const chk = document.getElementById('removeGalleryChk');
    const input = document.getElementById('newImagesInput');
    if (!chk || !input) return;

    function sync() {
      input.disabled = !chk.checked;
      if (!chk.checked) input.value = ""; 
    }

    chk.addEventListener('change', sync);
    sync();
  })();
</script>

    <div style="margin-top:18px;display:flex;gap:10px;">
      <button class="adminBtn" type="submit">Update</button>
      <a class="adminBtnGhost" href="{{ route('admin.cars') }}">Back</a>
    </div>
    <div class="form-check my-3">
    <input 
        class="form-check-input" 
        type="checkbox" 
        name="is_special" 
        value="1" 
        id="is_special"
        {{ old('is_special', $car->is_special) ? 'checked' : '' }}
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
<script src="{{ asset('js/lang.js') }}"></script>
</script>
@endsection