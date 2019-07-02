@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você está logado!
                </div>
            </div>
        </div>
    </div>
    <br>
    <a href="http://localhost:8000/create-note" class="btn btn-warning">Adicionar anotação</a>
    <hr>
    <br>

    @foreach()
        @component
        @endcomponent
    @endforeach 

        
</div>
@endsection

