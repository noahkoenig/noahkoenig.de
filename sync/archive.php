
	
	<!DOCTYPE html>
	<html lang="en-GB">

		<?php $subsite = 'archive'; ?>

		<head>
			<title>Archive - Noah K&ouml;nig</title>
			<link rel="shortcut icon" href="/src/icons/icon.png"/>
			<link rel="stylesheet/less" type="text/css" href="/css/styles.less"/>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<style>
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/subsite_handle.php');?>
			</style>
		</head>
		
		<body id="top">
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/header.php');?>
				<div class="content">
					<div class="textarea">
						<h2>Archive</h2><br/>
						A mix of stuff I've done. Feel free to look around. Film, VFX, ... might even put photo galleries, game mods and music here.<br/><br/>
					</div>
					<div class="container">
						<div class="leftpane">&nbsp;</div>
						<div class="middlepane">
							<div class="stickytop"  id="stickytop">
								<a href="/archive.php#top">
									<img class="backtotopicon" src="/src/icons/backtotop.png">
								</a>
							</div>
							<div id="entry_previews"></div><br/>
						</div><!-- #middlepane -->
						<div class="rightpane">&nbsp;</div>
					</div>
				</div>
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php');?>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script>
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/js/scroll.js');?>
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/js/archive.js');?>
			</script>
		</body>

	</html>
	
	