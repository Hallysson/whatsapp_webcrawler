<div class="container-fluid">
	
	<!--<div class="row">-->
		<div class="col-sm-3">

		</div>
		<div class="col-sm-9">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<?php
					foreach($categorias as $categoria): 
						echo "<li class='nav-item'><a class='nav-link' data-toggle='tab' href='#" . $categoria['categoria'] . "'>" . str_replace('_', ' e ', $categoria['categoria']) . "</a></li>";
					endforeach; 
				?>
				
			</ul>
			<div class="tab-content" id="nav-tabContent">
				<?php foreach($categorias as $categoria): ?>
					<div class="tab-pane fade" id="<?php echo $categoria['categoria'];?>" role="tabpanel">
						<table class="table table-striped">
							<tbody>
								<?php 
									$nColunas = 10;
									$coluna = 1;

									$emojis_categorias = $this->obterEmojisCategoria($categoria['categoria']);
									foreach($emojis_categorias as $emojis_categoria): 
										if($coluna == 1){
											echo "<tr>";
										}
										echo "<td><span style='font-size:35px' height='50' border='0'>" . "&#" . $emojis_categoria['coddec'] . "</span></td>";
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
				<?php endforeach; ?>
				
			</div>
		</div>
	<!--</div>-->


</div> 