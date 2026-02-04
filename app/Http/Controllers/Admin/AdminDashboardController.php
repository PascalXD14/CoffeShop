<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{

public function index()
{
    $totalUsers = User::count();
    $totalMenu = Product::count();
    $totalOrders = Order::count();
    $totalRevenue = Order::where('status', 'Paid')->sum('total_price');

    $popularMenus = Order::select('product_id', DB::raw('SUM(qty) as total_sold'))
        ->groupBy('product_id')
        ->orderByDesc('total_sold')
        ->with('product')
        ->limit(3)
        ->get();

    $recentOrders = Order::with('user')->latest()->limit(5)->get();

    // Revenue charts
    $revenue30Days = Order::selectRaw('DATE(created_at) as date, SUM(total_price) as total')
        ->where('status', 'Paid')
        ->where('created_at', '>=', now()->subDays(30))
        ->groupBy('date')
        ->orderBy('date')
        ->get();

    $revenue3Months = Order::selectRaw('MONTH(created_at) as month, SUM(total_price) as total')
        ->where('status', 'Paid')
        ->where('created_at', '>=', now()->subMonths(3))
        ->groupBy('month')
        ->orderBy('month')
        ->get();

    $revenue1Year = Order::selectRaw('MONTH(created_at) as month, SUM(total_price) as total')
        ->where('status', 'Paid')
        ->whereYear('created_at', now()->year)
        ->groupBy('month')
        ->orderBy('month')
        ->get();

    return view('admin.dashboard', compact(
        'totalUsers',
        'totalMenu',
        'totalOrders',
        'totalRevenue',
        'popularMenus',
        'recentOrders',
        'revenue30Days',
        'revenue3Months',
        'revenue1Year'
    ));
}

public function exportPdf()
{
    $totalUsers = User::count();
    $totalMenu = Product::count();
    $totalOrders = Order::count();
    $totalRevenue = Order::sum('total_price');

    $recentOrders = Order::with('user')->latest()->limit(10)->get();

    $data = compact('totalUsers', 'totalMenu', 'totalOrders', 'totalRevenue', 'recentOrders');

    $pdf = Pdf::loadView('admin.report_pdf', $data)
        ->setPaper('A4', 'portrait');

    return $pdf->download('laporan-dashboard.pdf');
}



}
