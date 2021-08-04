<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

class BazClient extends Client
{
    public function send(array $data): bool
    {
        //@todo Do not implement a logic for send specifically. Imagine that she is here.

        return true;
    }

    protected function validateSettings(array $settings): void
    {
        if (empty($settings['user'])) {
            throw new InvalidArgumentException('User must be set!');
        }

        if (empty($settings['passwd'])) {
            throw new InvalidArgumentException('Password must be set!');
        }
    }
}
