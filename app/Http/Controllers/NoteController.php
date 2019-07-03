<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Note;
use App\User;


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
    public function update(Request $request)
    {
        $params = $request->all();

        // var_dump($params);

        $note = Note::find($params['id']);
        $note -> title_note = $params['title_note'];
        $note -> content_note = $params['content_note'];

        $note -> save();
        // return view('update');
        return redirect("/home");
    }
    public function store(Request $request) //, $titleNote, $descriptionNote)
    {
        $params = $request->all();

        $email = Auth::user() -> email;

        $params['email_fk'] = $email;
        // array_push($params,$email);

//        var_dump($params);

        $note = Note::create($params);

        return redirect("/home");

        // echo "Série com id {$note->id} criada: {$note->titleNote}";

        // $title = $params['titleNote'];
        // $description = $params['descriptionNote'];
        
        // $new_note = new Note($title);
        // $new_note->set_content($description);
        
        //DB::insert('insert into notes (email_fk, content_note, title_note) values (?, ?, ?)', [Auth::user()->email, $description, $title]);
        //echo '<script>alert("HI")</script>';
        //return redirect('home');
    }


    public function delete_command(Request $request)
    {
        $params = $request -> all();
        if(isset($params['id'])){
            Note::where('id',$params['id']) -> delete();
        }
        return redirect('home');
    }
}
