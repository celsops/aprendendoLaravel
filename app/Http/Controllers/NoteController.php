<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Note;


class NoteController extends Controller
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
        return view('home');
    }

    public function create()
    {
        return view('createNote');
    }

    public function store(Request $request) //, $titleNote, $descriptionNote)
    {
        $params = $request->all();
        $title = $params['titleNote'];
        $description = $params['descriptionNote'];
        
        $new_note = new Note($title);
        $new_note->set_content($description);
        
        //DB::insert('insert into notes (email_fk, content_note, title_note) values (?, ?, ?)', [Auth::user()->email, $description, $title]);
        //echo '<script>alert("HI")</script>';
        //return redirect('home');
    }
}
