@extends('layouts.app')

@section('content')
<div class="container">
    <a href="http://localhost:8000/create-note" class="btn btn-warning">Adicionar anotação</a>
    <hr>
    <br><br>
    <div class="container">

        
        @foreach($notes as $note)
            @component('components.note', ['note'=>$note])
            @endcomponent
        @endforeach

    </div>
</div>
    
    


        
</div>
@endsection

