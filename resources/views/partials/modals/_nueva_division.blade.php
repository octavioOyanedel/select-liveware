<div class="form-group">
	<label for="nueva_division">División</label>
	<input type="text" class="limpiar-input-modal form-control" id="nueva_division" wire:model="nueva_division_modal" autofocus>
	@error('nueva_division_modal') 
		<small class="text-danger">{{ $message }}</small>
	@enderror
</div>