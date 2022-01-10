<?php

namespace App\Http\Services\Packages;

class Package
{
    /** @var PackageState $state */
    private $state;

    public function __construct()
    {
        $this->state = new OrderedState();
    }

    public function previousState(): void
    {
        $this->state->prev($this);
    }

    public function nextState(): void
    {
        $this->state->next($this);
    }

    public function printStatus(): string
    {
        return $this->state->printStatus();
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState(PackageState $state): void
    {
        $this->state = $state;
    }
}
