<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Hotel;
use App\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function show(){
        
        $hotels = Hotel::all();
       
        return view('show')->with('hotels', $hotels);
    }
    public function show_comments($id){
        
        $comment = Hotel::find($id)->comments;
        $hotel = Hotel::find($id);
        
        return view('view_comments')->with('comments', $comment)->with('hotel', $hotel);
    }
}
