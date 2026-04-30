@extends('layouts.admin')

@section('content')
<div class="adminWrap">
  <div class="adminRow">
    <h1 class="adminH1">Cars</h1>
    <a class="adminBtn" href="{{ route('admin.cars.create') }}">+ Add Car</a>
  </div>

  @if(session('ok'))
    <div class="adminOk">{{ session('ok') }}</div>
  @endif

  <div class="tableWrap">
    <table class="adminTable">
      <thead>
        <tr>
          <th>Image</th>
          <th>Brand</th>
          <th>Model</th>
          <th>Year</th>
          <th>Price</th>
          <th>KM</th>
          <th>City</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($cars as $car)
          @php
            $thumb = $car->image ? asset('storage/'.$car->image) : asset('img/mercedes.png');
          @endphp
          <tr>
            <td>
              <img src="{{ $thumb }}" alt="thumb" style="width:70px;height:48px;object-fit:cover;border-radius:10px;">
            </td>
            <td>{{ strtoupper($car->brand) }}</td>
            <td>{{ $car->model }}</td>
            <td>{{ $car->year }}</td>
            <td>EGP {{ number_format($car->price) }}</td>
            <td>{{ number_format($car->kilometres) }}</td>
            <td>{{ $car->city }}</td>
            <td class="actions">
              <a class="btnSm" href="{{ route('admin.cars.edit', $car->id) }}">Edit</a>

              <form method="POST" action="{{ route('admin.cars.delete', $car->id) }}">
                @csrf @method('DELETE')
                <button class="btnSm btnDanger" type="submit" onclick="return confirm('Delete this car?')">Delete</button>
              </form>
            </td>
          </tr>
        @empty
          <tr><td colspan="8">No cars yet.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <div style="margin-top:14px;">
    {{ $cars->links() }}
  </div>
</div>
@endsection