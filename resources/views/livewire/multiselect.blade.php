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
 			$(".spinner-boton").removeClass("d-none");   	
        });
    </script>
    <script type="text/javascript">
        window.livewire.on('desactivarSpinner', () => {
			$(".spinner-boton").addClass("d-none");
        });
    </script> 
    <script type="text/javascript">
        window.livewire.on('alertaOk', texto => {
            Swal.fire({
                toast: true,
                position: 'bottom-end',
                icon: 'success',
                title: texto,
                showConfirmButton: false,
                timer: 5000,
                background: '#38c172',
                iconColor: '#fff'
            })   
        });
    </script>
    <script type="text/javascript">
        window.livewire.on('alertaError', texto => {
            Swal.fire({
                toast: true,
                position: 'bottom-end',
                icon: 'error',
                title: texto,
                showConfirmButton: false,
                timer: 5000,
                background: '#e3342f',
                iconColor: '#fff'
            })   
        });
    </script>  
@endpush