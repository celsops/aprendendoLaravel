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
<<<<<<< Updated upstream
    {   
        $email = Auth::user()->email;
        $notes = Note::where('email_fk',$email) -> get();
        //$notes = DB::select('select * from notes where email_fk = :email', ['email' => Auth::user()->email]);
=======
    {
        // var_dump($notes);
        $param = $request -> all();
        
        // var_dump($param);

        if(isset($param['id'])){
            $id = $param['id'];
        }   
        if(isset($param['edit'])){
            // echo "edit";
            $note = Note::find($id);
            // var_dump($note);
            return view('update',compact('note'));
            // return redirect('/update',compact('note'));
        }
        else if(isset($param['delete'])){
            echo "delete";
            Note::where('id',$id) -> delete();
        }
        // $notes = Note::all();
        $email = Auth::user() -> email;
        $notes = Note::where('email_fk',$email) -> get();

>>>>>>> Stashed changes

        return view('home', compact('notes'));
        
    }
}
