<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function getScorers()
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
    public function getResults()
    {
        $client = new Client();
        $response = $client->request(
            'GET',
            'http://api.football-data.org/v4/competitions/PL/scorers',
            [
                'headers' => [
                    'X-Auth-Token' => env('X_AUTH_TOKEN'),
                ],
            ],

        );
        $results = json_decode($response->getBody());
        return [
            'results' => $results,
        ];
    }
    public function getTable()
    {
        $client = new Client();
        $response = $client->request(
            'GET',
            'http://api.football-data.org/v4/competitions/PL/standings',
            [
                'headers' => [
                    'X-Auth-Token' => env('X_AUTH_TOKEN'),
                ],
            ]
        );
        $table = json_decode($response->getBody());
        return [
            'table' => $table,
        ];
    }
    public function getGames()
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
}