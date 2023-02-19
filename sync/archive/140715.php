

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
                                    Sherlock Holmes and Dr. John Watson investigate a strange message, which leads to a dangerous encounter with their rival.<br/><br/>
                                    <i>Sherlock: Die Einladung</i> (<i>Sherlock: The Invitation</i>) was filmed as part of a school project in 7th grade by Noah K&ouml;nig, Nicolas A. Winter, Farid Afshinpoor, and Alexander P. Winter. Based on the BBC series <i> Sherlock </i> as well as characters created by Sir Arthur Conan Doyle.* <br/><br/>
									*Disclaimer: This motion picture is a non-commercial and unofficial fan project. It was made solely for fun. The characters are owned by the distributor BBC and this fan-fiction is not connected in any way to said company.
								</p>
							</div><br/>
						</div>
						<div class="rightpane">&nbsp;</div>
					</div>
				</div>
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php');?>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
			<script>
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/js/archive_entry.js');?>
			</script>
		</body>

	</html>