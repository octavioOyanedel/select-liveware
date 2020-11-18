<div>
	<div class="login">
		<div class="form-group text-center">
            <img src="\img\logo_verde.png" class="img-logo img-fluid rounded-circle mx-auto shadow" width="100" alt="Logo">
			<h3 class="my-4 modal-title">Ingresar a SIND1</h3>
		</div>

		<div class="form-group">
			<input type="email" class="form-control shadow-sm" placeholder="Correo Electrónico" required="required">
		</div>
		
		<div class="input-group mb-3">
			<input type="{{$tipo}}" class="form-control shadow-sm" placeholder="Contraseña" required="required" wire:model="password">
			<div class="input-group-append shadow-sm">
				<span role="button" wire:click="cambioTipo" class="input-group-text"><i class="fas fa-{{$icono}}"></i></span>
			</div>
		</div>

		<div class="form-group small clearfix">
			<label class="checkbox"><input type="checkbox"> Recuérdame</label>
			<a href="#" class="float-right">¿Olvidó su contraseña?</a>
		</div>
		<button class="btn bg-dark btn-block btn-lg text-white">Entrar</button>
	</div>
</div>
