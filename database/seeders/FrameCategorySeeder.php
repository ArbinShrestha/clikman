<?php

namespace Database\Seeders;

use App\Models\FrameCategory;
use Illuminate\Database\Seeder;

class FrameCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = [
            'name'=>'Adventure'
        ];
        $b = [
            'name'=>'Climate Change'
        ];
        $c = [
            'name'=>'Development'
        ];
        $d = [
            'name'=>'Mountain Biking'
        ];
        $e = [
            'name'=>'Mountaineering'
        ];

        FrameCategory::create($a);
        FrameCategory::create($b);
        FrameCategory::create($c);
        FrameCategory::create($d);
        FrameCategory::create($e);
    }
}
