<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Artwork;
use App\Repositories\CartRepository;
use Illuminate\Http\Request;

class CartController extends Controller
{
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
        $sessionId = auth()->user()->id ?? null;
        $items = request()->session($sessionId)->get('items');
        $item = $items->get($id);
        return response()->json([
            'item' => $item
        ]);
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
