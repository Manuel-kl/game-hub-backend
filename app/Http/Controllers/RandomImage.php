<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class RandomImage extends Controller
{
    public function randomImage()
    {

        $random_images = Image::inRandomOrder()->take(5)->get();
        return
            [
                'images' => $random_images,
                'success' => true,
            ];
    }
}