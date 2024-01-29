<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'saran' => Saran::all()
        ]);
    }
}
