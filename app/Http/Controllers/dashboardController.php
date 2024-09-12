<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View as ViewContract;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    public function overview(): ViewContract|Factory
    {
        return view('admin.overview');
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
    public function pos(): ViewContract|Factory
    {
        return view('admin.pos');
    }
}

