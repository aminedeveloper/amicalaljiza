<?php

namespace App\Http\Controllers\v1\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('v1.dashboard.index');
    }
}
