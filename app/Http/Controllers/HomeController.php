<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class HomeController extends Controller
{

    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('home.index');
    }

    /**
     * @return Factory|View
     */
    public function contact()
    {
        return view('static-pages.contact');
    }
}
