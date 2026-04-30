<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactRequest;


class ContactRequestController extends Controller
{


public function store(Request $request)
{
    $data = $request->validate([
        'name' => ['required','string','max:255'],
        'phone' => ['required','string','max:50'],
        'product' => ['required','string','max:255'],
        'sub_product' => ['nullable','string','max:255'],
        'car_brand' => ['nullable','string','max:255'],
        'car_model' => ['nullable','string','max:255'],
        'car_comment' => ['nullable','string','max:255'],
    ]);

    ContactRequest::create($data);

    return redirect()->back()->with('success', 'Your request has been sent!');
}
}
