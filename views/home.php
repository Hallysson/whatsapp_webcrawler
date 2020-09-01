<div class="container-fluid">
	
	<div class="row">
		<div class="col-sm-3">

		</div>
		<div class="col-sm-9">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Emojis</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$nColunas = 10;
						$coluna = 0;
						foreach($emojis as $emoji): 
							if($coluna == 0){
								echo "<tr>";
							}
							echo "<td><span style='font-size:35px' height='50' border='0'>" . "&#" . $emoji['coddec'] . "</span></td>";
							if($coluna <= $nColunas - 1){
								$coluna++;
							}else{
								echo "</tr>";
								$coluna = 0;
							}
						endforeach; 
					?>
				</tbody>
			</table>
		</div>
	</div>


</div> 