<?php

namespace App\Http\Services\Packages;

interface PackageState
{
    public function next(Package $package);

    public function prev(Package $package);

    public function printStatus();
}
