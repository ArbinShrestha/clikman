<?php

namespace Database\Seeders;

use App\Models\FilmCategory;
use Illuminate\Database\Seeder;

class FilmCategorySeeder extends Seeder
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

        FilmCategory::create($a);
        FilmCategory::create($b);
        FilmCategory::create($c);
        FilmCategory::create($d);
        FilmCategory::create($e);
    }
}
