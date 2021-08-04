<?php

declare(strict_types=1);

namespace App;

class CrmManager
{
    private ClientInterface $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function sendPerson(array $clientEntity): bool
    {
        return $this->client->send($clientEntity);
    }
}
