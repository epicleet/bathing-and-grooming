

<div class="container">
	<div class="text-center">
		<h2><?php echo $pagina['subtitle'] ?></h2>
		<div><?php echo $pagina['text'] ?></div>
	</div>

	<div class="row">
		<form action="contact/send" method="post" class="form-horizontal col-xs-12 col-sm-6 col-md-7">
			<fieldset>
				<legend>Do you need our services? then fill out this form:</legend>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-3 control-label" for="name">Your name</label>
					<div class="col-md-9">
						<input id="name" name="name" placeholder="" class="form-control input-md" required="" type="text">
					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-3 control-label" for="pet">Pet's name</label>
					<div class="col-md-9">
						<input id="pet" name="pet" placeholder="" class="form-control input-md" required="" type="text">
					</div>
				</div>

				<!-- Select Basic -->
				<div class="form-group">
					<label class="col-md-3 control-label" for="assunto">Subject</label>
					<div class="col-md-9">
						<select id="assunto" name="assunto" class="form-control">
							<option value="Services">Services</option>
							<option value="Hints">Hints</option>
							<option value="Adoption">Adoption</option>
							<option value="Other">Other</option>
						</select>
					</div>
				</div>

				<!-- Textarea -->
				<div class="form-group">
					<label class="col-md-3 control-label" for="text">Message</label>
					<div class="col-md-9">
						<textarea class="form-control" id="text" name="text" rows="5"></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="g-recaptcha" data-sitekey="<?php echo $recaptchaSiteKey; ?>"></div>
				</div>

				<!-- Button -->
				<div class="form-group">
					<label class="col-md-3 control-label" for="send"></label>
					<div class="col-md-9">
						<button id="send" name="send" data-loading-text="Sending..." class="btn btn-primary" type="submit">Send message</button>
					</div>
				</div>

			</fieldset>
		</form>


		<form action="contact/procedure" method="post" class="form-horizontal col-xs-12 col-sm-6 col-md-5">
			<fieldset>
				<legend>Check out if your pet has already been served:</legend>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="code">Pet's code</label>
					<div class="col-md-8">
						<input id="code" name="code" placeholder="" class="form-control input-md" required="" type="number">
					</div>
				</div>

				<div class="form-group">
					<div class="g-recaptcha" data-sitekey="<?php echo $recaptchaSiteKey; ?>"></div>
				</div>

				<!-- Button -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="send"></label>
					<div class="col-md-8">
						<button id="send" name="send" data-loading-text="Checking..." class="btn btn-primary" type="submit">Check</button>
					</div>
				</div>

			</fieldset>
		</form>

		<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
	</div>
</div>

