<?php global $path; ?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="#44b3e2" name="theme-color">
	<title>Home | OpenEnergyMonitor</title>
	<link href="<?php echo $path; ?>theme/favicon.ico" rel="shortcut icon"><!-- Load font locally to enable full offline use, un comment below to load font remotely-->
	<!--<link href="https://fonts.googleapis.com/css?family=Ubuntu:300" rel="stylesheet" type="text/css">-->
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
	<link href="<?php echo $path; ?>fonts/ubuntu.css?family=Ubuntu:300" rel="stylesheet" type="text/css">
	<link href="<?php echo $path; ?>theme/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $path; ?>theme/style.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
	</script>
</head>
<body>
	<div class="oemblueBar">
		<!-- Top navigation bar -->
		<div class="container">
			<div class="titleHolder">
				<i class="fa fa-navicon"></i>
				<div class="thisTitle">
					<a href="/"><strong>Home</strong> <span class="oemWrap">| Open<strong>EnergyMonitor</strong></span></a>
				</div>
				<div class="navigation" id="siteLinks">
					<ul>
						<li class="actoemLink" title="you are here: the homepage of OpenEnergyMonitor">
							<a href="https://openenergymonitor.org"><i aria-hidden="true" class="fa fa-home"></i>&nbsp;Home</a>
						</li>
						<li title="a user guide for the OpenEnergyMonitor system">
							<a href="https://guide.openenergymonitor.org"><i aria-hidden="true" class="fa fa-book"></i>&nbsp;Guide</a>
						</li>
						<li title="general information about energy monitoring, diversion and sustainability">
							<a href="https://learn.openenergymonitor.org"><i aria-hidden="true" class="fa fa-mortar-board"></i>&nbsp;Learn</a>
						</li>
						<li title="a definitive list of resources for OpenEnergyMonitor hardware">
							<a href="https://guide.openenergymonitor.org/technical/resources/"><i aria-hidden="true" class="fa fa-list-alt"></i>&nbsp;Resources</a>
						</li>
						<li title="the openenergymonitor forum">
							<a href="https://community.openenergymonitor.org"><i aria-hidden="true" class="fa fa-comments"></i>&nbsp;Community</a>
						</li>
						<li title="keep up with new developments at OpenEnergyMonitor">
							<a href="https://blog.openenergymonitor.org"><i aria-hidden="true" class="fa fa-bullhorn"></i>&nbsp;Blog</a>
						</li>
						<li title="the official OpenEnergyMonitor online store">
							<a href="https://shop.openenergymonitor.com"><i aria-hidden="true" class="fa fa-shopping-cart"></i>&nbsp;Shop</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<!--	<div style="height:7px"></div> -->
	<div style="background-color: #fff">
  	<div class="container">
  		<div class="inner">
  			<div class="cover" style="height:400px;background-image: url('<?php echo $path; ?>images/gwynt.jpg');    box-shadow: 2px 4px 10px #777;
">
  				<!-- Cover image -->
  				<div class="oemName">
  					<div class="oemName-inner">
  						Open<strong>EnergyMonitor</strong>
  					</div>
  				</div>
  				<div class="oemDescription">
  					<div class="oemDescription-inner">
  						<strong>Open source monitoring for understanding energy</strong><br>
  						<div class="oemDescription-inner-second">
  							Exploring the context of renewable energy and zero carbon
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="row">
  			<!-- First row of boxes -->
  			<div class="column box2 left">
  				<a href="https://guide.openenergymonitor.org/applications/home-energy">
  				<div class="inner homeenergy" style="background-image: url('<?php echo $path; ?>images/home.png');box-shadow: 2px 4px 10px #777;
">
  					<div style="padding:20px;">
  						<img class="emoncmsappimg" src="<?php echo $path; ?>images/myelectric_app.png">
  						<h3>Energy<br>
  						Use</h3>
  						<ul>
  							<li>Monitor electricity, temperature and humidity</li>
  							<li>View historic and real-time data</li>
  							<li>Local and/or remote data logging</li>
  						</ul>
  					</div>
  				</div></a>
  			</div>
  			<div class="column box2 right">
  				<a href="https://guide.openenergymonitor.org/applications/solar-pv">
  				<div class="inner solar" style="background-image: url('<?php echo $path; ?>images/solar.jpg');    box-shadow: 2px 4px 10px #777;
