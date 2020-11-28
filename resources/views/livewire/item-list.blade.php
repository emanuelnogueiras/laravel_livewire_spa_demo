<div>
    <div class="row">

        <div class="col-12">
            <ul class="list-group m-1 rounded">                        
                @foreach($items as $item)                    
                    <li class="list-group-item" wire:key="{{ $loop->index }}">
                        
                        <div class="row">
                            <div class="col-8">
                                <h5 class="card-title m-0">{{$item->titulo}}</h5>
                            </div>
                            <div class="col-4 text-right">                                
                                <a href="/items/delete/{{$item->id}}" class="text-decoration-none text-danger mx-1">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <a href="/items/edit/{{$item->id}}" class="text-decoration-none text-warning mx-1">
                                    <i class="fa fa-edit"></i>
                                </a>                                
                                <a href="/items/show/{{$item->id}}" class="text-decoration-none text-success mx-1">
                                    <i class="fa fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                        
                    </li>                                    
                @endforeach
            </ul>
        </div>

        @if(!count($items ?? []) > 0)
            <div class="col-12 py-2">
                <div class="alert alert-warning">no hay items</div>
            </div>            
        @endif

    </div>
</div>
