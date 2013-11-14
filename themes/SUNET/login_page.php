<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?= $t->head_title() ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="Content-Language" content="en-us" />
	<link type="text/css" rel="stylesheet" href="<?= $t->find_file('rps_clean.css') ?>" title="Standard" />
	<?= $t->head_content(); ?>
</head>
<?= $t->bodytag() ?>
	<div id="LoginBox">
		<h1><? printf(L('Welcome to %s'), $t->product_name()) ?></h1>
		<div class="LoginImage"><img src="<?= $t->find_file('homepage-image_new.jpg') ?>" alt="Logo"></div>
		<div class="LoginForm">
			<?= $t->body(); ?>
		</div>
	</div>
	<div id="Footer">
		<?= $t->powered_by_no_version() ?>
	</div>
</body>
</html>
