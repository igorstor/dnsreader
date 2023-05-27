<?php

namespace Igorstor\Dnsreader;

use Illuminate\Support\Collection;

class DnsReaderService
{
    public function getDnsRecords(string $hostName): Collection
    {
        if (!$records = dns_get_record($hostName)) {
            return Collection::make();
        }

        return Collection::make($records);
    }
}
