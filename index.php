<?php require_once ('library/contact.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Awesome Contact Form</title>
	<link rel="stylesheet" href="css/foundation.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/app.css">
</head>
<body>
	
	<form action="" method="post" id="formContact" class="large-8 large-centered columns custom">
		<fieldset>
			<legend>Awesome Contact Form</legend>
		
		<div class="large-6 columns">
			<label for="first_name">First Name: *</label>
			<input type="text" name="first_name" id="first_name" placeholder="Your first name">
		</div>

		<div class="large-6 columns">
			<label for="first_name">Last Name: *</label>
			<input type="text" name="last_name" id="last_name" placeholder="Your last name">
		</div>

		<div class="large-6 columns">
			<label for="email">Email Address: *</label>
			<input type="email" name="email" id="email" placeholder="Your email address">
		</div>

		<div class="large-6 columns">
			<label for="type">Enquiry type: *</label>
			<select name="type" id="type">
				<option value="">Select One</option>
				<?php if(!empty(Contact::$types)){ ?>
					<?php foreach(Contact::$types as $id=>$type){ ?>
						<option value='<?php $id ?>'><?php echo $type; ?></option>
					<?php } ?>	
				<?php } ?>	
			</select>
		</div>
		
		<div class="large-12 columns">
			<label for="enquiry">Enquiry *</label>
			<textarea name="enquiry" id="enquiry" cols="30" rows="10" placeholder="Your message"></textarea>
		</div>

		<div class="large-12 columns">
			<button class='button small'><i class="fa fa-envelope"></i> Send Message</button>
		</div>

		</fieldset>
	</form>

	<!-- SCRIPTS -->
	<script src='js/vendor/jquery.js'></script>
	<script src='js/vendor/foundation.min.js'></script>
	<script src='js/app.js'></script>
</body>
</html>