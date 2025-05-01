<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('packages.index', compact('packages'));
    }

    public function show(Package $package)
    {
        $relatedPackages = Package::where('id', '!=', $package->id)
            ->where('destination', $package->destination)
            ->take(3)
            ->get();

        return view('packages.show', compact('package', 'relatedPackages'));
    }
}