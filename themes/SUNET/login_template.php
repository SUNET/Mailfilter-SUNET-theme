<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title><?php print $t->head_title(); ?></title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php $css = $t->find_file("sunet.css"); ?>
<link rel="stylesheet" type="text/css" href="<?php print $css; ?>">
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/lib.js"></script>
<script type="text/javascript" src="js/jquery.corner.js"></script>
<link rel="icon" href="images/favicon.ico" type="image/ico">
</head>

<?php print $t->bodytag(); ?>

        <div id="Header">
                <div id="Logo">
                        <a href="/"><img class="logo" src="<?= $t->find_file('themes/SUNET/images/sunet-logo.jpg') ?>" alt="Logo"></a>
		</div>
	</div>

<div align="center">
<table class="rounded" style="margin-bottom: 10px; background: #fff;" cellpadding="0" cellspacing="0" width="70%">

<br>
<br>

<!--
<?php $logo = $t->find_file("logo.gif"); ?>
<td width="99"><img src="<?php print $logo; ?>" border="0" alt="Logo"></td>
<td style="vertical-align: bottom" class="content">Welcome to <a href="http://www.roaringpenguin.com/powered-by-canit.php"><?php print $t->product_name()?></a>.  You are not logged in.</td>
-->

<td style="vertical-align: bottom" class="content">Welcome to <a href="http://www.sunet.se/Tjanster/E-postfilter.html">SUNET Mailfilter</a>.  You are not logged in.</td>
</tr>
<tr>
</table>
<table class="rounded" style="background: #fff" border="0" cellpadding="0" cellspacing="0" width="70%">
<tr>
<!--
<?php $logo = $t->find_file("homepage-image_new.jpg"); ?>
 <td style="background-color: #FFF"><img src="<?php print $logo; ?>" border="0" alt="Logo"></td>
-->
<td class="content">
<?php print $t->menu(2); ?>
<?php
$errs = $t->page->shib_errors;
if (!empty($errs)) {
    print("<div class=\"error\">\n");
    print("<ul>\n");
    foreach ($errs as $err) {
	print("<li>$err</li>\n");
    }
    print("</ul>\n</div>\n");
}
?>
<h2><?php print $t->title();?></h2>
<?php
	$swamid_url = conf('ShibbolethURL');
	$text = conf('ShibbolethLoginMsg');
	$target = conf('ShibbolethTarget') . my_uri(0);
	$full_uri = append_param($swamid_url, 'target', $target);
	print("<a href=\"$full_uri\">$text</a>\n");

	print("<hr>\n");
	print("<br>");
	print(L("<b>Note</b>: Cookies must be enabled in your browser to log in.<br>\n"));
?>
</td>
</tr>
</table>

<table class="footer" border="0" cellpadding="0" cellspacing="0" width="70%">
<tr>
<td class="pagebg"><?php print $t->powered_by_no_version(); ?></td>
</tr>
</table>

</div>

<script>
$('.rounded').corner("5px");
$('.footer').corner("5px");
</script>
</body>
</html>
