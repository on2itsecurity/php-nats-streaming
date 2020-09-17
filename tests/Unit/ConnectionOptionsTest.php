<?php

class ConnectionOptionsTest extends \PHPUnit_Framework_TestCase
{

    public function testConstructorDefaults()
    {
        $opts = new \NatsStreaming\ConnectionOptions();

        $this->assertEquals('', $opts->getDiscoverPrefix());
        $this->assertEquals('', $opts->getClientID());
        $this->assertEquals('test-cluster', $opts->getClusterID());
        $this->assertFalse($opts->getExplicitClose());

        $this->assertNull($opts->getNatsOptions());
    }

    public function testConstructor()
    {
        $opts = new \NatsStreaming\ConnectionOptions([
            'discoverPrefix' => 'foo',
            'clientID' => 'bar',
            'clusterID' =>'baz',
            'explicitClose' => true,
            'foobar' => 'baz',
            'natsOptions' => new \Nats\ConnectionOptions(['host' => 'hosty']),
        ]);

        $this->assertEquals('foo', $opts->getDiscoverPrefix());
        $this->assertEquals('bar', $opts->getClientID());
        $this->assertEquals('baz', $opts->getClusterID());
        $this->assertTrue($opts->getExplicitClose());

        $this->assertEquals('hosty', $opts->getNatsOptions()->getHost());
    }
}
