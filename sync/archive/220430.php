
	
	<!DOCTYPE html>
	<html lang="en-GB">

		<?php $subsite = 'archive'; ?>

		<head>
			<title>Archive - Noah K&ouml;nig</title>
			<link rel="shortcut icon" href="/src/icon.png"/>
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
									<img class="backtotopicon" src="/src/backtoprojectsicon.png">
								</a>
							</div>
							<div class="videotextarea">
								<div id="entry_data"></div>
								<p class="calibristandard">
									Take a look behind the scenes of 'Death in Time' in our visual effects breakdown. Part 2 of 2 gives you an insight into the creation of the ancient Temple where the Machine lay since the dawn of time. All that and more can be seen in Doctor Who fan film released last year.
								</p><br/><br/>
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
	
	