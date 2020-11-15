<div>
	<div class="row">
		{{-- COLUMNA FORMULARIOS --}}
		<div class="col-md-12 col-lg-4">
			{{-- CARD FORMULARIO --}}
			<div class="card">
                <div class="card-header"><span>Buscar</span></div>
                <div class="card-body">
					<div class="form-group">                        
						<label for="criterio"><span>Seleccionar criterio de búsqueda:</span></label>     
						<select class="form-control" id="criterio" wire:model="criterio">
							<option value="" selected>...</option>
							<option value="2" >División</option>
							<option value="3" >Batallón</option>
							<option value="4" >Regimiento</option>
							<option value="1" >Todos</option>
						</select>
						@error('criterio') 
							<small class="text-danger">{{ $message }}</small>
						@enderror                 
					</div>	
					{{-- SELECCIÓN DE FORMULARIO --}}
		            @switch($criterio)
		                @case(null)		                	
		                    @break		            
		                @case('1')
		                    @include('partials.forms.busqueda._todos')
		                    @break
		                @case('2')
		                    DIVISIÓN
		                    @break           
		                @default
						<div class="alert alert-warning" role="alert">
							No existe formulario para esta opción.
						</div>
		            @endswitch									
                </div>
            </div>
		</div>
		{{-- CARD RESULTADOS --}}
		<div class="col-md-12 col-lg-8">
			<div class="card">
                <div class="card-header"><span>Resultados búsqueda</span></div>
                <div class="card-body">
                {{-- SELECCION DE TABLAS --}}
                @switch($criterio)
                    @case(null)
                        @break
					@case('1')
						@if($coleccion)
							@include("partials.tablas.busqueda._todos", ['coleccion' => $coleccion])	
						@endif
						@break
					@case('2')
						DIVISIÓN
						@break                     
                    @default
                @endswitch
                
                </div>
            </div>
		</div>
	</div>
</div>