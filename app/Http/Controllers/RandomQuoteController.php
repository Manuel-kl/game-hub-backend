<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;

class RandomQuoteController extends Controller
{
    public function getQuote()
    {
        $quote = Quote::inRandomOrder()->first();
        return [
            'quote' => $quote,
        ];
    }
}