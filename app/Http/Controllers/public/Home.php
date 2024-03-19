<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Home extends Controller
{
    function home() : View|RedirectResponse
    {
        return view('public.home');
    }
}
