<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
   <title><?php print $t->head_title(); ?></title>
   <?php $css = $t->find_file("sunet.css"); ?>
   <link rel="stylesheet" type="text/css" href="<?php print $css; ?>">
   <?php $css = $t->find_file("common.css"); ?>
   <link rel="stylesheet" type="text/css" href="<?php print $css; ?>">
   <?php
     $css = $t->find_file("site-rps_clean.css");
     if ($css != "site-rps_clean.css") {
	 print("<link rel=\"stylesheet\" type=\"text/css\" href=\"$css\">\n");
     }
   ?>
   <?php print $t->head_content(); ?>
</head>
<?php
      ### CanIt adds parameters to <body>, so print $t->bodytag()
      print $t->bodytag();
?>
<div id="Header">
        <div id="Header">
                <div id="Logo">
                        <a href="/"><img class="logo" src="<?php echo $t->find_file('themes/SUNET/images/sunet-logo.jpg') ?>" alt="Logo"></a>
                </div>
	</div>
</div>
<span id="info_block">
<span id="logged_in_as">
<?php
	if (!$t->is_guest()) {
	    print(sprintf(L("Logged in as: <b>%s</b>"),
			  $t->logged_in_as()) . '&nbsp;<a href="logout.php">' . L("(Log Out)") . '</a><br>');
	} else {
	    print('&nbsp;');
	}
?>
</span>
</span>
</div>
<div id="main_content">
<p style="margin-bottom: 15px;">&nbsp;</p>
<div id="body_content">
<?php print $t->body(); ?>
<p>&nbsp;</p>
</div>
</div>
<!-- End Main Content -->
<div id="footer">
<div id="footer_powered">
<?php print $t->powered_by_with_version(); ?>
</div>
</div>
</body>
</html>
