<?php

namespace MainBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TestControllerTest extends WebTestCase
{
    public function testShowtest()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/showTest');
    }

}
