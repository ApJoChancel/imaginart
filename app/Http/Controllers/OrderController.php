<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function createStepOne(): View
    {   
        if(!isset(auth()->user()->id))
            return view('order.step-one');
        else
            return view('order.step-two');
    }

    public function storeStepOne(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->country = $request->country;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->password = $request->password;
        $user->register = $request->register;

        $request->session()->put('user', $user);
        return to_route('orderStepTwo');
    }

    public function createStepTwo(): View
    {
        return view('order.step-two');
    }

    public function storeStepTwo(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'comment' => ['nullable', 'string'],
        ]);

        $user = $request->session()->get('user');
        $user->order_name = $request->name;
        $user->order_country = $request->country;
        $user->order_address = $request->address;
        $user->order_comment = $request->comment;

        $request->session()->put('user', $user);
        return to_route('orderStepThree');
    }

    public function createStepThree(): View
    {
        $headers = [
            'Image',
            'Titre',
            'Quantité',
            'Prix',
            'Expédié de',
            'Frais de livraison'
        ];
        $items = request()->session()->get('items'); 
        return view('order.step-three', compact(['items', 'headers']));
    }

    public function createStepFour(): View
    {
        return view('order.step-four');
    }

    public function storeStepFour(Request $request): RedirectResponse
    {
        //Effectuer le paiement
        ///Enregistrer l'utilisateur s'il l'a demandé
        //Vider les variables de sessions
        //Enregister le paiement (Order et Artwork_order)
        return to_route('shop.index');
    }
}
