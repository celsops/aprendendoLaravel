<div class="row justify-content-center componente">

    <link href="{{ asset('css/note.css') }}" rel="stylesheet">
    
    <div class="col-md-8">
        <div class="card">
            <div class="card-header cabecario">
                <div class="main-content-cabecario"> 
                    {{ $note -> title_note }} 
                </div> 
                
                <div class="content-cabecario"> 
                    <!--a href="?edit=true&id={{$note -> id}}" -->
                    <a href="/update-command?id={{$note->id}}">
                        <i class='fas fa-pen icon edit-icon' ></i>  
                    </a>
                    <!--a href="?delete=true&id={{$note -> id}}"-->
                    <a href="/delete-note-command?id={{$note->id}}">
                        <i class='far fa-times-circle icon delete-icon' ></i>
                    </a>
                </div>
            </div>
            <div class="card-body">
                {{ $note -> content_note }}
            </div>
        </div>
    </div>
</div>


