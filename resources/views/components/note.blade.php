<div class="row justify-content-center componente">

    <link href="{{ asset('css/note.css') }}" rel="stylesheet">
    @foreach($notes as $note)
    <div class="col-md-8">
        <div class="card">
            <div class="card-header cabecario">
                <div class="main-content-cabecario"> 
                    {{ $note -> title_note }} 
                </div> 
                
                <div class="content-cabecario"> 
                    <!-- Icons -->
                    <i class='fas fa-pen icon edit-icon'></i>  
                    &emsp;
                    <i class='far fa-times-circle icon delete-icon'></i>
                </div>
            </div>
            
            <div class="card-body">
                {{ $note -> content_note }}
            </div>
        </div>
    </div>
    @endforeach
</div>


