<?php

// app/Http/Controllers/Admin/AdminApplicationsController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactRequest;

class AdminApplicationsController extends Controller {

  public function index() {
    $pending = ContactRequest::where('status','pending')->latest()->get();
    $accepted = ContactRequest::where('status','accepted')->latest()->get();
    return view('admin.applications', compact('pending','accepted'));
  }

  public function accept($id) {
    $req = ContactRequest::findOrFail($id);
    $req->update([
      'status' => 'accepted',
      'accepted_at' => now(),
    ]);
    return back()->with('ok', 'Application accepted.');
  }

  public function destroy($id) {
    ContactRequest::findOrFail($id)->delete();
    return back()->with('ok', 'Application deleted.');
  }
}