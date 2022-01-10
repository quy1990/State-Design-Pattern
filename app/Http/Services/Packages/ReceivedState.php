<?php

namespace App\Http\Services\Packages;

class ReceivedState implements PackageState
{

    public function next(Package $package)
    {
        return "This package is already received by a client.";
    }

    public function prev(Package $package)
    {
        $package->setState(new DeliveredState());
    }

    public function printStatus()
    {
        return "This package is already received by a client.";
    }
}
