<!--<div class="container-fluid">-->

	<!--<div class="row">-->
		<div class="col-lg-3 col-md-3 col-sm-3">

		</div>
		<div class="col-lg-9 col-md-9 col-sm-9 caixas">
			<form>
				<fieldset enabled>
					<div id="emojis" aria-expanded="false" class="collapse">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<?php 
								foreach($categorias as $categoria): 
									if($categoria['categoria'] == "Emojis_Pessoas"){
										$controleAbas = "nav-item active";
										$expandido = "true";
									}else{
										$controleAbas = "nav-item";
										$expandido = "false";
									};
									echo "<li class='$controleAbas'><a class='nav-link' data-toggle='tab' href='#".$categoria['categoria']."' aria-expanded='$expandido'>".str_replace('_', ' e ', $categoria['categoria'])."</a></li>";
								endforeach; 
							?>
						</ul>
						<div class="tab-content caixasPrincipais" id="nav-tabContent">
							<?php 
								foreach($categorias as $categoria): 
									if($categoria['categoria'] == "Emojis_Pessoas"){
										$conteudoEmojis = "tab-pane fade active in";
									}else{
										$conteudoEmojis = "tab-pane fade";
									};
								?>
								<div class="<?php echo $conteudoEmojis ?>" id="<?php echo $categoria['categoria'];?>" role="tabpanel">
									<table class="table table-striped">
										<tbody>
											<?php 
												$nColunas = 20;
												$coluna = 1;
												foreach($this->obterEmojisCategoria($categoria['categoria']) as $emojis_categoria): 
													if($coluna == 1){
														echo "<tr>";
													}
													echo "<td><span id='".$emojis_categoria['coddec']."' href='#".$emojis_categoria['coddec']."' style='font-size:20px' height='15' border='0' data-toggle='tooltip' data-html='true' title='Código: ".$emojis_categoria['coddec']."'>" . "&#" . $emojis_categoria['coddec'] . "</span></td>";
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
					<div id="labelCampanha" class="form-group">
						<button href="#emojis" data-toggle="collapse" data-toggle="tooltip" data-html="true" title="Inserir Emojis"><span id="128515" style="font-size:20px" height="40" border="0" >&#128515;</span></button>
					</div>
					<div id="labelCampanha" class="form-group">
						<label for="exampleInputEmail1" form-control-label>Texto da Campanha</label>
						<textarea class="form-control" rows="3"></textarea>
					</div>
					<div class="form-group">
						<input class="btn btn-default active" type="button" value="Enviar para Whatsapp">
					</div>
				</fieldset>
			</form>
		</div>
	<!--</div>-->


<!--</div>--> 