<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
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
    public function index(Review  $review)
    {
		
		
		$review = Review::where('star','>=',4)->whereNotNull('massege')->take(6)->get();
        return view('home',compact('review'));
    }
}
