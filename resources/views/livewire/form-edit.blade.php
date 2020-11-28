<div>

    <div class="form-group">
        <label>Título</label>
        <input type="email" class="form-control" wire:model="titulo">
        @error("titulo")<small class="form-text text-danger">{{$message}}</small>@enderror
    </div>

    <div class="form-group">
        <label>Descripcion</label>
        <textarea class="form-control" rows="3" wire:model="descripcion"></textarea>
        @error("descripcion")<small class="form-text text-danger">{{$message}}</small>@enderror
    </div>

    <div class="form-group">
        <a class="btn btn-secondary" href="/">Cancelar</a>
        <button class="btn btn-primary" wire:click="actualizar">Actualizar</button>
    </div>

</div>
