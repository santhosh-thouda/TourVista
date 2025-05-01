<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Package;

class PackagesTableSeeder extends Seeder
{
    public function run()
    {
        // Mark first 3 packages as featured
        Package::whereIn('id', [1, 2, 3])->update(['is_featured' => true]);
    }
}
