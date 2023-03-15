<?php

namespace App\Repositories;

use App\Models\Artwork;
use PhpParser\Node\Expr\Cast\Object_;

class CartRepository
{
    public function add(Artwork $item)
    {
        $items = request()->session(auth()->user()->id)->get('items') ?? collect();
        //L'item n'est pas présent dans le panier
        if(!$items->has($item->id)){
            $itemToAdd = (Object) [
                'id' => $item->id,
                'picture' => $item->picture,
                'title' => $item->title,
                'price' => $item->sale_price,
                'quantity' => 1,
                'amount' => $item->sale_price
            ];
        } else{
            $itemToAdd = $items->get($item->id);
            $itemToAdd->quantity += 1;
            $itemToAdd->amount = ($itemToAdd->price * $itemToAdd->quantity);
        }
        
        $items->put($item->id, $itemToAdd);
        request()->session(auth()->user()->id)->put('items', $items);
        return $this->count();
    }

    public function content()
    {
        return request()->session(auth()->user()->id)->get('items');
    }

    public function count()
    {
        return $this->content()->sum('quantity');
    }

    public function increase(Artwork $item)
    {
        $items = request()->session(auth()->user()->id)->get('items');
        $itemToInc = $items->get($item->id);
        $itemToInc->quantity += 1;
        $itemToInc->amount = ($itemToInc->price * $itemToInc->quantity);
        
        $items->put($item->id, $itemToInc);
        request()->session(auth()->user()->id)->put('items', $items);
        return [$this->count(), $items->sum('amount')];
    }

    public function decrease(Artwork $item)
    {
        $items = request()->session(auth()->user()->id)->get('items');
        $itemToInc = $items->get($item->id);
        $itemToInc->quantity -= 1;
        $itemToInc->amount = ($itemToInc->price * $itemToInc->quantity);
        
        $items->put($item->id, $itemToInc);
        request()->session(auth()->user()->id)->put('items', $items);
        return [$this->count(), $items->sum('amount')];
    }

    public function delete(Artwork $item)
    {
        $items = request()->session(auth()->user()->id)->get('items');
        $items->forget($item->id);

        request()->session(auth()->user()->id)->put('items', $items);
        return [$this->count(), $items->sum('amount')];
    }
}