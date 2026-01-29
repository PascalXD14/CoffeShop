<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();

        return view('admin.dashboard', compact('totalUsers'));
    }
}
