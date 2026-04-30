<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function create()
    {
        return view('apply');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:2|max:100',
            'phone' => 'required|min:8|max:30',
            'product' => 'required|max:100',
            'loan_amount' => 'required|numeric|min:1',
        ]);

        $data['status'] = 'NEW';

        Application::create($data);

        return redirect()->route('apply.create')->with('success', 'Application sent ✅');
    }
}
