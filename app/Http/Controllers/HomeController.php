<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

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
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalUsers = User::count();
        $activeUsers = User::where('user_status', 1)->count(); 
        return view('home', compact('totalUsers', 'activeUsers'));
    }
}
