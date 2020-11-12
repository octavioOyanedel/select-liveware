<div>
	<div class="form-group">
	    <label for="{{ $id }}"><span>{{ $label }}</span></label>
	    <a class="text-primary float-right" href="#" data-toggle="modal" data-target="{{ $idModal }}" wire:click="limpiarModalForm"><i role="button" class="fas fa-plus-circle"></i></a>	     
		<select class="form-control" id="{{ $id }}" wire:model="{{ $wireModel }}">
			<option value="" selected>...</option>
			@foreach($colecciones[$key] as $item)
				<option value="{{ $item->id }}">{{ $item->name }}</option>			
			@endforeach
		</select>
	</div>
</div>