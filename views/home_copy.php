<div class="container-fluid">
	
	<!--<div class="row">-->
		<div class="col-sm-3">

		</div>
			<div class="col-sm-9">
				<ul class="nav nav-tabs">
					<?php
						foreach($categorias as $categoria): 
							echo "<li class='nav-item'><a class='nav-link active' href='#'>" . $categoria['categoria'] . "</a></li>";
						endforeach; 
					?>
				</ul>
				<table class="table table-striped">
					<tbody>
						<?php 
							$nColunas = 10;
							$coluna = 1;
							foreach($emojis as $emoji): 
								if($coluna == 1){
									echo "<tr>";
								}
								echo "<td><span style='font-size:35px' height='50' border='0'>" . "&#" . $emoji['coddec'] . "</span></td>";
								if($coluna < $nColunas){
									$coluna++;
								}else{
									echo "</tr>";
									$coluna = 1;
								}
							endforeach; 
						?>
					</tbody>
				</table>
			</div>
		</div>
	<!--</div>-->


</div> 