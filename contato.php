<div class="starter-template">
	<h1>Contato</h1>
	<?php
	if(isset($_POST['submit'])){
		$output  = '<div class="bs-callout bs-callout-info" id="callout-help-text-accessibility">';
		$output .= '<h4 id="associating-help-text-with-form-controls">Dados enviados com sucesso, abaixo seguem os dados que você enviou</h4>';
		$output .= '<b>Nome:</b> ' . $_POST['contato_nome'];
		$output .= '<br><b>E-mail:</b> ' . $_POST['contato_email'];
		$output .= '<br><b>Assunto:</b> ' . $_POST['contato_assunto'];
		$output .= '<br><b>Mensagem:</b> ' . $_POST['contato_mensagem'];
		$output .= '</div>';
		
		print $output;
	}
	?>
	<form class="form-horizontal" method="post" action="#">
		<div class="form-group">
			<label for="contato_nome" class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-10">
				<input type="text" required="required" class="form-control" id="contato_nome" name="contato_nome" value="<?php echo ( isset( $_POST['contato_nome'] ) ) ? $_POST['contato_nome'] : '' ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="contato_email" class="col-sm-2 control-label">E-mail</label>
			<div class="col-sm-10">
				<input type="email" required="required" class="form-control" id="contato_email" name="contato_email" value="<?php echo ( isset( $_POST['contato_email'] ) ) ? $_POST['contato_email'] : '' ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="contato_assunto" class="col-sm-2 control-label">Assunto</label>
			<div class="col-sm-10">
				<input type="text" required="required" class="form-control" id="contato_assunto" name="contato_assunto" value="<?php echo ( isset( $_POST['contato_assunto'] ) ) ? $_POST['contato_assunto'] : '' ?>">
			</div>
		</div>
		<div class="form-group">
			<label for="contato_mensagem" class="col-sm-2 control-label">Mensagem</label>
			<div class="col-sm-10">
				<textarea required="required" class="form-control" id="contato_mensagem" name="contato_mensagem" rows="4"><?php echo ( isset( $_POST['contato_mensagem'] ) ) ? $_POST['contato_mensagem'] : '' ?></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" name="submit" class="btn btn-primary">Enviar</button>
			</div>
		</div>
	</form>
</div>