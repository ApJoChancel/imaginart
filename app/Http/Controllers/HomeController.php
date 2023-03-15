<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private static array $headers = [
        'Image',
        'Titre',
        'Prix de vente',
        'Action'
    ];

    public function index(){
        $items = Artwork::inRandomOrder()->paginate(15);
        return view('welcome', [
            'headers' => self::$headers,
            'items' => $items
        ]);
    }
}
