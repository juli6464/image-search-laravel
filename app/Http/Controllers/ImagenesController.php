<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ImagenesController extends Controller
{
    public function show($terminoBusqueda) {
        $apiKey = 'C0gEPOh67lU2WsSST8qwRWKiCKGqycveuB72nr2lrml50fnw6Rtg1zkx';
        // $apiKey = 'a274795b1dad3df8d54018c4c1b41763';
        $url = 'https://api.pexels.com/v1/search?query=' . urlencode($terminoBusqueda);
        // $url = `https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=$apiKey&per_page=10&format=json&nojsoncallback=1&text=$terminoBusqueda`;



        $headers = ['Authorization' => $apiKey];
        $respuesta = Http::withHeaders($headers)->get($url);
        return $respuesta->json();
    }
}
