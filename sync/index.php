	
	
	<!DOCTYPE html>
	<html lang="en-GB">

		<?php $subsite = 'home'; ?>

		<head>
			<title>Noah K&ouml;nig</title>
			<link rel="shortcut icon" href="/sources/icon.png"/>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
			<link rel="stylesheet/less" type="text/css" href="/css/styles.less"/>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<style>
				<?php include($_SERVER['DOCUMENT_ROOT'] . '/subsite_handle.php');?>
			</style>
		</head>

		<body id="top">
			<?php include($_SERVER['DOCUMENT_ROOT'] . '/header.php');?>
				<div class="swiper mySwiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="calibrifront">
								Hello There! I'm Noah König, an amateur<br/>
								filmmaker, VFX artist and game developer.
							</div>
							<img src="/sources/postit.jpg">
						</div>
						<div class="swiper-slide">
							<img src="/sources/vortex.jpg">
						</div>
						<div class="swiper-slide">
							<img src="/sources/book.jpg">
						</div>
						<div class="swiper-slide">
							<img src="/sources/basement.jpg">
						</div>
						<div class="swiper-slide">
							<img src="/sources/machine.jpg">
						</div>
						<div class="swiper-slide">
							<img src="/sources/planet.jpg">
						</div>
						<div class="swiper-slide">
							<img src="/sources/index.jpg">
						</div>
						<div class="swiper-slide">
							<img src="/sources/vulcan.jpg">
						</div>
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-pagination"></div>
				</div>
			<?php include($_SERVER["DOCUMENT_ROOT"] . "/footer.php");?>
			<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
			<script>
				<?php include($_SERVER["DOCUMENT_ROOT"] . "/js/swiper.js");?>
			</script>
		</body>
		
	</html>
	
	