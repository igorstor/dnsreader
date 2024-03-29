<?php

namespace Igorstor\Dnsreader\Facades;

use Illuminate\Support\Facades\Facade;

class DnsReader extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'DnsReaderService';
    }

}
