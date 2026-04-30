@extends('layouts.admin')

@section('content')
<div class="adminWrap">
  <h1 class="adminH1">Dashboard</h1>

  <div class="adminStats">
  <div class="statCard">
  <div class="statLabel">All Visitors</div>
  <div class="statVal">{{ $allVisitors }}</div>
  <div class="statHint">Today: {{ $todayVisitors }}</div>
</div>

    <div class="statCard">
      <div class="statLabel">Pending Applies</div>
      <div class="statVal">{{ $pendingApplies }}</div>
      <a class="statLink" href="{{ route('admin.applications') }}">Open Applications →</a>
    </div>

    <div class="statCard">
      <div class="statLabel">Accepted Applies</div>
      <div class="statVal">{{ $acceptedApplies }}</div>
    </div>

    <div class="statCard">
      <div class="statLabel">Cars</div>
      <div class="statVal">{{ $carsCount }}</div>
      <a class="statLink" href="{{ route('admin.cars') }}">Manage Cars →</a>
    </div>
  </div>
</div>
@endsection