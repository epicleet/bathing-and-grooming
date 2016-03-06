

<div class="container">
	<div class="text-center">
		<h2><?php echo $pagina['subtitulo'] ?></h2>
		<div><?php echo $pagina['texto'] ?></div>
	</div>

	<div class="row">
		<form action="contato/enviar" method="post" class="form-horizontal col-xs-12 col-sm-6 col-md-7">
			<fieldset>
				<legend>Precisa de nossos serviços? então preencha o formulário:</legend>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-3 control-label" for="nome">Seu nome</label>  
					<div class="col-md-9">
						<input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-3 control-label" for="pet">Nome do pet</label>  
					<div class="col-md-9">
						<input id="pet" name="pet" placeholder="" class="form-control input-md" required="" type="text">
					</div>
				</div>

				<!-- Select Basic -->
				<div class="form-group">
					<label class="col-md-3 control-label" for="assunto">Assunto</label>
					<div class="col-md-9">
						<select id="assunto" name="assunto" class="form-control">
							<option value="Serviços">Serviços</option>
							<option value="Dicas">Dicas</option>
							<option value="Adoções">Adoções</option>
							<option value="Outros">Outros</option>
						</select>
					</div>
				</div>

				<!-- Textarea -->
				<div class="form-group">
					<label class="col-md-3 control-label" for="texto">Mensagem</label>
					<div class="col-md-9">                     
						<textarea class="form-control" id="texto" name="texto" rows="5"></textarea>
					</div>
				</div>

				<!-- Button -->
				<div class="form-group">
					<label class="col-md-3 control-label" for="enviar"></label>
					<div class="col-md-9">
						<button id="enviar" name="enviar" data-loading-text="Enviando..." class="btn btn-primary" type="submit">Enviar mensagem</button>
					</div>
				</div>

			</fieldset>
		</form>


		<form action="contato/procedimento" method="post" class="form-horizontal col-xs-12 col-sm-6 col-md-5">
			<fieldset>
				<legend>Confira abaixo se seu pet já está atendido:</legend>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="code">Código do pet</label>  
					<div class="col-md-8">
						<input id="code" name="code" placeholder="" class="form-control input-md" required="" type="text">
					</div>
				</div>

				<!-- Button -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="enviar"></label>
					<div class="col-md-8">
						<button id="enviar" name="enviar" data-loading-text="Consultando..." class="btn btn-primary" type="submit">Check</button>
					</div>
				</div>

			</fieldset>
		</form>
	</div>
</div>

