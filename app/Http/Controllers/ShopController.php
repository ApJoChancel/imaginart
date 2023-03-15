<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use App\Repositories\CartRepository;

class ShopController extends Controller
{
    private static array $headers = [
        'Image',
        'Titre',
        'Prix de vente',
        'Action'
    ];

    public function index(){
        $items = Artwork::inRandomOrder()->paginate(15);
        return view('shop.index', [
            'headers' => self::$headers,
            'items' => $items
        ]);
    }

    public function createCart()
    {
        $items = (new CartRepository())->content();
        return view('shop.create', compact('items'));
    }
}
