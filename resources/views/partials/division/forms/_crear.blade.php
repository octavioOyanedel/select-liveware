<div class="card">
    <div class="card-header"><h4 class="mb-0">Nueva División</h4></div>

    <div class="card-body">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input type="text" class="form-control" id="nombre" wire:model="nombre">
			@error('nombre') 
				<small class="text-danger">{{ $message }}</small>
			@enderror
		</div>
		<div class="form-group">
			<button wire:click="crear" type="button" class="form-control btn btn-primary">Guardar</button>
		</div>      
	</div>	
</div>