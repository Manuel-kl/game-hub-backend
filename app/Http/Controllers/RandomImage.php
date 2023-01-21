<?php

namespace App\Http\Controllers;

use App\Models\Image;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class RandomImage extends Controller
{
    public function randomImage()
    {

        $random_images = Image::inRandomOrder()->take(5);
        return [
            "images" => $random_images,
            "success" => true,
        ];
    }
}