">
  					<div style="padding:20px">
  						<img class="emoncmsappimg" src="<?php echo $path; ?>images/mysolar_app.png">
  						<h3>Solar PV Monitoring</h3>
  						<ul>
  							<li>Explore solar PV generation</li>
  							<li>Compare consumption</li>
  							<li>Calculate on-site use</li>
  							<li>Optimise demand matching</li>
  						</ul>
  					</div>
  				</div></a>
  			</div>
  		</div>
  		<div style="clear:both"></div>
  		<div class="row">
  			<div class="column box2">
  				<a href="https://guide.openenergymonitor.org/integrations/openevse/">
  				<div class="inner homeenergy" style="background-image: url('<?php echo $path; ?>images/leaf_openevse2.jpg');    box-shadow: 2px 4px 10px #777;
">
  					<div style="padding:20px;">
  						<!--<img class="emoncmsappimg" src="<?php echo $path; ?>">-->
  						<h3>OpenEVSE<br>
  						EV Charging</h3>
  						<ul>
  							<li>WiFi connectivity</li>
  							<li>Adjustable charge rate</li>
  							<li>Emoncms data logging</li>
  							<li>Open API</li>
  						</ul>
  					</div>
  				</div></a>
  			</div>
  			<div class="column box2">
  				<a href="https://heatpumpmonitor.org/">
  				<div class="inner solar" style="background-image: url('<?php echo $path; ?>images/heatpumpimage.jpg');    box-shadow: 2px 4px 10px #777;
