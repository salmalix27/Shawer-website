@extends('layouts.admin')

@section('content')
<div class="adminWrap">
  <h1 class="adminH1">Applications</h1>

  @if(session('ok')) <div class="adminOk">{{ session('ok') }}</div> @endif

  <h2 class="adminH2">Pending</h2>
  <div class="tableWrap">
    <table class="adminTable">
      <thead>
        <tr>
          <th>Name</th><th>Phone</th><th>Product</th><th>Car</th><th>Comment</th><th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($pending as $p)
          <tr>
            <td>{{ $p->name }}</td>
            <td>{{ $p->phone }}</td>
            <td>{{ $p->product }} {{ $p->sub_product ? ' / '.$p->sub_product : '' }}</td>
            <td>{{ $p->car_brand }} {{ $p->car_model }}</td>
            <td>{{ $p->car_comment }}</td>
            <td class="actions">
              <form method="POST" action="{{ route('admin.applications.accept',$p->id) }}">
                @csrf
                <button class="btnSm btnOk" type="submit">Accept</button>
              </form>

              <form method="POST" action="{{ route('admin.applications.delete',$p->id) }}">
                @csrf @method('DELETE')
                <button class="btnSm btnDanger" type="submit">Delete</button>
              </form>
            </td>
          </tr>
        @empty
          <tr><td colspan="6">No pending applications.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>

  <h2 class="adminH2" style="margin-top:30px;">Accepted</h2>
  <div class="tableWrap">
    <table class="adminTable">
      <thead>
        <tr>
          <th>Name</th><th>Phone</th><th>Product</th><th>Car</th><th>Accepted At</th><th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @forelse($accepted as $a)
          <tr>
            <td>{{ $a->name }}</td>
            <td>{{ $a->phone }}</td>
            <td>{{ $a->product }} {{ $a->sub_product ? ' / '.$a->sub_product : '' }}</td>
            <td>{{ $a->car_brand }} {{ $a->car_model }}</td>
            <td>{{ $a->accepted_at }}</td>
            <td>
              <form method="POST" action="{{ route('admin.applications.delete',$a->id) }}">
                @csrf @method('DELETE')
                <button class="btnSm btnDanger" type="submit">Delete</button>
              </form>
            </td>
          </tr>
        @empty
          <tr><td colspan="6">No accepted applications.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection