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
							<td><a role="button" class="text-danger" title="Eliminar"><i class="fas fa-trash"></i></a></td>
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