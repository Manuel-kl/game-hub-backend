<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class TableController extends Controller
{

    public function getPLTable()
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
    public function getCLTable()
    {
        $client = new Client();
        $response = $client->request(
            'GET',
            'http://api.football-data.org/v4/competitions/CL/standings',
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
    public function getBL1Table()
    {
        $client = new Client();
        $response = $client->request(
            'GET',
            'http://api.football-data.org/v4/competitions/BL1/standings',
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
    public function getSATable()
    {
        $client = new Client();
        $response = $client->request(
            'GET',
            'http://api.football-data.org/v4/competitions/SA/standings',
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
    public function getELCTable()
    {
        $client = new Client();
        $response = $client->request(
            'GET',
            'http://api.football-data.org/v4/competitions/ELC/standings',
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
    public function getFL1Table()
    {
        $client = new Client();
        $response = $client->request(
            'GET',
            'http://api.football-data.org/v4/competitions/FL1/standings',
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
}