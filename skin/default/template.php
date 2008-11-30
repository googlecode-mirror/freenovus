<?php /* This "layout" is very temporary--it needs to be split into about 1000 pieces.
	 Nonetheless, this is how the design started*/
if(!defined('IN_NOVUS'))
{
	die();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<title>freeNOVUS: <?php echo $lang['slogan']; ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href='/skin/<?php echo $SKIN ?>/style.css' type='text/css' rel='stylesheet' />
	</head>
	<body>
		<div id="header">
			<div id="logo">
				freeNOVUS
			</div>
			<div id="rightinside">
				&bull; <a href='info.php'><?php echo $lang['What']; ?></a> <?php echo $lang['is_freenovus']; ?><br />
				&bull; <a href='info.php'><?php echo $lang['Why']; ?></a> <?php echo $lang['should_contribute']; ?><br />
				&bull; <a href='login.php'><?php echo $lang['login']; ?></a> / <a href='reg.php'><?php echo $lang['register']; ?></a><br />
			</div>
		</div>
		<div id="main">
			<h1><?php echo $frontTitle; ?></h1><br />
			<img src="<?php echo $frontImageURL; ?>" alt="<?php echo $frontALT; ?>" class="aleft" />
			<?php echo $frontStory; ?>
			<div id="splittable">
				<div class="col">
					<strong><?php echo $lang['world']; ?></strong><br />
					<?php echo $box['world']; ?>
				</div>
				<div class="col">
					<strong><?php echo $lang['local']; ?></strong>
					<?php echo $box['local']; ?>
				</div>
				<div class="col">
					<strong><?php echo $lang['tech']; ?></strong>
					<?php echo $box['tech']; ?>
				</div>
				<div class="col">
					<strong><?php echo $lang['sci']; ?></strong>
					<?php echo $box['sci']; ?>
				</div>
				<div class="col">
					<strong><?php echo $lang['arts']; ?></strong>
					<?php echo $box['arts']; ?>
				</div>
				<div class="col">
					<strong><?php echo $lang['poli']; ?></strong>
					<?php echo $box['poli']; ?>
				</div>
				<div class="col">
					<strong><?php echo $lang['busi']; ?></strong>
					<?php echo $box['busi']; ?>
				</div>
				<div class="col">
					<strong><?php echo $lang['heal']; ?></strong>
					<?php echo $box['heal']; ?>
				</div>
			</div>
		</div>
		<div id="rmenu">
			<em><?php echo $lang['slogan']; ?></em>
			<ul id="menulinks">
				<li><a href='/w'><?php echo $lang['world']; ?></a></li>
				<li><a href='/l'><?php echo $lang['local']; ?></a></li>
				<li><a href='/t'><?php echo $lang['tech']; ?></a></li>
				<li><a href='/s'><?php echo $lang['sci']; ?></a></li>
				<li><a href='/a'><?php echo $lang['arts']; ?></a></li>
				<li><a href='/p'><?php echo $lang['poli']; ?></a></li>
				<li><a href='/b'><?php echo $lang['busi']; ?></a></li>
				<li><a href='/h'><?php echo $lang['heal']; ?></a></li>
			</ul>
			<div id="loginbox">
				<?php echo $lang['login']; ?>:<br />
				<form action='login.php' method='post'>
				<input type='text' name='username' value='<?php echo $lang['username']; ?>' /><br />
				<input type='password' name='password' value='password '><br />
				<input type='submit' value='<?php echo $lang['submit']; ?>' />
				</form>
				<br />
				<a href='login.php'><?php echo $lang['register']; ?>.</a> <a href='login.php'><?php echo $lang['forgot']; ?>?</a>
			</div>
			<span id='license'>
				<?php echo $lang['cclicense']; ?>
			</span>
		</div>
	</body>
</html>