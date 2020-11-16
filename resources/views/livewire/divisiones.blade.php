<div>	
	<div class="row">

		{{-- CARD FORM --}}
		<div class="col-sm-12 col-md-4">
			@include("partials.division.forms.$form")
		</div>

		{{-- CARD TABLA --}}
		<div class="col-sm-12 col-md-8">
			@include("partials.division.tablas.$tabla")
		</div>

	</div>	
</div>
@push('scripts')
    <script type="text/javascript">
        window.livewire.on('abrirModal', () => {
            $('#modalEliminar').modal('show');
        });
    </script>
    <script type="text/javascript">
        window.livewire.on('cerrarModal', () => {
            $('#modalEliminar').modal('hide');
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
	            timer: 2300,
	            background: '#38c172',
	            iconColor: '#fff'
	        })   
	    });
	</script>  
@endpush