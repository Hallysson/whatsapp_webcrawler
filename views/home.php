<!--<div class="container-fluid">-->

	<!--<div class="row">-->
	<div class="col-lg-3 col-md-3 col-sm-3">

</div>
<div class="col-lg-9 col-md-9 col-sm-9 caixas">
	<form>
		<fieldset enabled>
			<div id="emojis" aria-expanded="false" class="collapse">
				<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
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
							if($categoria['categoria'] == "Smileys_Emoção"){
								$conteudoEmojis = "tab-pane fade active in";
							}else{
								$conteudoEmojis = "tab-pane fade";
							};
							?>
							<div class="<?php echo $conteudoEmojis ?>" id="<?php echo $categoria['categoria'];?>" role="tabpanel">
							<?php 
								foreach($this->obterSubcategoria($categoria['categoria']) as $subcategoria):
									echo "<div>".$subcategoria['subcategoria']."</div>";
									foreach($this->obterEmojisSubcategoria($categoria['categoria'], $subcategoria['subcategoria']) as $emojis_categoria_subcategoria):
										echo "<div class='emoji'><span id='".$emojis_categoria_subcategoria['codhex']."' href='#".$emojis_categoria_subcategoria['codhex']."' height='15' border='0' data-toggle='tooltip' data-html='true' title='Descrição: ".$emojis_categoria_subcategoria['descricao']."'>".$emojis_categoria_subcategoria['codhex']."</span></div>";
									endforeach;
								endforeach;
								
							?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div id="labelCampanha" class="form-group">
				<button href="#emojis" data-toggle="collapse" data-toggle="tooltip" data-html="true" title="Inserir Emojis"><span id="128515" style="font-size:20px" height="40" border="0" >&#128515;</span></button>
				<textarea style="resize: none" class="form-control" rows="4" placeholder="Digite aqui o texto da campanha!"></textarea>
			</div>
			<div class="form-group">
				<input class="btn btn-default active" type="button" value="Enviar para Whatsapp">
			</div>
		</fieldset>
	</form>
</div>
<!--</div>-->


<!--</div>--> 