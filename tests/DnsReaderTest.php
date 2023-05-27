<?php

use Illuminate\Support\Collection;
use Igorstor\Dnsreader\DnsReaderService;
use Orchestra\Testbench\TestCase;

class DnsReaderTest extends TestCase
{
    public function testReturnsEmptyCollectionWhenCheckRecordFails()
    {
        $dnsReaderService = new DnsReaderService();
        $result = $dnsReaderService->getDnsRecords('https://invalidhostname.com');

        $this->assertInstanceOf(Collection::class, $result);
        $this->assertTrue($result->isEmpty());
    }

    public function testReturnsCollectionOfRecordsWhenCheckRecordSucceeds()
    {
        $dnsReaderService = new DnsReaderService();
        $result = $dnsReaderService->getDnsRecords('google.com');

        $this->assertInstanceOf(Collection::class, $result);
        $this->assertTrue($result->isNotEmpty());
    }

    public function testReturnsCollectionOfRecordsWhenHostNameIsEmptyString()
    {
        $dnsReaderService = new DnsReaderService();
        $result = $dnsReaderService->getDnsRecords('');

        $this->assertInstanceOf(Collection::class, $result);
        $this->assertTrue($result->isEmpty());
    }
}
