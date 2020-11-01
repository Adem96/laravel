<?php

namespace App\Http\Controllers;
use App\User;
use App\Product;
use Illuminate\Support\Facades\Auth;
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
        $user = User::find(Auth::user()->id);
       
        $products = Product::whereHas('users', function($q) use($user) {
            $q->where('user_id', $user->id);
        })->get();

        return view('home', ['products' => $products]);
    }
}
