<div class="card">
	<div class="card-header">
		<h4 class="mb-0">Gráfico
			<a class="float-right" wire:click="mostrarTablaListado" href="#" title="Ver listado"><i class="fas fa-list"></i></a>
		</h4>
		
	</div>
	<div class="card-body">
		<canvas id="myChart" width="400" height="400"></canvas>
		<script>
			var valores = <?php echo json_encode($grafico_cantidades); ?>;
			var etiquetas = <?php echo json_encode($grafico_divisiones); ?>;
			var ctx = document.getElementById('myChart').getContext('2d');
			var chart = new Chart(ctx, {
			    // The type of chart we want to create
			    //type: 'line',
			    type: 'bar',
			    //type: 'horizontalBar',

			    // The data for our dataset
			    data: {
			        labels: etiquetas,
			        datasets: [{
			            label: 'Regimientos',
			            backgroundColor: 'rgb(65, 83, 59)',
			            borderColor: 'rgb(28,34,46)',
			            data: valores
			        }]
			    },

			    // Configuration options go here
			    options: {
			        scales: {
			            yAxes: [{
			                ticks: {
			                    beginAtZero: true
			                }
			            }]
			        }
			    }
			});
		</script>
	</div>	
</div>