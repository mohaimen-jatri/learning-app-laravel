<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Show the logged in user's dashboard.
     */
    public function index(): View
    {
        return view('user.dashboard');
    }
}
