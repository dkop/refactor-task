<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

abstract class Client implements ClientInterface
{
    protected array $settings;

    public function __construct(array $settings)
    {
        $this->setSettings($settings);
    }

    public function setSettings(array $settings): self
    {
        $this->validateSettings($settings);
        $this->settings = $settings;
        return $this;
    }

    /**
     * @param array $settings
     * @return void
     * @throws InvalidArgumentException
     */
    abstract protected function validateSettings(array $settings): void;

}
