<div class="card">
	<div class="card-header">
		<h4 class="mb-0">Divisiones</h4>
	</div>
	<div class="card-body">
		@if ($divisiones->count() > 0)
			<div class="table-responsive">
				<table class="table table-sm">
					<thead>
						<tr>
						<th scope="col">Nombre</th>
						<th scope="col">Fecha Creación</th>
						<th scope="col" colspan="3" class="text-center">Acciones</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($divisiones as $d)                
						<tr>
							<td>{{ $d->name }}</td>                            
							<td>{{ $d->created_at->diffForHumans() }}</td>
							<td><a wire:click="mostrarTablaDivision({{ $d->id }})" role="button" class="text-success"><i class="fas fa-eye" title="Ver"></i></a></td>
							<td><a wire:click="mostrarFormEditar({{ $d->id }})" role="button" class="text-primary"><i class="fas fa-edit" title="Editar"></i></a></td>
							<td><a wire:click="mostrarModalEliminar({{ $d->id }})" role="button" class="text-danger" title="Eliminar"><i class="fas fa-trash"></i></a></td>
						</tr>
					@endforeach
					</tbody>
				</table>

				<div class="float-right">
					{{ $divisiones->links() }}
				</div>
				
			</div>
		@else
			<div class="alert alert-warning" role="alert">
				No existen registros.
			</div>
		@endif 
	</div>	
</div>
{{-- Ventana Modal --}}
<div wire:ignore.self class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="modalEliminarLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalEliminarLabel">Eliminar División</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body text-center">
				<h5 class="text-danger">
					<i class="fas fa-exclamation-triangle"></i>
				</h5>
				<span>¿Desea eliminar el registro?</span>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				<button type="button" class="btn btn-danger" wire:click="eliminar">Eliminar
					<div class="spinner-boton spinner-border spinner-border-sm d-none" role="status">
						<span class="sr-only">Loading...</span>
					</div>
				</button>
			</div>
		</div>
	</div>
</div>