">
  					<div style="padding:20px">
  						<!--<img class="emoncmsappimg" src="<?php echo $path; ?>">-->
  						<h3>Heat Pump<br>
  						Monitoring</h3>
  						<ul>
  							<li>Electricity and heat monitoring</li>
  							<li>Track heat pump performance</li>
  							<li>Remote diagnostics</li>
  						</ul>
  					</div>
  				</div></a>
  			</div>
  		</div>
  		<div style="clear:both"></div>
  	</div>
	</div>
	<div style="background-color:#86ceec;">
		<div class="container" style="color:#fff; background-color:#86ceec;">
			<div style="background-color:#86ceec;">
				<div class="row">
					<div class="inner">
						<h2 style="color:#ffffff">Introducing the OpenEnergyMonitor system</h2>
						<p>Pre-assembled open-hardware electricity, temperature and humidity monitoring units based on the Arduino and Raspberry Pi platforms.</p>Get more information on how to set up an OpenEnergyMonitor system from the <b>Guide</b>.
					</div>
					<div class="column box4">
						<a href="https://guide.openenergymonitor.org/setup">
						<div class="inner" style="background-color:#e3e3e3;box-shadow: 1px 1px 10px #777">
							<img class="b4img" src="<?php echo $path; ?>images/emonpi.jpg">
							<div class="b4dsc">
								<div class="inner" style="color:#333">
									<b>emonPi</b><br>
									<div style="font-size:14px; color:#333">
										2x CT Sensor inputs<br>
										1x VRMS input<br>
										1x Pulse input<br>
										6 x Temperature<br>
										Emoncms logging<br>
										Node-RED & OpenHAB<br>
									</div>
								</div>
							</div>
							<div style="clear:both"></div>
						</div></a>
					</div>
					<div class="column box4">
						<a href="https://guide.openenergymonitor.org/setup/emontx">
						<div class="inner" style="background-color:#e3e3e3;box-shadow: 1px 1px 10px #777">
							<img class="b4img" src="<?php echo $path; ?>images/emontx.jpg">
							<div class="b4dsc">
								<div class="inner" style="color:#333">
									<b>emonTx</b><br>
									<div style="font-size:14px; color:#333">
										4x CT Sensor inputs<br>
										1x VRMS input<br>
										1x Pulse input<br>
										6 x Temperature<br>
										Battery option<br>
									</div>
								</div>
							</div>
							<div style="clear:both"></div>
						</div></a>
					</div>
					<div class="column box4">
						<a href="https://guide.openenergymonitor.org/setup/emonth">
						<div class="inner" style="background-color:#e3e3e3;box-shadow: 1px 1px 10px #777">
							<img class="b4img" src="<?php echo $path; ?>images/emonth.png">
							<div class="b4dsc">
								<div class="inner" style="color:#333">
									<b>emonTH</b><br>
									<div style="font-size:14px; color:#333">
										Internal temperature<br>
										Internal humidity<br>
										External temperature<br>
										Pulse input<br>
										Long battery life<br>
									</div>
								</div>
							</div>
							<div style="clear:both"></div>
						</div></a>
					</div>
					<div class="column box4">
						<a href="https://emoncms.org">
						<div class="inner" style="background-color:#e3e3e3;box-shadow: 1px 1px 10px #777">
							<img class="b4img" src="<?php echo $path; ?>images/emoncms.png">
							<div class="b4dsc">
								<div class="inner" style="color:#333">
									<b>Emoncms</b><br>
									<div style="font-size:14px; color:#333">
										Web application<br>
										Data storage<br>
										Data processing<br>
										Data visualisation<br>
										Cloud or self-hosted<br>
									</div>
								</div>
							</div>
							<div style="clear:both"></div>
						</div></a>
					</div>
					All products are available to buy from the <b>Shop</b>.
					<div style="clear:both"></div>
				</div>
			</div>
		</div>
		<div style="padding:10px;"></div>
	</div>
	<div style="background-color: #44b3e2; padding: 20px;">
		<div class="container" style="color:#fff; background-color:#44b3e2;">
			<div style="width:600px;margin: 0 auto;">
				<div style="display:inline-block;"><img src="<?php echo $path; ?>images/book.png" style="float:left; width:80px; padding:10px"></div>
				<div style="display:inline-block; width: 400px;vertical-align:top;height:100px;padding:10px">
					<h2 style="text-align:left;margin:0;">Learn</h2>
					<p style="text-align:left;margin:0;">Learn more with "Learn" - our home of learning and education. More in-depth knowledge on basic principles of electricity monitoring, sustainable energy and more.</p>
				</div>
			</div>
			<div style="clear:both"></div><br>
			<div class="column box3">
				<div class="inner">
					<a href="https://learn.openenergymonitor.org/electricity-monitoring/ac-power-theory/introduction">
					<div class='learnpageIcons'>
						<i class='fa fa-bolt fa-3x'></i>
						<div class='iconCircle'></div>
					</div>
					<h2>Electricity<br>
					Monitoring</h2>
					<p>Learn all about the basics of electricity monitoring, from AC power theory to designing and building your own monitoring system.</p></a>
				</div>
			</div>
			<div class="column box3">
				<div class="inner">
					<a href="https://learn.openenergymonitor.org/sustainable-energy/energy/introduction">
					<div class='learnpageIcons'>
						<i class='fa fa-globe fa-3x'></i>
						<div class='iconCircle'></div>
					</div>
					<h2>Sustainable<br>
					Energy</h2>
					<p>Exploring the context of energy, renewable supply, energy efficiency and zero carbon energy systems.</p></a>
				</div>
			</div>
			<div class="column box3">
				<div class="inner">
					<a href="https://learn.openenergymonitor.org/pv-diversion/introduction/choosing-an-energy-diverter">
					<div class='learnpageIcons'>
						<i class='fa fa-random fa-3x' style="padding: 10px 0 0 5px"></i>
						<div class='iconCircle'></div>
					</div>
					<h2>PV<br>
					Diversion</h2>
					<p>Learn how to build a solar PV diverter to make use of excess energy.</p></a>
				</div>
			</div>
		</div>
	</div>
	<div class="blackOut"></div>
	<footer>
		<div class="footer-wrapper">
			<a href="?q=about"><i aria-hidden="true" class="fa fa-info-circle"></i>&nbsp;About Us</a> <a href="https://twitter.com/Openenergymon"><i class="fa fa-twitter"></i>&nbsp;Twitter</a>
		</div>
	</footer>
	<script>

	var closeStatus = false;

	function openButton() {
	   $("html, body").addClass("menuFreeze");
	   $(".blackOut").show();
	   $(".navigation").show();
	   $(".navigation").animate({ width:'220' },"0.5s");
	}

	$(".fa-navicon").click(function() {
	   openButton();
	   closeStatus = true;
	});

	function closeButton() {
	   $("html, body").removeClass("menuFreeze");
	   $(".blackOut").hide();
	   $(".navigation").animate({ width:'0' },"0.5s");
	}

	$(".blackOut").click(function() {
	   closeButton();
	   closeStatus = false;
	});


	$(window).resize(function(){
	   if ($(window).width() > 1079 && closeStatus == true) {
	       if (!$("html").hasClass("mobile-device")) {
	           closeButton();
	           closeStatus = false;
	       }
	   }
	});

	</script>
</body>
</html>