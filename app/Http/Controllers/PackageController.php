<?php

namespace App\Http\Controllers;

use App\Http\Services\Packages\Package;

class PackageController
{
    public function index()
    {
        $package = new Package();
        $orderedStatus = $package->getState()->printStatus();

        // Update status of Package
        $package->getState()->next($package);
        $deliveredStatus = $package->getState()->printStatus();

        // Update status of Package
        $package->getState()->next($package);
        $receivedStatus = $package->getState()->printStatus();

        // print all statuses of Package
        return [$orderedStatus, $deliveredStatus, $receivedStatus];
    }
}
