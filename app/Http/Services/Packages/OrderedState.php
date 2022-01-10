<?php

namespace App\Http\Services\Packages;

class OrderedState implements PackageState
{
    public function next(Package $package)
    {
        $package->setState(new DeliveredState());
    }

    public function prev(Package $package)
    {
        return "can not prev in this state: OrderedState";
    }

    public function printStatus()
    {
        return "This package is Ordered by a client.";
    }
}
