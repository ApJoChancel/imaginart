<?php

namespace App\Repositories;

use App\Models\Artwork;
use PhpParser\Node\Expr\Cast\Object_;

class CartRepository
{
    public function add(Artwork $item)
    {   
        $sessionId = auth()->user()->id ?? null;
        $items = request()->session($sessionId)->get('items') ?? collect();
        //L'item n'est pas présent dans le panier
        if(!$items->has($item->id)){
            $itemToAdd = (Object) [
                'id' => $item->id,
                'picture' => $item->picture,
                'title' => $item->title,
                'price' => $item->sale_price,
                'quantity' => 1,
                'amount' => $item->sale_price,
                'shipped_from' => $item->user->country,
                'delivery_charges' => 500
            ];
            $items->put($item->id, $itemToAdd);
            request()->session($sessionId)->put('items', $items);
        }
        
        return $this->count();
    }

    public function content()
    {
        $sessionId = auth()->user()->id ?? null;
        return request()->session($sessionId)->get('items');
    }

    public function count()
    {
        return $this->content()->sum('quantity');
    }

    public function delete(Artwork $item)
    {
        $sessionId = auth()->user()->id ?? null;
        $items = request()->session($sessionId)->get('items');
        $items->forget($item->id);

        request()->session($sessionId)->put('items', $items);
        return [$this->count(), $items->sum('amount')];
    }
}