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
        return view('customer_dashboard.shop.index', [
            'headers' => self::$headers,
            'items' => $items
        ]);
    }

    public function show(int $id)
    {
        $item = Artwork::findOrFail($id);
        return view('customer_dashboard.shop.show', [
            'headers' => self::$headers,
            'item' => $item
        ]);
    }

    public function createCart()
    {
        $items = (new CartRepository())->content();
        return view('customer_dashboard.shop.cart', compact('items'));
    }
}
