@extends("layouts.app")
@section("contenido")
    <div class="container mt-4">        
        <h2>Editar Item</h2>        
        <hr>
        <div class="row">
            <div class="col-md-12 my-2">                
                @livewire("form-edit", ["item" => $item])                
            </div>                        
        </div>        
    </div>    
@endsection