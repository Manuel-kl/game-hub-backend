<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Requests\IDRequest;

class GamesController extends Controller
{

    public function getPLGames()
    {
        $client = new Client();
        $response = $client->request(
            'GET',
            'http://api.football-data.org/v4/competitions/PL/matches',
            [
                'headers' => [
                    'X-Auth-Token' => env('X_AUTH_TOKEN'),
                ],
            ]
        );
        $games = json_decode($response->getBody());
        return [
            'games' => $games,
        ];
    }
    public function getBL1Games()
    {
        $client = new Client();
        $response = $client->request(
            'GET',
            'http://api.football-data.org/v4/competitions/BL1/matches',
            [
                'headers' => [
                    'X-Auth-Token' => env('X_AUTH_TOKEN'),
                ],
            ]
        );
        $games = json_decode($response->getBody());
        return [
            'games' => $games,
        ];
    }
    public function getSAGames()
    {
        $client = new Client();
        $response = $client->request(
            'GET',
            'http://api.football-data.org/v4/competitions/SA/matches',
            [
                'headers' => [
                    'X-Auth-Token' => env('X_AUTH_TOKEN'),
                ],
            ]
        );
        $games = json_decode($response->getBody());
        return [
            'games' => $games,
        ];
    }
    public function getFL1Games()
    {
        $client = new Client();
        $response = $client->request(
            'GET',
            'http://api.football-data.org/v4/competitions/FL1/matches',
            [
                'headers' => [
                    'X-Auth-Token' => env('X_AUTH_TOKEN'),
                ],
            ]
        );
        $games = json_decode($response->getBody());
        return [
            'games' => $games,
        ];
    }
    public function getELCGames()
    {
        $client = new Client();
        $response = $client->request(
            'GET',
            'http://api.football-data.org/v4/competitions/ELC/matches',
            [
                'headers' => [
                    'X-Auth-Token' => env('X_AUTH_TOKEN'),
                ],
            ]
        );
        $games = json_decode($response->getBody());
        return [
            'games' => $games,
        ];
    }
    public function getCLGames()
    {
        $client = new Client();
        $response = $client->request(
            'GET',
            'http://api.football-data.org/v4/competitions/CL/matches',
            [
                'headers' => [
                    'X-Auth-Token' => env('X_AUTH_TOKEN'),
                ],
            ]
        );
        $games = json_decode($response->getBody());
        return [
            'games' => $games,
        ];
    }
}