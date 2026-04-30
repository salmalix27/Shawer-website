<?php
// app/Http/Controllers/Admin/AdminDashboardController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visit;
use App\Models\ContactRequest;
use App\Models\Car;

class AdminDashboardController extends Controller {
  public function index() {
 $allVisitors = \App\Models\Visit::distinct('ip')->count('ip');
 $todayVisitors = \App\Models\Visit::whereDate('visited_on', now()->toDateString())
  ->distinct('ip')
  ->count('ip');
    $pendingApplies = \App\Models\ContactRequest::where('status','pending')->count();
    $acceptedApplies = \App\Models\ContactRequest::where('status','accepted')->count();
    $carsCount = \App\Models\Car::count();

  return view('admin.dashboard', compact(
  'allVisitors','todayVisitors',
  'pendingApplies','acceptedApplies','carsCount'
));
  }
}