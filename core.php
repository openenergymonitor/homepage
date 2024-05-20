<?php

/*

    All Emoncms code is released under the GNU Affero General Public License.
    See COPYRIGHT.txt and LICENSE.txt.

    ---------------------------------------------------------------------
    Part of the OpenEnergyMonitor project:
    http://openenergymonitor.org

*/

// no direct access

function get_application_path()
{
    // Default to http protocol
    $proto = "http";

    // Detect if we are running HTTPS or proxied HTTPS
    if (server('HTTPS') == 'on') {
        // Web server is running native HTTPS
        $proto = "https";
    } elseif (server('HTTP_X_FORWARDED_PROTO') == "https") {
        // Web server is running behind a proxy which is running HTTPS
        $proto = "https";
    }

    if( isset( $_SERVER['HTTP_X_FORWARDED_SERVER'] ))
        $path = dirname("$proto://" . server('HTTP_X_FORWARDED_SERVER') . server('SCRIPT_NAME')) . "/";
    else
        $path = dirname("$proto://" . server('HTTP_HOST') . server('SCRIPT_NAME')) . "/";

    return $path;
}

function view($filepath, array $args)
{
    extract($args);
    ob_start();
    include "$filepath";
    $content = ob_get_clean();
    return $content;
}

function server($index)
{
    $val = null;
    if (isset($_SERVER[$index])) {
        $val = $_SERVER[$index];
    }
    return $val;
}
