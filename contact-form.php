<?php
/*
Template Name: contact-form
*/

require 'recaptchalib.php';
$siteKey = '6LfXHmkUAAAAAGIXCreNjUnq1A2a5DgI99HCQOfW';
$secret = '6LfXHmkUAAAAAC3rqYOGDImHk5LTgs2icQM69hO6';

//If the form is submitted
if(isset($_POST['submitted'])) {
	$reCaptcha = new ReCaptcha($secret);
	//Check the captcha
	if(isset($_POST["g-recaptcha-response"])) {
		$resp = $reCaptcha->verifyResponse(
			$_SERVER["REMOTE_ADDR"],
			$_POST["g-recaptcha-response"]);
			if ($resp != null && $resp->success) {
				//Check to make sure that the name field is not empty
				if(trim($_POST['contactName']) === '') {
					$nameError = 'Indiquez votre nom.';
					$hasError = true;
				} else {
					$name = trim($_POST['contactName']);
				}
				//Check to make sure sure that a valid email address is submitted
				if(trim($_POST['email']) === '')  {
					$emailError = 'Indiquez une adresse e-mail valide.';
					$hasError = true;
				} else if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", trim($_POST['email']))) {
					$emailError = 'Adresse e-mail invalide.';
					$hasError = true;
				} else {
					$email = trim($_POST['email']);
				}
				//Check to make sure that an object is submitted
				if (trim($_POST['object']) === '') {
					$objectError = 'Indiquez la raison de votre message.';
					$hasError = true;
				} else {
					$object = trim($_POST['object']);
				}
				//Check to make sure comments were entered
				if(trim($_POST['comments']) === '') {
					$commentError = 'Entrez votre message.';
					$hasError = true;
				} else {
					if(function_exists('stripslashes')) {
						$comments = stripslashes(trim($_POST['comments']));
					} else {
						$comments = trim($_POST['comments']);
					}
				}
				//If there is no error, send the email
				if(!isset($hasError)) {
					$emailTo = 'boufflers.pierre@gmail.com';
					$subject = $object;
					$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
					mail($emailTo, $subject, $body);
				}
				$emailSent = true;
			}
		} else {
			$captchaError = "Vous n'avez pas rempli le verificateur anti robot.";
		}
	} ?>
	<?php
	get_header();
	?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/contact-form.js"></script>
	<div id="content">
		<div class="container">
			<div class="row justify-content-center">
				<div class="title_contact-us">Nous contacter</div>
			</div>
			<div class="row">
				<div class="text_contact-us">
					Vous pouvez nous contacter en remplissant les champs du formulaire de contact ci-dessous. Veillez à remplir l'ensemble des renseignements pour que votre demande soit traitée dans les meilleures conditions.
				</div>
			</div>
		</div>
		<?php if(isset($emailSent) && $emailSent == true) { ?>
			<div class="text_message_sent">
				Merci, <?=$name;?></br>Votre e-mail a &eacute;t&eacute; envoy&eacute; avec succ&egrave;s. Vous recevrez une r&eacute;ponse sous peu.
			</div>
		<?php } else { ?>
			<?php if(isset($hasError) || isset($captchaError)) { ?>
				<p class="error">Une erreur est survenue lors de l'envoi du formulaire.</p>
			<?php } ?>
			<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
				<div class="forms">
					<div class="row justify-content-center">
						<div class="col-xl-6 col-10 text-center">
							<p for="contactName">Nom et Prénom</p>
							<input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="requiredField input_contact" />
							<?php if($nameError != '') { ?>
								<span class="error"><?=$nameError;?></span>
							<?php } ?>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-xl-6 col-10 text-center">
							<p for="email">E-mail</p>
							<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="requiredField email input_contact" />
							<?php if($emailError != '') { ?>
								<span class="error"><?=$emailError;?></span>
							<?php } ?>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-xl-6 col-10 text-center">
							<p for="object">Objet du message</p>
							<input type="text" name="object" id="object" value="<?php if(isset($_POST['object']))  echo $_POST['object'];?>" class="requiredField input_contact" />
							<?php if($objectError != '') { ?>
								<span class="error"><?=$objectError;?></span>
							<?php } ?>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-xl-6 col-10 text-center">
							<p for="commentsText">Message</p>
							<textarea name="comments" id="commentsText" rows="10" cols="30" class="requiredField input_contact"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
							<?php if($commentError != '') { ?>
								<span class="error"><?=$commentError;?></span>
							<?php } ?>
						</div>
					</div>
					<div class="row justify-content-center captcha_container">
						<div class="g-recaptcha" data-sitekey="6LfXHmkUAAAAAGIXCreNjUnq1A2a5DgI99HCQOfW"></div>
					</div>
					<div class="row justify-content-center button_container">
						<input type="hidden" name="submitted" id="submitted" value="true" /><button class="button_contact"type="submit">Envoyer</button>
					</div>
				</div>
			</form>
		<?php } ?>
	</div>
	<?php get_footer(); ?>
