@extends('layouts.app')

@section('content')
<div class="container">

    <div class=" container justify-content-center">

        <form method="get" action="http://localhost:8000/resultado-cadastro" accept-charset="UTF-8">
            <div>
                <label for="titleNote">Título</label>
                <input type="text" id="titleNote" name="titleNote" class="form-control"/>
            </div>
            
            <br><br>

            <div>
                <label for="descriptionNote">Descrição</label>
                <textarea id="descriptionNote" name="descriptionNote" class="form-control vresize"></textarea>
            </div>
            
            <!--meta name="csrf-token" content="{{ csrf_token() }}"-->

            <br><br>

            <div>
                <!--input type="button" class="btn btn-secondary" value="Cancelar"-->
                <input type="submit" class="btn btn-success" value="Salvar">
            </div>
        </form>
    </div>

</div>
@endsection