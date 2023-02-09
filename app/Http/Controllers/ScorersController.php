<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ScorersController extends Controller
{
    //BUNDESLIGA  code - BL1
    //PREMIER LEAGUE code - PL
    //SERIE A code - SA
    //LIGUE 1 code - FL1
    //CHAMPIONSHIP code - ELC
    //UEFA CHAMPIONS LEAGUE code - CL
    public function getPLScorers()
    {

        $client = new Client();
        $response = $client->request(
            'GET',
            'http://api.football-data.org/v4/competitions/PL/scorers',
            [
                'headers' => [
                    'X-Auth-Token' => env('X_AUTH_TOKEN'),
                ],
                'query' => [
                    'limit' => 253,
                ],
            ]
        );
        $scorers = json_decode($response->getBody());
        return [
            'scorers' => $scorers,
        ];
    }
    public function getBL1Scorers()
    {

        $client = new Client();

        $response = $client->request(
            'GET',
            'http://api.football-data.org/v4/competitions/BL1/scorers',
            [
                'headers' => [
                    'X-Auth-Token' => env('X_AUTH_TOKEN'),
                ],
                'query' => [
                    'limit' => 253,
                ],
            ]
        );
        $scorers = json_decode($response->getBody());
        return [
            'scorers' => $scorers,
        ];
    }
    public function getSAScorers()
    {

        $client = new Client();

        $response = $client->request(
            'GET',
            'http://api.football-data.org/v4/competitions/SA/scorers',
            [
                'headers' => [
                    'X-Auth-Token' => env('X_AUTH_TOKEN'),
                ],
                'query' => [
                    'limit' => 253,
                ],
            ]
        );
        $scorers = json_decode($response->getBody());
        return [
            'scorers' => $scorers,
        ];
    }
    public function getFL1Scorers()
    {

        $client = new Client();

        $response = $client->request(
            'GET',
            'http://api.football-data.org/v4/competitions/FL1/scorers',
            [
                'headers' => [
                    'X-Auth-Token' => env('X_AUTH_TOKEN'),
                ],
                'query' => [
                    'limit' => 253,
                ],
            ]
        );
        $scorers = json_decode($response->getBody());
        return [
            'scorers' => $scorers,
        ];
    }
    public function getCLScorers()
    {

        $client = new Client();

        $response = $client->request(
            'GET',
            'http://api.football-data.org/v4/competitions/CL/scorers',
            [
                'headers' => [
                    'X-Auth-Token' => env('X_AUTH_TOKEN'),
                ],
                'query' => [
                    'limit' => 253,
                ],
            ]
        );
        $scorers = json_decode($response->getBody());
        return [
            'scorers' => $scorers,
        ];
    }
    public function getELCscorers()
    {

        $client = new Client();

        $response = $client->request(
            'GET',
            'http://api.football-data.org/v4/competitions/ELC/scorers',
            [
                'headers' => [
                    'X-Auth-Token' => env('X_AUTH_TOKEN'),
                ],
                'query' => [
                    'limit' => 253,
                ],
            ]
        );
        $scorers = json_decode($response->getBody());
        return [
            'scorers' => $scorers,
        ];
    }
}