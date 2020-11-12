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
	<label for="nuevo_batallon">Batallón</label>				
	<input type="text" class="limpiar-input-modal form-control" id="nuevo_batallon" wire:model="nuevo_batallon_modal">
	@error('nuevo_batallon_modal') 
		<small class="text-danger">{{ $message }}</small>
	@enderror
</div>	