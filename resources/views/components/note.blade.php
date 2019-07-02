<div class="row justify-content-center componente">

    <link href="{{ asset('css/note.css') }}" rel="stylesheet">
   
    <div class="col-md-8">
        <div class="card">
            <div class="card-header cabecario">
                <div class="main-content-cabecario"> 
                    {{ $data['title'] }} 
                </div> 
                
                <div class="content-cabecario"> 
                    <!-- Icons -->
                    <i class='fas fa-pen icon edit-icon'></i>  
                    &emsp;
                    <i class='far fa-times-circle icon delete-icon'></i>
                </div>
            </div>
            
            <div class="card-body">
                {{ $data['text'] }}
            </div>
        </div>
    </div>
</div>


