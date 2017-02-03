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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<style>

html, body {margin: 0; height: 100vh;}
body {
  font-family: Ubuntu, sans-serif;
  padding:0;
  background-color:#f5f5f5;
  color:#333;
  width: 100%;
  text-align:center;
}
.container {
  box-sizing: border-box;
  margin:0 auto;
  width:1080px;
  overflow: hidden;
}
.oem {
  font-size:42px;
}

.box {
  width:233px;
  float:left;
  background-color:#e3e3e3;
  text-align:left;
  height:300px;
}

.oem {
  font-size:32px;
}

.solar {
  background-image: url("<?php echo $path; ?>images/solar.jpg");
  background-size:cover;
  min-height:300px;
  color:#fff;
  /*padding: 20px;*/
  text-align: left;
}

.homeenergy {
  background-image: url("<?php echo $path; ?>images/home.png");
  background-size:cover;
  min-height:300px;
  color:#fff;
  /*padding: 20px;*/
  text-align: left;
}

.zerocarbon {
  background-image: url("<?php echo $path; ?>images/wind.jpg");
  background-size:cover;
  color:#fff;
}

.cover {
  background:#ffffff url("<?php echo $path; ?>images/gwynt.jpg") no-repeat left center;
  /*background:#ffffff url('images/ecarsolar.jpg') no-repeat left center;*/
  background-size:cover;
}

.halfbox {
  width:480px;
  float:left;
}

h3 {
  font-size:30px;
}

a {
  text-decoration:none;
  color:#ffffff;
}

a:visited {
  text-decoration:none;
  color:#ffffff;
}

a:hover {
  text-decoration:none;
  color:#ffffff;
}

.fa {text-shadow: 2px 2px 2px rgba(150,150,150,0.5)} //drop shadow on icons

.box4 a {
  text-decoration:none;
  color:#ffffff;
}

.box4 a:visited {
  text-decoration:none;
  color:#000;
}

.box4 a:hover {
  text-decoration:none;
  color:#333;
}

.emoncmsappimg {
  float:right;
  width:250px
}

.oemheading {
  color:#44b3e2;
  font-size:30px;
  font-weight:bold;
  font-family:Ubuntu;
}

.oemheading2 {
  color:#fff;
  padding-top:80px;
  padding-bottom:20px;
  font-size:45px;
  font-weight:bold;
}

.column,
.columns {
  width:100%;
  float: left;
  text-align:left;
  box-sizing: border-box; }

.b4img {width:100%}
.b4dsc {width:100%; height:130px}

.box2 {
  /*border-top: 14px solid #ffffff;
  max-height: 300px;*/
  overflow: hidden;
}

.box2 ul {
  padding-left: 15px;
}
/*
.box2.left {
  border-right: 7px solid #ffffff;
}
.box2.right {
  border-left: 7px solid #ffffff;
}*/

@media (max-width: 450px) {
  .container {
    width: 100%;
  }

  .emoncmsappimg {
    width:200px
  }

  .oemheading { font-size:30px; }
  .oemheading2 { padding-top:30px; font-size:27px; }

  .b4img {width:50%; float:left}
  .b4dsc {width:50%; float:right}

  /*
  .box2.left {
  border-right: none;
  }
  .box2.right {
  border-left: none;
  }*/
}

@media (min-width: 450px) and (max-width: 800px) {
  .container {
      width: 600px;
      /*width: 100%;*/
  }

  .box2 { width:50%; }
  .box3 { width:33%; }
  .box4 { width:25%; }


  .box2 {
    /*max-height: 320px;*/
  }
}

@media (min-width: 800px) and (max-width: 1080px) {
  .container {
      width: 800px;
      /*width: 100%;*/
  }

  .emoncmsappimg {
    width:200px
  }

  .box2 { width:50%; }
  .box3 { width:33%; }
  .box4 { width:25%; }
}

@media (min-width: 1080px) {
  .container {
    width: 1080px;
  }

  .box2 { width:50%; }
  .box3 { width:33%; }
  .box4 { width:25%; }
}

.inner { margin:7px; }

.box3 { text-align:center; }

/*---------------------------------------------------------------------/
// Cover image
/*--------------------------------------------------------------------*/

.oemName {
  color: #ffffff;
  width: 100%;
  height: 50%;
  display: table;
}
.oemName-inner {
  display: table-cell;
  vertical-align: middle;
  font-size: 42px;
  padding: 10px;
}
.oemDescription {
  color: #ffffff;
  width: 100%;
  height: 50%;
  display: table;
  text-shadow: 0 0 20px rgba(0,0,0,0.1);
}
.oemDescription-inner {
  display: table-cell;
  vertical-align: middle;
  font-size: 24px;
  padding: 10px;
}
.oemDescription-inner-second {
  font-size: 20px;
  margin: 5px auto;
}
@media (max-width: 450px) {
  .oemName-inner {
    font-size: 30px;
  }
  .oemDescription-inner {
    font-size: 16px;
    padding: 20px;
  }
  .oemDescription-inner-second {
    font-size: 14px;
    max-width: 200px;
  }
}

@media (min-width: 450px) and (max-width: 800px) {
  .oemName-inner {
    font-size: 40px;
  }
}

@media (min-width: 800px) and (max-width: 1080px) {
  .oemName-inner {
    font-size: 50px;
  }
}
/*---------------------------------------------------------------------/
// OEM colors
/*--------------------------------------------------------------------*/

.oemGray {
  background-color: #777777;
}

