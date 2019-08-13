<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Laratrust::HasRole('admin')) {
            return $this->AdmnDasboard();
        }
        if (Laratrust::HasRole('admin')) {
            return $this->memberDashboard();
    }
        return view('home');
    }
    protected function adminDashboard()
    {
        return view('/admin/home');
    }
    protected function memberDashboard()
    {
        return view('home');
    }
}
