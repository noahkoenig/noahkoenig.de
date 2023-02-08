
	
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
					<div id="entry_video"></div>
					<div class="container">
						<div class="leftpane">&nbsp;</div>
						<div class="middlepaneproject">
							<div class="stickybackto">
								<a href="/archive.php">
									<img class="backtotopicon" src="/src/icons/backtoarchive.png">
								</a>
							</div>
							<div class="videotextarea">
								<div id="entry_data"></div>
								<p class="calibristandard">
									About a year ago I started working with Blender. Since then I created dozens of 3D-models, materials, animations and simulations. Most of them are included in this video - my Blender VFX Reel for the time span of March 2017 to March 2018.
								</p>
							</div><br/>
						</div>
						<div class="rightpane">&nbsp;</div>
					</div>
				</div>
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php');?>
			<script>
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/js/archive_entry.js');?>
			</script>
		</body>

	</html>
	
	