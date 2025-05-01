<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\CustomerFeedback;

class HomeController extends Controller
{
    public function index()
    {
        try {
            $featuredPackages = Package::when(
                \Schema::hasColumn('packages', 'is_featured'),
                function ($query) {
                    return $query->where('is_featured', true);
                }
            )->take(6)->get();
            
            $testimonials = CustomerFeedback::with('user')->latest()->take(4)->get();
            
            return view('home', compact('featuredPackages', 'testimonials'));
        } catch (\Exception $e) {
            // Fallback if there's any error
            $featuredPackages = Package::take(6)->get();
            $testimonials = CustomerFeedback::with('user')->latest()->take(4)->get();
            
            return view('home', compact('featuredPackages', 'testimonials'));
        }
    }
}