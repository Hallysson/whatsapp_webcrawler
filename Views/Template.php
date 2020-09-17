<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Campanhas Whatsapp</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>Assets/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>Assets/css/style.css" />
		<!--
		<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
		<script>tinymce.init({selector:'textarea'});</script>
		-->  
	</head>
	<body>
		<div class="container-fluid">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<a href="<?php echo BASE_URL; ?>" class="navbar-brand">Campanhas</a>
					</div>
					<ul class="nav navbar-nav navbar-right">
						<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
							<li><a href="<?php echo BASE_URL; ?>minhasCampanhas">Minhas Campanhas</a></li>
							<li><a href="<?php echo BASE_URL; ?>login/sair">Sair</a></li>
						<?php else: ?>
							<li><a href="<?php echo BASE_URL; ?>cadastro">Cadastre-se</a></li>
							<li><a href="<?php echo BASE_URL; ?>login">Login</a></li>
						<?php endif; ?>
					</ul>
				</div>
			</nav>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page">Home</li>
				</ol>
			</nav>
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>

			<script type="text/javascript" src="<?php echo BASE_URL; ?>Assets/js/jquery.min.js"></script>
			<script type="text/javascript" src="<?php echo BASE_URL; ?>Assets/js/bootstrap.min.js"></script>
			
			<script>
				function insertMetachars(sStartTag, sEndTag) 
				{
					var bDouble = arguments.length > 1, oMsgInput = document.criarCampanha.mensagem, nSelStart = oMsgInput.selectionStart, nSelEnd = oMsgInput.selectionEnd, sOldText = oMsgInput.value;
					oMsgInput.value = sOldText.substring(0, nSelStart) + (bDouble ? sStartTag + sOldText.substring(nSelStart, nSelEnd) + sEndTag : sStartTag) + sOldText.substring(nSelEnd);
					oMsgInput.setSelectionRange(bDouble || nSelStart === nSelEnd ? nSelStart + sStartTag.length : nSelStart, (bDouble ? nSelEnd : nSelStart) + sStartTag.length);
					oMsgInput.focus();
				}
			</script>
			
			<script>
				//usando jQuery
				$("button").click(function() 
				{
					var emoji = $( this ).text();
					$('#mensagem').val($('#mensagem').val() + emoji);
				});
			</script>
		</div>
	</body>
</html>