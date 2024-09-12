<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    public function dashboard(): ViewContract|Factory
    {
        return view('admin.dashboard');
    }

    public function products(): ViewContract|Factory
    {
        return view('admin.products');
    }

    public function inventory(): ViewContract|Factory
    {
        return view('admin.inventory');
    }

    public function reports(): ViewContract|Factory
    {
        return view('admin.reports');
    }
}
