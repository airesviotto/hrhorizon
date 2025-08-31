<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
        {
            $labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'];
            $chartData = [120, 150, 90, 200, 170, 220];

            return view('dashboard.main-dashboard', compact('labels', 'chartData'));
        }
}
