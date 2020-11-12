<div>
	{{-- select división --}}
	<x-select-modal label="División" idModal="#modalDivision" id="division" wireModel="division" :colecciones="$colecciones" key="divisiones"/>

	{{-- select batallón --}}
	<x-select-modal label="Batallón" idModal="#modalBatallon" id="batallon" wireModel="batallon" :colecciones="$colecciones" key="batallones"/>	

	{{-- select regimiento --}}
	<x-select-modal label="Regimiento" idModal="#modalRegimiento" id="regimiento" wireModel="regimiento" :colecciones="$colecciones" key="regimientos"/>	

	{{-- modal nueva división --}}
	<x-modal idModal="modalDivision" labelModal="modalDivisionLabel" titulo="Nueva División" wireClick="guardarDivision" colecciones=""/>

	{{-- modal nuevo batallón --}}
	<x-modal idModal="modalBatallon" labelModal="modalBatallonLabel" titulo="Nuevo Batallón" wireClick="guardarBatallon" :colecciones="$colecciones"/>

	{{-- modal nuevo regimiento --}}
	<x-modal idModal="modalRegimiento" labelModal="modalRegimientoLabel" titulo="Nuevo Regimiento" wireClick="guardarRegimiento" :colecciones="$colecciones"/>

</div>
@push('scripts')
    <script type="text/javascript">
        window.livewire.on('limpiarModalForm', () => {
            $('.limpiar-input-modal').val('');
        });
    </script>
    <script type="text/javascript">
        window.livewire.on('cerrarModal', () => {
            $('#modalDivision').modal('hide');
            $('#modalBatallon').modal('hide');
            $('#modalRegimiento').modal('hide');
        });
    </script>
    <script type="text/javascript">
        window.livewire.on('activarSpinner', () => {
 			console.log('ACTIVAR');   
 			$(".spinner-boton").removeClass("d-none");   	
        });
    </script>
    <script type="text/javascript">
        window.livewire.on('desactivarSpinner', () => {
			console.log('DESACTIVAR');
			$(".spinner-boton").addClass("d-none");
        });
    </script>    
@endpush