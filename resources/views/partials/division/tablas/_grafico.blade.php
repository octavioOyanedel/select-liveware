<div class="card">
	<div class="card-header">
		<h4 class="mb-0">Gráfico
			<a class="float-right" wire:click="mostrarTablaListado" href="#" title="Ver listado"><i class="fas fa-list"></i></a>
		</h4>
		
	</div>
	<div class="card-body">
		<canvas id="myChart" width="400" height="400"></canvas>
		<script>
			var ctx = document.getElementById('myChart').getContext('2d');
			var chart = new Chart(ctx, {
			    // The type of chart we want to create
			    type: 'line',

			    // The data for our dataset
			    data: {
			        labels: ['Enero', 'February', 'March', 'April', 'May', 'June', 'July'],
			        datasets: [{
			            label: 'My First dataset',
			            backgroundColor: 'rgb(255, 99, 132)',
			            borderColor: 'rgb(255, 99, 132)',
			            data: [2, 10, 5, 2, 20, 30, 45]
			        }]
			    },

			    // Configuration options go here
			    options: {}
			});
		</script>
	</div>	
</div>