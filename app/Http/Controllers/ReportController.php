<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function dashboard()
    {
        $reports = Auth::user()->reports()->with('service')->latest()->get();
        $services = Service::all();
        return view('dashboard', compact('reports', 'services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'service_id' => 'required|exists:services,id',
            'payment' => 'required|string|in:cash,card',
        ]);

        Auth::user()->reports()->create($request->all());

        return redirect()->route('dashboard')->with('success', 'Заявка успешно создана!');
    }
}
