<?php

declare(strict_types=1);

namespace App;

interface ClientInterface
{
    /**
     * @param array $data
     * @return bool
     * @throws SendException
     */
    public function send(array $data): bool;
}
