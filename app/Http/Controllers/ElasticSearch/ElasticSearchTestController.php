<?php

namespace App\Http\Controllers\ElasticSearch;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Carbon\Carbon;

class ElasticSearchTestController extends Controller
{
    public function index()
    {
//        http://192.168.0.104:9200/my_index/_search // see ifconfig enp1s0: x.x.x.x

        $client = new Client();
        $response = $client->request('GET', 'http://192.168.0.104:9200/my_index/_search');
        $data = json_decode($response->getBody(), true);
        dd($data['hits']['hits'][2]);
    }

    public function copy()
    {
//        $client = new Client();
//        $userIds = Post::pluck('id')->all();
//        foreach ($userIds as $userId) {
//            $post = Post::find($userId);
//            $response = $client->post('http://192.168.0.104:9200/my_index/_doc/' . $userId, [
//                'json' => [
//                    'title' => $post->title,
//                    'description' => $post->description,
//                    'author' => $post->author,
//                    'created_at' => $post->created_at->format('Y-m-d\TH:i:s'),
//                    'updated_at' => $post->updated_at->format('Y-m-d\TH:i:s'),
//                ],
//            ]);
//        }
//        echo 'Done';
phpinfo();
//        $client = new Client();
//        for ($i = 14038; $i < 50000; $i++) {
//            $post = Post::find($i);
//            $response = $client->post('http://192.168.0.104:9200/my_index/_doc/' . $i, [
//                'json' => [
//                    'title' => $post->title,
//                    'description' => $post->description,
//                    'author' => $post->author,
//                    'created_at' => $post->created_at->format('Y-m-d\TH:i:s'),
//                    'updated_at' => $post->updated_at->format('Y-m-d\TH:i:s'),
//                ],
//            ]);
//        }

    }
}
