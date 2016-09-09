<?php

namespace Mirahost\NetworkTools;

class WebsiteIp
{

    public function getWebsiteIp($domain)
    {

        $output = null;
        $ipAddress = null;
        $serverName = null;

        $ipAddress = @gethostbyname($domain);

        if(isset($ipAddress)) {

            $serverName = gethostbyaddr($ipAddress);
            $output  = 'IP Address: ' . $ipAddress . "\n";
        }

        if(isset($serverName)) {

            $output .= 'Server Name: ' . $serverName . "\n";
        }

        return $output;
    }
}