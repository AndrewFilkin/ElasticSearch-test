<?php

namespace App\Http\Controllers\ElasticSearch;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class CopyDataWithDatabaseMySqlController extends Controller
{
    public function index()
    {
//        http://192.168.0.104:9200/my_index/_search // see ipconfig enp1s0: x.x.x.x

        $client = new Client();

        $response = $client->request('GET', 'http://192.168.0.104:9200/my_index/_search', [
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);
        $data = json_decode($response->getBody(), true);
        dd($data['hits']['hits'][0]);

    }
}
