<?php

namespace Igorstor\Dnsreader\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Igorstor\Dnsreader\DnsReaderService;
use Igorstor\Dnsreader\Facades\DnsReader;

class DnsReaderServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('DnsReaderService', function()
        {
            return new DnsReaderService;
        });
    }

    public function boot()
    {
        AliasLoader::getInstance()->alias('DnsReader', DnsReader::class);
    }
}
