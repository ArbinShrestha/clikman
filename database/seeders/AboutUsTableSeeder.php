<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutUs;

class AboutUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = [
            'title'=>'About Us Title',
            'description' => 'Lorem Ipsum dolotore',
            'image' => 'http://lorempixel.com/400/200/sports/',
        ];

        AboutUs::create($a);
    }
}
