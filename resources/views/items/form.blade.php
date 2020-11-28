@extends("layouts.app")
@section("contenido")
    <div class="container mt-4">        
        <h2>Crear Item</h2>        
        <hr>
        <div class="row">
            <div class="col-md-12 my-2">                
                @livewire("item-form")                
            </div>                        
        </div>        
    </div>    
@endsection