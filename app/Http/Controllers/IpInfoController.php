<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IP2ProxyLaravel; 

class IpInfoController extends Controller
{
    public function lookup(Request $request){
        $ip = "79.141.231.133";
        $api_1 = 'https://ipapi.com/' . $ip . '/latlong/';
        $api_1 = 'http://api.ipapi.com/'.$ip.'?access_key=d4d048dff062566f780e0f9166bef0e9';
        $location = file_get_contents($api_1);
        $point = explode(",", $location);

        $pp = explode("\"",json_encode($point));

        return $pp[34];
        return ($point);

        $records = IP2ProxyLaravel::get($ip, 'bin');

        echo '<p><strong>IP Address: </strong>' . $records['ipAddress'] . '</p>';
        echo '<p><strong>IP Number: </strong>' . $records['ipNumber'] . '</p>';
        echo '<p><strong>IP Version: </strong>' . $records['ipVersion'] . '</p>';
        echo '<p><strong>Country Code: </strong>' . $records['countryCode'] . '</p>';
        echo '<p><strong>Country: </strong>' . $records['countryName'] . '</p>';
        echo '<p><strong>State: </strong>' . $records['regionName'] . '</p>';
        echo '<p><strong>City: </strong>' . $records['cityName'] . '</p>';
        echo '<p><strong>Proxy Type: </strong>' . $records['proxyType'] . '</p>';
        echo '<p><strong>Is Proxy: </strong>' . $records['isProxy'] . '</p>';
        echo '<p><strong>ISP: </strong>' . $records['isp'] . '</p>';
        echo '<p><strong>Domain: </strong>' . $records['domain'] . '</p>';
        echo '<p><strong>Usage Type: </strong>' . $records['usageType'] . '</p>';
        echo '<p><strong>ASN: </strong>' . $records['asn'] . '</p>';
        echo '<p><strong>AS: </strong>' . $records['as'] . '</p>';
        echo '<p><strong>Last Seen: </strong>' . $records['lastSeen'] . '</p>';
        echo '<p><strong>Threat: </strong>' . $records['threat'] . '</p>';
    }
}
