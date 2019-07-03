@extends('layouts.app')

@section('content')
<div class="container">

    <div class=" container justify-content-center">

        <form method="get" action="http://localhost:8000/update" accept-charset="UTF-8">
            <div>
                <label for="titleNote">Título</label>
                <input type="text" id="titleNote" name="title_note" class="form-control" value="{{$note -> title_note}}" />
            </div>
            
            <br><br>

            <div>
                <label for="descriptionNote">Descrição</label>
                <textarea id="descriptionNote" name="content_note" class="form-control vresize" >{{$note -> content_note}}</textarea>
            </div>
            
            <!--meta name="csrf-token" content="{{ csrf_token() }}"-->

            <br><br>
            <input type="hidden" name="id" value="{{$note -> id}}">
            <div>
                <!--input type="button" class="btn btn-secondary" value="Cancelar"-->
                <input type="submit" class="btn btn-success" value="Salvar">
            </div>
        </form>
    </div>

</div>
@endsection