<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Show the admin dashboard with basic platform stats.
     */
    public function index(): View
    {
        return view('admin.dashboard', [
            'totalUsers' => User::count(),
            'newUsersThisMonth' => User::where('created_at', '>=', now()->startOfMonth())->count(),
            'totalAdmins' => Admin::count(),
            'recentUsers' => User::latest()->limit(5)->get(['id', 'name', 'email', 'created_at']),
        ]);
    }
}
