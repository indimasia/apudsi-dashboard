<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function dashboardOverview1(): View
    {
        $users = User::count();
        $sellers = User::role('seller')->count();
        $buyers = User::role('user')->count();
        return view('pages/dashboard-overview-1', compact('users', 'sellers', 'buyers'));
    }
}
