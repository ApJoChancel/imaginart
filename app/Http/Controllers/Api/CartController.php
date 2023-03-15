<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artwork;
use App\Repositories\CartRepository;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartContent = (new CartRepository())->content();
        return response()->json([
            'cartContent' => $cartContent
        ]);
    }


    public function store(Request $request)
    {
        $item = Artwork::findOrFail($request->itemId);
        $count = (new CartRepository())->add($item);
        return response()->json([
            'count' => $count
        ]);
    }

    public function show(string $id)
    {
        $items = request()->session(auth()->user()->id)->get('items');
        $item = $items->get($id);
        return response()->json([
            'item' => $item
        ]);
    }

    public function increase(int $id)
    {
        $item = Artwork::findOrFail($id);
        [$count, $amount] = (new CartRepository())->increase($item);
        return response()->json([
            'count' => $count,
            'amount' => $amount
        ]);
    }

    public function decrease(int $id)
    {
        $item = Artwork::findOrFail($id);
        [$count, $amount] = (new CartRepository())->decrease($item);
        return response()->json([
            'count' => $count,
            'amount' => $amount
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        $item = Artwork::findOrFail($id);
        [$count, $amount] = (new CartRepository())->delete($item);
        return response()->json([
            'count' => $count,
            'amount' => $amount
        ]);
    }
}
