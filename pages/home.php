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
	<script src="<?php echo $path; ?>scripts/jquery-3.3.1.min.js"></script>
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
	<div style="background-color:#fff">
				<div class="cover" style="height:280px;background-image: url('<?php echo $path; ?>images/gwynt.jpg');">
					<div class="oemName">
						<div class="oemName-inner">
							Open<strong>EnergyMonitor</strong>
						</div>
					</div>
					<div class="oemDescription">
						<div class="oemDescription-inner">
							<strong>Open source monitoring for understanding energy</strong>
						</div>
					</div>
				</div>
			<div style="clear:both"></div>
	</div>
	<div style="background-color:whitesmoke">
		<div class="container">
			<div>
				<div class="row" >
					<div class="inner">
					<p><span style="font-size:18px">Monitoring for home electricity, solar, battery storage, electric vehicle charging and heat pumps.</span><br>A versitile and expandable system of sensors and integrations built on the Raspberry Pi and Arduino platforms.</p>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div class="container">
			<div>
				<div class="row">
					<div class="inner">
						<br>
						<h2 style="color:#000;margin-top:14px;">Introducing the emonPi2</h2>
						<p>A 6 channel electricity monitor as standard (12 channel with expansion board) with an integrated Raspberry Pi in the same enclosure. 
					    Supports single or three-phase, wired temperature sensing, pulse counting, analog input. Can be used as a base-station receiving data from further electricity monitoring and temperature nodes. 
						Full local or remote data logging and visualisation capability via EmonCMS. Integrates with HomeAssistant and uses MQTT.</p>


						<a href="https://docs.openenergymonitor.org/emonpi2/overview.html"> <img src="<?php echo $path; ?>images/emonPi2_complete_kit__77966.jpg" style="width:100%"></a>
						<br>
						<h4 style="color:#000;margin-top:14px;">Expand with</h4>

						<div style="text-align:left">
						<p>
							<a href="https://docs.openenergymonitor.org/emontx5/overview.html"><img src="<?php echo $path; ?>images/emontx5-min.png" style="float:left; width:50px; margin-right:20px"/></a>
							<b>emonTx5 (available soon):</b> A 6x channel electricity monitoring node. Transmits data via an inbuilt 433MHz radio to an emonPi or emonBase. Great for expanding an emonPi2 monitoring setup where more CT inputs are required either in the same location or in a different part of the building.
						</p><br>
						<p>
							<a href="https://docs.openenergymonitor.org/emonth2/overview.html"><img src="<?php echo $path; ?>images/emonth-min.png" style="float:left; width:50px; margin-right:20px" /></a>
							<b>emonTH2:</b> A battery powered, wireless, room based temperature & humidity monitoring node. Transmits data via 433MHz radio to an emonBase or emonPi. 
						</p><br>
						<p>
							<a href="https://docs.openenergymonitor.org/applications/heatpump.html"><img src="<?php echo $path; ?>images/heatmeter-min.png" style="float:left; width:50px; margin-right:20px" /></a>
							<b>Heat metering:</b> Plug in a M-BUS reader to the emonPi2 USB ports to read from heat meters for heat pump monitoring. See also pre-provisioned level 3 heat pump monitor bundle.</p><br>
						<p>
							<a href="https://docs.openenergymonitor.org/emonbase/rfm69-spi.html"><img src="<?php echo $path; ?>images/emonbase-min.png" style="float:left; width:50px; margin-right:20px" /></a>
							<b>emonBase:</b> A Raspberry Pi base-station that receives data sent from an emonTx and emonTH radio nodes. Can be used instead of an emonPi2 where the installation favours locating these in different parts of a building.
						</p><br>
						</div>
					</div>


					<div style="clear:both"></div>
					<div class="buttonLink" style="padding-top:7px">
						<div class="guideShop">
							All products are available to buy from the
							<a href="https://shop.openenergymonitor.com">
								<div class="guideShop-buttons">
									Shop
									<i aria-hidden="true" class="fa fa-shopping-cart"></i>
								</div>
							</a>
						</div>
						<div class="guideShop">
							Get more information on how to set up an OpenEnergyMonitor system from the
							<a href="https://docs.openenergymonitor.org/overview.html">
								<div class="guideShop-buttons">
									Docs
									<i aria-hidden="true" class="fa fa-book"></i>
								</div>
							</a>
						</div>
					</div>
					<div style="clear:both"></div>
				</div>
			</div>
		</div>
		<div style="margin:14px;"></div>
	</div>
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