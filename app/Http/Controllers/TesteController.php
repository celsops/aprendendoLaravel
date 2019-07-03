<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
class TesteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $param = $request -> all();

        
        var_dump($param);

        if(isset($param['id'])){
            $id = $param['id'];
        }   
        if(isset($param['edit'])){
            echo "edit";
        }
        else if(isset($param['delete'])){
            echo "delete";
            Note::where('id',$id) -> delete();
        }
        $notes = Note::all();
        // Note::where('id',1) -> delete();
        return view('teste',compact('notes'));
    }
}
