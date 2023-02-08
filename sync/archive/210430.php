

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
									The Doctor must face his most dangerous threat yet! Craig Owens’ time is running out as the moment of his seemingly inevitable demise is drawing nearer with every second! The investigation leads the duo to The Machine, an ancient but deadly artefact that even the Time Lords believed only to be a legend. Can The Doctor unravel the mystery and save his friend before it is too late...?<br/><br/>
									Check out the unofficial Doctor Who fan film <i> Death in Time</i> written and directed by amateur filmmakers Nicolas A. Winter and Noah K&ouml;nig. Based on BBC's <i> Doctor Who</i> and characters created by BBC Studios.* <br/><br/>
									*Disclaimer: This motion picture is a non-commercial and unofficial fan project. It was made solely for fun. The characters are owned by the distributor BBC and this fan-fiction is not connected in any way to said company.
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