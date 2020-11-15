<div class="form-group">                        
	<div class="form-group">
		<label for="nombre">Nombre:</label>
		<input type="text" class="form-control" id="nombre" wire:model="nombre">
		@error('nombre') 
			<small class="text-danger">{{ $message }}</small>
		@enderror
	</div>  
	<div class="form-group">
		<label for="fecha">Fecha:</label>
		<input type="date" class="form-control" id="fecha" wire:model="fecha">
		@error('fecha') 
			<small class="text-danger">{{ $message }}</small>
		@enderror
	</div>
	<div class="form-group">
		<button type="button" class="form-control btn btn-primary" wire:click="buscarEnTodos">Buscar</button>
	</div>               
</div>	