<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo $t->head_title(); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Language" content="en-us" />
	<link type="text/css" rel="stylesheet" href="<?php echo $t->find_file('../rps_clean/rps_clean.css'); ?>" title="Standard" />
	<?php echo $t->head_content(); ?>
</head>
<?php echo $t->bodytag(); ?>
	<div id="LoginBox">
		<h1><?php printf(L("Welcome to %s"), $t->product_name()); ?></h1>
		<div class="LoginImage"><img src="<?php echo $t->find_file('themes/SUNET/images/sunet-logo.jpg'); ?>" alt="Logo"></div>
		<div class="LoginForm">
			<?php echo $t->body(); ?>
		</div>
	</div>
	<div id="Footer">
		<?php echo $t->powered_by_no_version(); ?>
	</div>
</body>
</html>
