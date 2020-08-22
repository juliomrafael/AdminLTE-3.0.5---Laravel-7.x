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
        return view('index');
    }
    public function users()
    {
        return view('users');
    }
    public function account()
    {
        return view('account');
    }
    public function datatable()
    {
        return view('datatable');
    }
    public function add()
    {
        return view('add');
    }
    public function details()
    {
        return view('details');
    }
    public function edit()
    {
        return view('edit');
    }
}
