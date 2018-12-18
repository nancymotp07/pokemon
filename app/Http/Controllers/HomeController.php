<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        
        $client = new Client([
            'base_uri' => 'https://pokeapi.co/api/v2/',
            'timeout'  => 2.0,
        ]);
        $respuesta = json_decode($client->request('GET','pokemon')->getBody()->getContents());    
        return view('home',['pokemones'=>$respuesta->results]);
    }

     public function detalle($id)
    {
        $client = new Client([
            'base_uri' => 'https://pokeapi.co/api/v2/pokemon/',
            'timeout'  => 2.0,
        ]);
        $respuesta = json_decode($client->request('GET',$id)->getBody()->getContents());
        return view('detalle',['pokemon'=>$respuesta]);
    }
}
