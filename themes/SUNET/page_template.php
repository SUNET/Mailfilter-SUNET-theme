<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?= $t->head_title() ?>CanIt</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="Content-Language" content="en-us" />
	<link type="text/css" rel="stylesheet" href="<?= $t->find_file('sunet.css') ?>" title="Standard" />
	<link type="text/css" rel="stylesheet" href="<?= $t->find_file('common.css') ?>" title="Standard" />
   <?php
     $css = $t->find_file("site-rps_clean.css");
     if ($css != "site-rps_clean.css") {
	 print("<link rel=\"stylesheet\" type=\"text/css\" href=\"$css\">\n");
     }
   ?>
	<?= $t->head_content(); ?>
</head>
<?= $t->bodytag() ?>
	<div id="Header">
		<div id="Logo">
			<a href="/"><img class="logo" src="<?= $t->find_file('themes/SUNET/images/sunet-logo.jpg') ?>" alt="Logo"></a>
		</div>
		<div id="AcctInfo">
			<ul>
				<li><em><?= L('Logged in as:') ?></em> <?= $t->logged_in_as() ?><br/>
				Not you? <a href="logout.php">Log Out</a></li>
				<li><em><?= L('Viewing Stream:') ?></em> <?= $t->streaminfo() ?></li>
			</ul>
		</div>
		<div id="StreamInfo">
			<?= $t->stream_switch_form() ?>
		</div>
	</div>
	<div id="MainNav">
		<?= $t->menu(0) ?>
	</div>
	<div id="SubNav">
		<?= $t->menu(1) ?>
	</div>
<?php
	$menu = $t->menu(2);
	if ($menu) {
?>
	<div id="ItemNav">
		<?= $menu ?>
	</div>
<?php
	}
?>
<?php
	$ql = $t->quicklink_menu();
	if ($ql != "") {
		$ql = preg_replace("/(<ul[^>]*>)/", '${1}<li><b>' . L('Quick Links:') . "</b></li>", $ql);
?>
	<div id="QuickNav">
		<?= $ql ?>
	</div>
<?php
	}
?>
<?php
	print '<div id="Content"';
	if ($menu) {
		print ' class="WithItemBar"';
	}
	print ">\n";
?>
		<a name="content" accesskey="C"></a>
		<h1><?= $t->title() ?></h1>
		<?= $t->helpbox() ?>
		<?= $t->body() ?>
	</div>
	<div id="Footer">
	<?= $t->theme_selection_menu() ?>
	<?= $t->quicklink_form() . $t->powered_by_with_version() ?>
	</div>
<?php print $t->debug_output(); ?>
</body>
</html>
