## EmonTH
<img class="productimg" src="images/emonth.png" >

The emonTH is an open-source, battery powered, Temperature and Humidity monitoring wireless node.

It's been designed to be an easy to deploy tool for monitoring building / room temperature and humidity.

Using the ATmega328 the emonTH runs standard Arduino sketches and is easy to customise and upload code using the Arduino IDEand a USB to UART cable.

The data from the emonTH is transmitted via wireless (433/868Mhz) to an emonBase web-connected base-station (we recommend a Raspberry Pi with an RFM69Pi) which then posts the data onto an emoncms server (e.g. emoncms.org) for logging, processing and graphing. The room temperature and humidity data can be used to inform a heating control system, feed into a building performance model or simply for general interest!

### Features

- Microcontroller: ATmega328
- Radio: RFM69CW / RFM12B
- Sensors: DHT22 (temperature & Humidity) / DS18B20 (temperature) sensor options
- Power: 2 x AA from on-board holder, LTC3525 3.3V DC-DC boost converter to extend battery life
- Battery life: 7-36 months depending on sensor choice DHT22 / DS18B20 years expected, see blog post 1 and blog post 2
- New version emonTH V1.5 (May 2015): RF node ID DIP switch selector

**DHT 22 Temperature & Humidity Sensor**

- Power supply 3.3-6V DC
- Output signal digital signal via single-bus
- Sensing element Polymer capacitor
- Operating range humidity 0-100%RH; temperature -40~80Celsius
- Accuracy humidity +-2%RH(Max +-5%RH); temperature <+-0.5Celsius
- Resolution or sensitivity humidity 0.1%RH; temperature 0.1Celsius
- Repeatability humidity +-1%RH; temperature +-0.2Celsius
- Humidity hysteresis +-0.3%RH
- Long-term Stability +-0.5%RH/year
- Sensing period Average: 2s
- Independent sensor test report

### Open Hardware

The emonTH is open hardware with the designs released under the Creative Commons Attribution-ShareAlike 3.0 Unported License. The schematics and board files can be viewed and downloaded from the openenergymonitor github hardware repository here:

[https://github.com/openenergymonitor/Hardware/tree/master/emonTH](https://github.com/openenergymonitor/Hardware/tree/master/emonTH)

### Firmware examples

EmonTx Shield Arduino example code can be found on github here:

[https://github.com/openenergymonitor/emonTH](https://github.com/openenergymonitor/emonTH)

