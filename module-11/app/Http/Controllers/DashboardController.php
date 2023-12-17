<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale; // Adjust namespace and model name based on your project structure


class DashboardController extends Controller
{
    
public function index()
{
    $todaySales = Sale::whereDate('created_at', today())->sum('amount');
    $yesterdaySales = Sale::whereDate('created_at', today()->subDays(1))->sum('amount');
    // Fetch sales for this month and last month similarly

    return view('dashboard', compact('todaySales', 'yesterdaySales', /* other sales data */));
}
}