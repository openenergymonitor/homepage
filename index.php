<?php

/*

Source code is released under the GNU Affero General Public License.
See COPYRIGHT.txt and LICENSE.txt.

---------------------------------------------------------------------

Part of the OpenEnergyMonitor project:
http://openenergymonitor.org

*/

error_reporting(E_ALL);
ini_set('display_errors', 'on');
date_default_timezone_set('Europe/London');

require "core.php";
$path = get_application_path();

$q = "home";
if (isset($_GET['q'])) $q = $_GET['q'];

if ($q=="home") {
    $content = view("pages/home.php", array());
} else if ($q=="about") {
    $content = view("pages/about.php", array());
} else {
    $content = "Sorry page not found";
}

header('Content-Type: text/html');
print view("theme/theme.php", array("content"=>$content));
