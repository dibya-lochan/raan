<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Hotel;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create(){
        if(Auth::check()){
            $user = Auth::user();
            $userid = $user->id;
            if($userid == 1){
                return view('create');
            }else{
                return redirect('/login');
            }
        }else{
            
            return redirect('/login');
        }
        
    }
    
    public function create_hotel(Request $request){
        
        $name = $request->input('name');
        $description = $request->input('description');       
        
        Hotel::firstOrCreate(['name' => $name, 'description' => $description]);
        
        $hotels = Hotel::all();
        
        return view('list_hotels')->with('hotels', $hotels);
        
    }
}