.oemBlue {
  background-color: #44b3e2;
}

/*---------------------------------------------------------------------/
// Learn icons
/*--------------------------------------------------------------------*/

.learnpageIcons {
  width: 180px;
  height: 180px;
  box-sizing: border-box;
  border: 8px solid #44b3e2;
  display: table;
  background-color: #ffffff;
  color: #ffffff;
  box-shadow: none;
  transition: 0.3s ease-in-out;
  margin: 0 auto;
	padding: 0;
	font-size: 30px;
	text-align: center;
	line-height: 48px;
  border-radius: 50%;
}

.learnpageIcons i {
  display: table-cell;
  vertical-align: middle;
  text-align: center;
  text-shadow: none;
  color: #44b3e2;
}

.inner:hover .learnpageIcons {
  border: 12px solid #44b3e2;
}

/*--------------------------------------------
    custom header...
--------------------------------------------*/

.oemblueBar {
  width: 100%;
  top: 0;
  height: 42px;
  background-color: #44b3e2;
}

@media screen and (max-width: 400px) {
    .oemWrap {
        display: none;
    }
}

.fa-navicon {
    display: none;
    cursor: pointer;
    font-size: 30px;
    line-height: 42px;
    position: absolute;
    left: 0;
    color: #ffffff;
    padding-left: 12px;
    z-index: 10;
}

@media screen and (max-width: 1079px) {
    .fa-navicon {
        display: inline-block;
    }
}

.titleHolder {
    position: relative;
    top: 0;
    width: 100%;
    height: 42px;
    background-color: #44b3e2;
    overflow: hidden;
}

.thisTitle {
    display: inline-block;
    color: #ffffff;
    position: absolute;
    left: 0;
    line-height: 42px;
    padding-left: 7px;
    font-size: 16px;
}

.thisTitle a {
    color: #ffffff;
}

@media screen and (max-width: 1079px) {
    .thisTitle {
        width: 100%;
        position: absolute;
        text-align: right;
        font-size: 20px;
        padding-left: 0;
        
    }
    .thisTitle a {
        padding-right: 12px;
    }
}

/*--------------------------------------------
    site links on larger screens...
--------------------------------------------*/

.navigation {
    position: absolute;
    display: inline-block;
    top: 0;
    right: 0;
    height: 42px;
    min-width: 700px;
    overflow: visible;
    padding-right: 7px;
}

    .navigation ul {
        float: right;
        list-style-type: none;
        top: 0;
        margin: 0;
        padding: 0;
        height: 100%;
    }
       
    .navigation ul li {
        float: left;
        background-color: #44b3e2;
    }
           
    .navigation ul li a {
        display: block;
        line-height: 42px;
        font-family:"ubuntu";
        font-size: 16px;
        text-align: center;
        padding-left: 10px;
        padding-right: 10px;
        color: #ffffff;
    }

/*--------------------------------------------
    site links on smaller screens...
--------------------------------------------*/

.menuFreeze {
    height: 100%;
    overflow: hidden;
}

@media screen and (max-width: 1079px) {

    .navigation {
        position: fixed;
        display: none;
        top: 0;
        left: 0;
        height: 100vh;
        margin: 0;
        width: 0;
        font-size: 20px;
        background-color: #44b3e2;
        color: #ffffff;
        z-index: 9999;
        box-sizing: border-box;
        overflow: auto;
        min-width: 0;
        padding-right: 0;
    }
    
        .navigation ul {
            list-style-type: none;
            margin: 0;
            padding-top: 0;
        }
        
        .navigation ul li a {
            box-sizing: border-box;
            font-family: "ubuntu";
            font-size: 20px;
            display: block;
            color: #ffffff;
            padding: 20px 20px 20px 40px;
            min-width: 220px;
            text-align: left;
        }
        
        .navigation ul li .fa {
            min-width: 25px;
        }
}

/*--------------------------------------------
    grayed out overlay when menu is active...
--------------------------------------------*/

.blackOut {
    position: fixed;
    display: none;
    top: 0;
    right: 0;
    height: 100vh;
    width: 100vw;
    background-color: rgba(0,0,0,0.5);
    overflow: hidden;
    cursor: pointer;
    z-index: 11;
}

/*--------------------------------------------
    highlight active link...
--------------------------------------------*/

.actoemLink {
    background-color: #368fb4 !important;
}

    .actoemLink a {
        color: #ffffff !important;
    }

</style>
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
    <div class="cover" style="height:400px"><!-- Cover image -->
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
            <div class="inner homeenergy"><div style="padding:20px">
              <img class="emoncmsappimg" src="<?php echo $path; ?>images/myelectric_app.png">
              <h3>Energy Use</h3>
              <ul>
                <li>How much energy do I use?</li>
                <li>Compared to an average home?</li>
                <li>Compared to a low energy home?</li>
              </ul>
            </div></div>
          </a>
        </div>
        <div class="column box2 right">
          <a href="https://guide.openenergymonitor.org/applications/solar-pv">
            <div class="inner solar"><div style="padding:20px">
              <img class="emoncmsappimg" src="<?php echo $path; ?>images/mysolar_app.png">
              <h3>Solar PV</h3>
              <ul>
                <li>Explore solar PV generation</li>
                <li>Compare consumption</li>
                <li>Calculate on-site use</li>
                <li>Optimise demand matching</li>
              </ul>
            </div></div>
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


  <div style="background-color:#44b3e2; margin-top:7px;">
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
