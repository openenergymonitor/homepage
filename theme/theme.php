<?php global $path; ?>
<!DOCTYPE html>
<html>

<head>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="#44b3e2" name="theme-color">
	<title>Home | OpenEnergyMonitor</title>
	<link href="<?php echo $path; ?>theme/favicon.ico" rel="shortcut icon">
	<!-- Load font locally to enable full offline use, un-comment below to load font remotely-->
	<!--<link href="https://fonts.googleapis.com/css?family=ubuntufont:300" rel="stylesheet" type="text/css">-->
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
	<link href="<?php echo $path; ?>theme/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $path; ?>theme/style.php?v=4.2.3" rel="stylesheet" type="text/css">
	<script src="<?php echo $path; ?>lib/jquery-3.3.1.min.js"></script>
</head>

<body>
	<div class="oemblueBar">
		<div class="container">
			<div class="titleHolder">
				<i class="fa fa-navicon"></i>
				<a href="/">
					<div class="titleIcon">
						<i aria-hidden="true" class="fa fa-home"></i>
					</div>
					<div class="thisTitle">
						<div class="thisTitle-top">
							<b>Home</b>
						</div>
						<div class="thisTitle-bottom">
							Open<b>EnergyMonitor</b>
						</div>
					</div>
				</a>
				<div class="blackOut"></div>
				<div class="navigation" id="siteLinks">
					<ul>
						<li class="actoemLink" title="you are here: the homepage of OpenEnergyMonitor">
							<a href="https://openenergymonitor.org">
								<i aria-hidden="true" class="fa fa-home"></i>&nbsp;Home
							</a>
						</li>
						<li title="OpenEnergyMonitor system documentation">
							<a href="https://docs.openenergymonitor.org">
								<i aria-hidden="true" class="fa fa-book"></i>&nbsp;Docs
							</a>
						</li>
						<li title="the openenergymonitor forum">
							<a href="https://community.openenergymonitor.org">
								<i aria-hidden="true" class="fa fa-comments"></i>&nbsp;Community
							</a>
						</li>
						<!--
						<li title="keep up with new developments at OpenEnergyMonitor">
							<a href="https://blog.openenergymonitor.org">
							  <i aria-hidden="true" class="fa fa-bullhorn"></i>&nbsp;Blog
							</a>
						</li>-->
						<li title="the official OpenEnergyMonitor online store">
							<a href="https://shop.openenergymonitor.com">
								<i aria-hidden="true" class="fa fa-shopping-cart"></i>&nbsp;Shop
							</a>
						</li>
						<li title="search for something on OpenEnergyMonitor">
							<a class="searchIcon">
								<i aria-hidden="true" class="fa fa-search"></i>&nbsp;Search
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="searchBox">
		<form target="_blank" id="searchform" action="https://www.google.com/cse">
			<div>
				<input type="hidden" name="cx" value="006198118389747886812:_nmxikw563w" />
				<input type="hidden" name="ie" value="UTF-8" />
				<input type="text" class="searchText" value="" name="q" id="q" autocomplete="off" />
				<input type="submit" id="searchsubmit" name="sa" value="Search" />
			</div>
		</form>
	</div>
	<div style="height:40px;top:0;">
	</div>

  <?php echo $content; ?>

	<footer>
		<div class="footer-wrapper">
			<a href="about">
				<i aria-hidden="true" class="fa fa-info-circle"></i>&nbsp;About Us
			</a>
			<a href="https://twitter.com/Openenergymon">
				<i class="fa fa-twitter"></i>&nbsp;Twitter
			</a>
		</div>
	</footer>
	<script>
		var closeStatus = false;

		function openButton() {
			$("html, body").addClass("menuFreeze");
			$(".blackOut").show();
			$(".navigation").show();
			$(".navigation").animate({
				width: '180'
			}, "0.5s");
		}
		$(".fa-navicon").click(function() {
			openButton();
			closeStatus = true;
		});

		function closeButton() {
			$("html, body").removeClass("menuFreeze");
			$(".blackOut").hide();
			$(".navigation").animate({
				width: '0'
			}, "0.5s");
		}
		$(".blackOut").click(function() {
			closeButton();
			closeStatus = false;
		});
		$(window).resize(function() {
			if ($(window).width() > 1079 && closeStatus == true) {
				if (!$("html").hasClass("mobile-device")) {
					closeButton();
					closeStatus = false;
				}
			}
		});
		$(".searchIcon").click(function() {
			$(".searchBox").css("display", "flex");
			$(".searchText").animate({
				width: "200px"
			});
			$(".searchText").focus();
			$("html, body").addClass("menuFreeze");
		});
		$(".searchBox").click(function() {
			$(".searchBox").css("display", "none");
			$(".searchText").blur();
			$(".searchText").css("width", "0");
			closeButton();
		});
		$(".searchBox form").click(function(event) {
			event.stopPropagation();
		});
	</script>
</body>

</html>
