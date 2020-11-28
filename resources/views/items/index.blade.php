@extends("layouts.app")
@section("contenido")
    <div class="container mt-4">
        <div class="float-right">
            <a href="/items/add" class="btn btn-success shadow-sm">+</a>
        </div>
        <h2>Items</h2>        
        <hr>
        <div class="row">
            <div class="col-md-12 my-2">                
                @livewire("item-list")                
            </div>                        
        </div>        
    </div>    
@endsection