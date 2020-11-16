<div class="card">
	<div class="card-header">
		<h4 class="mb-0">Division: {{ $division->name }} 
			<a class="float-right" wire:click="listar" href="#" title="Ver listado"><i class="fas fa-list"></i></a>
		</h4>
		
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-sm">
				<tbody>
					<tr>
						<th scope="row">ID</th>
						<td>{{ $division->id }}</td>
					</tr>					
					<tr>
						<th scope="row">Nombre</th>
						<td>{{ $division->name }}</td>
					</tr>
					<tr>
						<th scope="row">Fecha Creación</th>
						<td>{{ $division->created_at }}</td>
					</tr>
					<tr>
						<th scope="row">Fecha Última Modificación</th>
						<td>{{ $division->updated_at->diffForHumans() }}</td>
					</tr>								
				</tbody>
			</table>
		</div>
	</div>	
</div>