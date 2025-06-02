<?php global $path; ?>

<!-- Top banner -->
<div style="background-color:#fff">
    <div class="cover" style="height:200px;background-image: url('<?php echo $path; ?>pages/img/gwynt.jpg');">
        <div class="oemName">
            <div class="oemName-inner">
                Open<strong>EnergyMonitor</strong>
            </div>
        </div>
        <div class="oemDescription">
            <div class="oemDescription-inner">
                <strong></strong>
            </div>
        </div>
    </div>
    <div style="clear:both"></div>
</div>

<!-- System description -->
<div style="background-color:whitesmoke">
    <div class="container">
        <div class="row">
            <div class="inner">
                <p><span style="font-size:18px">Open source monitoring for electricity, solar, storage, heat pumps and electric vehicle charging.</span></p>
                <p>A versatile and expandable system of sensors and integrations built on the Raspberry Pi and Arduino platforms.</p>

            </div>
        </div>
    </div>
</div>

<!-- Main content -->
<div class="container">
    <div class="row">
        <div class="inner">
            <br>
            <h2 style="color:#000;margin-top:14px;">Introducing the emonPi2</h2>
            <p>A 6 channel electricity monitor with an integrated Raspberry Pi.
                Supports single or three-phase monitoring, wired temperature sensing & pulse counting. Can be used as a base-station for further sensor nodes.
                Full local or remote data logging and visualisation capability via EmonCMS. <!--Integrates with HomeAssistant and uses MQTT.--></p>


            <a href="https://shop.openenergymonitor.com/energy-monitoring/"> <img src="<?php echo $path; ?>pages/img/emonPi2_complete_kit__77966.jpg" style="width:100%"></a>
            <br>
            <h4 style="color:#000;margin-top:14px;">Expand your system with:</h4>

            <div style="text-align:left">
                <p>
                    <a href="https://shop.openenergymonitor.com/emontx5-emonpi2-6-ct-expansion-board/"><img src="<?php echo $path; ?>pages/img/ctsensor.png" style="float:left; width:50px; margin-right:20px" /></a>
                    <b>Expand the emonPi2 to 12 CT channels:</b> Add a further 6 CT channels to the emonPi2 (Pi Zero 2W option only).
                </p><br>
                <p>
                    <a href="https://shop.openenergymonitor.com/emontx5-6-channel-energy-monitoring-transmitter-node/"><img src="<?php echo $path; ?>pages/img/emontx5-min.png" style="float:left; width:50px; margin-right:20px" /></a>
                    <b>emonTx5:</b> A 6 channel electricity monitoring node. Transmits data via 433MHz radio to an emonPi or emonBase. Great for expanding an emonPi2 monitoring setup where more CT inputs are required either in the same location or in a different part of the building. Expand the emonTx5 to 12 CT channels with an optional expansion board.
                </p><br>
                <p>
                    <a href="https://shop.openenergymonitor.com/emonth-temperature-humidity-node/"><img src="<?php echo $path; ?>pages/img/emonth-min.png" style="float:left; width:50px; margin-right:20px" /></a>
                    <b>emonTH2:</b> A battery powered, wireless, room based temperature & humidity monitoring node. Transmits data via 433MHz radio to an emonBase or emonPi.
                </p><br>
                <p>
                    <a href="https://shop.openenergymonitor.com/heat-pump-monitoring/"><img src="<?php echo $path; ?>pages/img/heatmeter-min.png" style="float:left; width:50px; margin-right:20px" /></a>
                    <b>Heat metering:</b> Plug in a M-BUS reader and Modbus reader to the emonPi2 USB ports to read from heat meters and other electricity meters for heat pump monitoring. See also pre-provisioned level 3 heat pump monitor bundle and the <a href="https://heatpumpmonitor.org/" style="color:#2379d6">heatpumpmonitor.org</a> initiative.
                </p><br>
        
            </div>

            <h4 style="color:#000;margin-top:14px;">Data logging and visualisation with EmonCMS:</h4>
            <p>Local on the emonPi2/emonBase. Remote on <a href="https://emoncms.org" style="color:#2379d6">EmonCMS.org</a></p>
            <p>Pre built dashboards, advanced graphing tools, flexible input processing.</p>
            <a href="https://docs.openenergymonitor.org/emoncms/apps.html"> <img src="<?php echo $path; ?>pages/img/myheatpump.png" style="width:100%"></a>


        </div>
    </div>
</div>

<!-- Shop and documentation links -->
<div style="background-color:whitesmoke">
    <div class="container">
        <div class="row">
            <div class="inner">
                <div class="buttonLink">
                    <div class="guideShop">
                        <p>All products are available to buy from the shop.</p>

                        <a href="https://shop.openenergymonitor.com">
                            <div class="guideShop-buttons">
                                Shop
                                <i aria-hidden="true" class="fa fa-shopping-cart"></i>
                            </div>
                        </a>
                    </div>
                    <div class="guideShop">
                        <p>Get more information on how to set up an OpenEnergyMonitor system.</p>
                        <a href="https://docs.openenergymonitor.org/overview.html">
                            <div class="guideShop-buttons">
                                Docs
                                <i aria-hidden="true" class="fa fa-book"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
