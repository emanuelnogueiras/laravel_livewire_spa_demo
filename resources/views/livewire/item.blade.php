<div>
    <div class="row">
        <div class="col-12 py-2">
            <div class="card shadow-sm rounded bg-white">
                <div class="card-header">
                    <h5 class="card-title m-0">{{$item->titulo}}</h5>
                </div>
                <div class="card-body">
                    {{$item->descripcion}}
                </div>
                <div class="card-footer">
                    <small class="text-secondary">{{$item->created_at->diffForHumans() ?? 'sin iinformación...'}}</small>
                </div>
            </div>
        </div>        
    </div>    

    <div class="text-center mt-2">
        <a href="/" class="btn btn-danger">Volver</a>
    </div>
</div>
