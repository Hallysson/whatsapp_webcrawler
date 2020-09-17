	<div class="col-lg-3 col-md-3 col-sm-3"></div>
	<div class="col-lg-9 col-md-9 col-sm-9 caixas">
		<form name="criarCampanha" method="post" action="<?php if (isset($_POST["enviar_whatsapp"])){$this->enviar($_POST['mensagem']);}?>">
			<fieldset enabled>
				<div id="emojis" aria-expanded="false" class="collapse">
					<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
						<?php 
							foreach($categorias as $categoria): 
								if($categoria['ordem_categoria'] == 1){
									$controleAbas = "nav-item active";
									$corSelecao = " style='background-color: #989898;'";
									$expandido = "true";
								}else{
									$controleAbas = "nav-item";
									$corSelecao = "";
									$expandido = "false";
								};
								echo "<li class='$controleAbas'><a class='nav-link' data-toggle='tab' href='#".$categoria['categoria']."' aria-expanded='$expandido' style='font-size: 25px' data-toggle='tooltip' data-html='true' title='".str_replace('_', ' e ', $categoria['categoria'])."'>".$categoria['codhex']."</a></li>";
							endforeach; 
						?>
					</ul>
					<div class="tab-content caixasPrincipais" id="nav-tabContent" style='border-left: 2px solid #EEE; background-color: #EEE;'>
						<?php 
							foreach($categorias as $categoria): 
								if($categoria['ordem_categoria'] == 1){
									$conteudoEmojis = "tab-pane fade active in";
								}else{
									$conteudoEmojis = "tab-pane fade";
								};
								?>
								<div class="<?php echo $conteudoEmojis ?>" id="<?php echo $categoria['categoria'];?>" role="tabpanel" style="background-color: #EEE;">
								<?php 
									foreach($this->obterSubcategoria($categoria['categoria']) as $subcategoria):
										echo "<div style='border: 0.5px solid #EEE; margin: 10px; background-color: #FFF;'><div style='padding-left: 10px; background-color: #EEE; font-size: 15px; color: #989898;'>".$subcategoria['subcategoria']."</div>";
										foreach($this->obterEmojisSubcategoria($categoria['categoria'], $subcategoria['subcategoria']) as $emojis_categoria_subcategoria):
											echo "<button type= 'button' class='btn' id='".$emojis_categoria_subcategoria['codhex']."' href='#".$emojis_categoria_subcategoria['codhex']."' style='border: 0; font-size:30px; margin: 5px 5px; background-color: #FFF' data-toggle='tooltip' data-html='true' title='Código: ".str_replace('&#x', '', $emojis_categoria_subcategoria['codhex'])."\nDescrição: ".$emojis_categoria_subcategoria['descricao']."'>".$emojis_categoria_subcategoria['codhex']."</button>";
										endforeach;
										echo "</div>";
									endforeach;
								?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div id="labelCampanha" class="form-group">
					<a class="btn btn-secondary btn-lg" href="#emojis" data-toggle="collapse" data-toggle="tooltip" data-html="true" title="Inserir Emojis"><span id="128515">&#128515;</span></a>
					<a class="btn btn-secondary btn-lg" data-toggle="tooltip" data-html="true" title="Formatar texto em negrito" onclick="insertMetachars('*','*');"><strong>N</strong></a>
					<a class="btn btn-secondary btn-lg" data-toggle="tooltip" data-html="true" title="Formatar texto em itálico" onclick="insertMetachars('_','_');"><em>I</em></a>
					<a class="btn btn-secondary btn-lg" data-toggle="tooltip" data-html="true" title="Formatar texto em sublinhado" onclick="insertMetachars('~','~');"><u>S</u></a>
					<a class="btn btn-secondary btn-lg" data-toggle="tooltip" data-html="true" title="Formatar texto em fonte monoespaçada" onclick="insertMetachars('```','```');">M</a>
					
					<p><textarea id="mensagem" name="mensagem" style="resize: none; font-size: 20px; margin-top:5px;" class="form-control" rows="4" placeholder="Digite aqui o texto da campanha!"></textarea></p>
				</div>
				<div class="form-group">
					<input class="btn btn-default active" type="submit" name="enviar_whatsapp" value="Enviar para Whatsapp">
				</div>
			</fieldset>
		</form>
	</div>