<div>
	{{-- Ventana Modal --}}
	<div wire:ignore.self class="modal fade" id="{{ $idModal }}" tabindex="-1" aria-labelledby="{{ $labelModal }}" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="{{ $labelModal }}">{{ $titulo }}</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					{{-- Selección de formulario --}}
					@switch($idModal)
					    @case("modalDivision")
					        @include("partials.modals._nueva_division")	
					        @break
					    @case("modalBatallon")
					        @include("partials.modals._nuevo_batallon")	
					        @break
					    @case("modalRegimiento")
					        @include("partials.modals._nuevo_regimiento")	
					        @break						        			        				
					    @default
					        <span>No existe formulario para esta opción.</span>
					@endswitch
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<button type="button" class="btn btn-primary" wire:click="{{ $wireClick }}">Guardar</button>
				</div>
			</div>
		</div>
	</div>
</div>