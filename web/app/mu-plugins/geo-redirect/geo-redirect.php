<?php
/**
 * Plugin Name:  GEO redirect
 * Plugin URI:   https://codesomelabs.com
 * Description:  Redirects to the correct language based on the user's location
 * Version:      1.0.0
 * Author:       Codesome Labs
 * Author URI:   https://codesomelabs.com
 * License:      MIT License
 */

namespace CodesomeLabs\GeoRedirect;

use Exception;
use GeoIp2\Database\Reader;

add_action('wp', function () {

    if (current_user_can('manage_options')) {
        return;
    }

    global $sitepress;

    try {
        $reader = new Reader(__DIR__ . '/GeoLite2-Country.mmdb');
        $record = $reader->country(get_client_ip());
        $countryCode = strtolower($record->country->isoCode);

        if (in_array($countryCode, ['us', 'usa', 'ca', 'can'])) {
            $lang = 'us';

            if ($sitepress->get_current_language() !== $lang) {
                do_action('wpml_switch_language', $lang);
                wp_redirect(get_permalink());
            }
        }
    } catch (Exception $e) {
        // handle exception...
    }
});

function get_client_ip(): string
{
    if (getenv('HTTP_CLIENT_IP')) {
        $ipaddress = getenv('HTTP_CLIENT_IP');
    } else if (getenv('HTTP_X_FORWARDED_FOR')) {
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    } else if (getenv('HTTP_X_FORWARDED')) {
        $ipaddress = getenv('HTTP_X_FORWARDED');
    } else if (getenv('HTTP_FORWARDED_FOR')) {
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    } else if (getenv('HTTP_FORWARDED')) {
        $ipaddress = getenv('HTTP_FORWARDED');
    } else if (getenv('REMOTE_ADDR')) {
        $ipaddress = getenv('REMOTE_ADDR');
    } else {
        $ipaddress = 'UNKNOWN';
    }

    return $ipaddress;
}
