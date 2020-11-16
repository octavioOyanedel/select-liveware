<div class="card">
    <div class="card-header">
    	<h4 class="mb-0">Editar División
    		<a class="float-right" wire:click="mostrarFormCrear" href="#" title="Crear" title="Agregar"><i class="fas fa-plus"></i></a>
    	</h4>
    </div>

    <div class="card-body">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input type="text" class="form-control" id="nombre" wire:model="nombre">
			@error('nombre') 
				<small class="text-danger">{{ $message }}</small>
			@enderror
		</div>
		<div class="form-group">
			<button wire:click="editar" type="button" class="form-control btn btn-primary">Editar</button>
		</div>      
	</div>	
</div>