<?php

use Mirahost\NetworkTools\WebsiteIp;

class WebsiteIpTest extends PHPUnit_Framework_TestCase {

    public function testWebsiteIp()
    {
        $WebsiteIp = new WebsiteIp;
        $this->assertContains('IP Address', $WebsiteIp->getWebsiteIp('www.example.com'));
    }

}