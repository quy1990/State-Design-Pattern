<?php

namespace App\Http\Services\Packages;

class DeliveredState implements PackageState
{

    public function next(Package $package)
    {
        $package->setState(new ReceivedState());
    }

    public function prev(Package $package)
    {
        $package->setState(new OrderedState());
    }

    public function printStatus()
    {
        return "This package is delivering to client.";
    }
}
