<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Dashboard extends Controller
{
    function super_admin_dashboard(): View|RedirectResponse
    {
        return view('admin.dashboard.super_admin_dashboard');
    }
}
