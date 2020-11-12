<div class="form-group">						
    <label for="division"><span>División</span></label>     
	<select class="form-control" id="division" wire:model="division">
		<option value="" selected>...</option>
		@foreach($colecciones['divisiones'] as $item)
			<option value="{{ $item->id }}">{{ $item->name }}</option>
		@endforeach
	</select>	
</div>	
<div class="form-group">
    <label for="batallon"><span>Batallón</span></label>					 
    <select class="form-control" id="batallon" wire:model="batallon">
		<option value="" selected>...</option>
		@foreach($colecciones['batallones'] as $item)
			<option value="{{ $item->id }}">{{ $item->name }}</option>			
		@endforeach
    </select>
</div>
<div class="form-group">
	<label for="nuevo_regimiento">Regimiento</label>				
	<input type="text" class="limpiar-input-modal form-control" id="nuevo_regimiento" wire:model="nuevo_regimiento_modal">
	@error('nuevo_regimiento_modal') 
		<small class="text-danger">{{ $message }}</small>
	@enderror
</div>