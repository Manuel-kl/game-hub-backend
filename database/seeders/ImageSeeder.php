<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 200; $i++) {
            $image = new Image();
            $image->image = $i . ".png";

            try {
                $image->save();
            } catch (\Exception $e) {
                // Log the error message or do something else
                continue;
            }
        }
    }
}