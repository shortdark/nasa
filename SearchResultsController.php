<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SearchResultsController extends Controller
{
    /*
     * Test method left here for reference
     */
    public function index(Client $client)
    {

        $res = $client->request('GET', 'https://images-api.nasa.gov/search?q=apollo%2011&description=moon%20landing&media_type=image');
//        $result = $res->getStatusCode();
//        $result = $res->getHeader('content-type');
        $results = $res->getBody()->getContents();
        $results = json_decode($results, true);

/*        echo "<ul>";
        for($a=0; $a < 100; $a++){
            echo "<li><img src='{$results['collection']['items'][$a]['links'][0]['href']}'><br />{$results['collection']['items'][$a]['data'][0]['title']}</li>";
        }
        echo "</ul>";*/

//        return view('searchres', compact('result'));
        return view('searchres');
    }

    /*
     * Show the item (image or audio) page
     */
    public function show(Client $client, $media, $id)
    {
        $res = $client->request('GET', 'https://images-assets.nasa.gov/'.$media.'/'.$id.'/collection.json');
        $results = $res->getBody()->getContents();
        $results = json_decode($results, true);

        if('image'==$media){
            $key = array_search('orig.jpg', $results);
            $content = $results[$key];
            return view('image', compact('content'));
        }elseif('audio'==$media){
            $key = array_search('orig.mp3', $results);
            $content = $results[$key];
            return view('audio', compact('content'));
            dd($results);
        }

    }

}
