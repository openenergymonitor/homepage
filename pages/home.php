<?php global $path; ?>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#44b3e2" />

<title>Home | OpenEnergyMonitor</title>
<link rel="shortcut icon" href="<?php echo $path; ?>theme/favicon.ico" />
<!-- Load font locally to enable full offline use, un comment below to load font remotely-->
<!--<link href="https://fonts.googleapis.com/css?family=Ubuntu:300" rel="stylesheet" type="text/css">-->
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>fonts/ubuntu.css?family=Ubuntu:300">
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>theme/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>theme/style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<body>
<div class="oemblueBar"><!-- Top navigation bar -->
<div class= "container">
<div class="titleHolder">
  <i class="fa fa-navicon"></i>
    <div class="thisTitle">
      <a href="/">
        <strong>Home</strong>
        <span class="oemWrap">
        | Open<strong>EnergyMonitor</strong>
        </span>
      </a>
    </div>
<div id="siteLinks" class="navigation">
    <ul>
        <li title="you are here: the homepage of OpenEnergyMonitor" class="actoemLink"><a href="https://openenergymonitor.org">
            <i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a></li>
        <li title="a user guide for the OpenEnergyMonitor system"><a href="https://guide.openenergymonitor.org">
            <i class="fa fa-book" aria-hidden="true"></i>&nbsp;Guide</a></li>
        <li title="general information about energy monitoring, diversion and sustainability"><a href="https://learn.openenergymonitor.org">
            <i class="fa fa-mortar-board" aria-hidden="true"></i>&nbsp;Learn</a></li>
        <li title="a definitive list of resources for OpenEnergyMonitor hardware"><a href="https://guide.openenergymonitor.org/technical/resources/">
            <i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;Resources</a></li>
        <li title="the openenergymonitor forum"><a href="https://community.openenergymonitor.org">
            <i class="fa fa-comments" aria-hidden="true"></i>&nbsp;Community</a></li>
        <li title="keep up with new developments at OpenEnergyMonitor"><a href="https://blog.openenergymonitor.org">
            <i class="fa fa-bullhorn" aria-hidden="true"></i>&nbsp;Blog</a></li>
        <li title="the official OpenEnergyMonitor online store"><a href="https://shop.openenergymonitor.com">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;Shop</a></li>
    </ul>
</div>
</div>
</div>
</div>

