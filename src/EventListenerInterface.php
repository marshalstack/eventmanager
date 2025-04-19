<?php

declare(strict_types=1);

namespace Marshal\EventManager;

interface EventListenerInterface
{
    public function getListeners(): array;
}
