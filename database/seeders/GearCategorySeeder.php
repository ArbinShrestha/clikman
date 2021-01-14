<?php

namespace Database\Seeders;

use App\Models\GearCategory;
use Illuminate\Database\Seeder;

class GearCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = [
            'name'=>'Lenses',
        ];
        $b = [
            'name'=>'Camera',
        ];
        $c = [
            'name'=>'Lights',
        ];
        GearCategory::create($a);
        GearCategory::create($b);
        GearCategory::create($c);
    }
}