<div style="height:7px"></div>
<div class="container">
  <div class="inner">
    <div class="cover" style="height:400px;background-image: url('<?php echo $path; ?>images/gwynt.jpg');"><!-- Cover image -->
      <div class="oemName">
        <div class="oemName-inner">
          Open<strong>EnergyMonitor</strong>
        </div>
      </div>
      <div class="oemDescription">
        <div class="oemDescription-inner">
          <strong>Open source monitoring for understanding energy</strong>
          <br>
          <div class="oemDescription-inner-second">Exploring the context of renewable energy and zero carbon</div>
        </div>
      </div>
    </div>
  </div>

    <div class="row"><!-- First row of boxes -->
        <div class="column box2 left">
          <a href="https://guide.openenergymonitor.org/applications/home-energy">
            <div class="inner homeenergy" style="background-image: url('<?php echo $path; ?>images/home.png');">
              <div style="padding:20px">
                <img class="emoncmsappimg" src="<?php echo $path; ?>images/myelectric_app.png">
                <h3>Energy Use</h3>
                <ul>
                  <li>How much energy do I use?</li>
                  <li>Compared to an average home?</li>
                  <li>Compared to a low energy home?</li>
                </ul>
              </div>
            </div>
          </a>
        </div>
        <div class="column box2 right">
          <a href="https://guide.openenergymonitor.org/applications/solar-pv">
            <div class="inner solar" style="background-image: url('<?php echo $path; ?>images/solar.jpg');">
              <div style="padding:20px">
                <img class="emoncmsappimg" src="<?php echo $path; ?>images/mysolar_app.png">
                <h3>Solar PV</h3>
                <ul>
                  <li>Explore solar PV generation</li>
                  <li>Compare consumption</li>
                  <li>Calculate on-site use</li>
                  <li>Optimise demand matching</li>
                </ul>
              </div>
            </div>
          </a>
        </div>
    </div>
    <div style="clear:both">
    </div>
    <br>
    <div class="row">
      <div class="inner">
        <h2>OpenEnergyMonitor System</h2>
        <p>Pre-assembled open-hardware electricity, temperature and humidity monitoring units based on the Arduino and Raspberry Pi platforms.</p>
      </div>
      <div class="column box4">
        <a href="https://guide.openenergymonitor.org/setup">
          <div class="inner" style="background-color:#e3e3e3">
            <img class="b4img" src="<?php echo $path; ?>images/emonpi.jpg">
            <div class="b4dsc">
              <div class="inner" style="color:#333">
                <b>emonPi</b>
                <br>
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
          </div>
        </a>
      </div>
      <div class="column box4">
        <a href="https://guide.openenergymonitor.org/setup/emontx">
          <div class="inner" style="background-color:#e3e3e3">
            <img class="b4img" src="<?php echo $path; ?>images/emontx.jpg">
            <div class="b4dsc">
              <div class="inner" style="color:#333">
                <b>emonTx</b>
                <br>
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
          </div>
        </a>
      </div>
      <div class="column box4">
        <a href="https://guide.openenergymonitor.org/setup/emonth">
          <div class="inner" style="background-color:#e3e3e3">
            <img class="b4img" src="<?php echo $path; ?>images/emonth.png">
            <div class="b4dsc">
              <div class="inner" style="color:#333">
                <b>emonTH</b>
                <br>
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
          </div>
        </a>
      </div>
      <div class="column box4">
        <a href="https://emoncms.org">
          <div class="inner" style="background-color:#e3e3e3">
            <img class="b4img" src="<?php echo $path; ?>images/emoncms.png">
            <div class="b4dsc">
              <div class="inner" style="color:#333">
                <b>Emoncms</b>
                <br>
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
          </div>
        </a>
      </div>
      <div style="clear:both">
      </div>
    </div>
  </div>


  <div style="background-color:#44b3e2; margin-top:7px; padding: 20px;">
    <div class="container" style="color:#fff; background-color:#44b3e2;">
      <br>
      <div style="margin: 0 auto; width:330px; text-align:left">
        <img src="<?php echo $path; ?>images/book.png" style="float:left; width:60px; padding-right:20px">
        <h2>Learn<br>OpenEnergyMonitor</h2>
        <div style="clear:both">
        </div>
      </div>
      <br>
      <div class="column box3">
        <div class="inner">

          <a href="https://learn.openenergymonitor.org/electricity-monitoring/ac-power-theory/introduction">
          <div class='learnpageIcons'>
          <i class='fa fa-bolt fa-3x'></i>
          <div class='iconCircle'></div>
          </div>
          <h2>Electricity<br/> Monitoring</h2>
          <p>Learn all about the basics of electricity monitoring, from AC power theory to designing and building your own monitoring system.</p>
          </a>

        </div>
      </div>
      <div class="column box3">
        <div class="inner">

          <a href="https://learn.openenergymonitor.org/sustainable-energy/energy/introduction">
          <div class='learnpageIcons'>
          <i class='fa fa-globe fa-3x'></i>
          <div class='iconCircle'></div>
          </div>
          <h2>Sustainable<br/> Energy</h2>
          <p>Exploring the context of energy, renewable supply, energy efficiency and zero carbon energy systems.</p>
          </a>
        </div>
      </div>
      <div class="column box3">
        <div class="inner">
          <a href="https://learn.openenergymonitor.org/pv-diversion/introduction/choosing-an-energy-diverter">
          <div class='learnpageIcons'>
          <i style="padding: 10px 0 0 5px" class='fa fa-random fa-3x'></i>
          <div class='iconCircle'></div>
          </div>
          <h2>PV<br/> Diversion</h2>
          <p>Learn how to build a solar PV diverter to make use of excess energy.</p>
          </a>
        </div>
      </div>
    </div>
  </div>
 <div class="blackOut"></div>

<footer>
  <div class="footer-wrapper">
    <a href="?q=about"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;About Us</a>
    <a href="https://twitter.com/Openenergymon"><i class="fa fa-twitter"></i>&nbsp;Twitter</a>
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
