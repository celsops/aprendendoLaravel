<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Note;

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
    public function index(Request $request)
    {   
        $email = Auth::user()->email;
        $notes = Note::where('email_fk',$email) -> get();
        //$notes = DB::select('select * from notes where email_fk = :email', ['email' => Auth::user()->email]);

        return view('home', compact('notes'));
        
    }
}
