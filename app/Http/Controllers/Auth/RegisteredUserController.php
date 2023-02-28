<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ArtistCategory;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{

    public function createStepOne(): View
    {
        return view('register.step-one');
    }

    public function storeStepOne(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->country = $request->country;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->password = $request->password;

        $request->session()->put('user', $user);
        return to_route('registerStepTwo');
    }

    public function createStepTwo(): View
    {
        $options = ['Artiste', 'Collectionneur', 'Vendeur'];
        return view('register.step-two', compact('options'));
    }

    public function storeStepTwo(Request $request): RedirectResponse
    {
        $request->validate([
            'type' => ['required', 'string', 'max:255']
        ]);

        $user = $request->session()->get('user');
        $user->type = $request->type;

        if(strtolower($user->type) !== 'artiste'){
            DB::beginTransaction();
                User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'country' => $user->country,
                    'address' => $user->address,
                    'phone' => $user->phone,
                    'type' => $user->type,
                    'password' => Hash::make($user->password),
                ]);
            DB::commit();
            $request->session()->forget('user');
            
            event(new Registered($user));
            Auth::login($user);
            return redirect(RouteServiceProvider::HOME);
        }

        $request->session()->put('user', $user);
        return to_route('registerStepThree');
    }

    public function createStepThree(): View
    {
        $options = ArtistCategory::all();
        return view('register.step-three', compact('options'));
    }

    public function storeStepThree(Request $request): RedirectResponse
    {   
        $request->validate([
            'presentation' => ['required', 'string', 'min:5', 'max:255'],
            'artistic' => ['required', 'string', 'min:5', 'max:255'],
            'picture' => ['required', 'image'],
            'options' => ['required']
        ]);

        $user = $request->session()->get('user');
        $user->presentation = $request->presentation;
        $user->artistic_process = $request->artistic;
        $file = $request->file('picture');
        
        DB::beginTransaction();
            $item = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'country' => $user->country,
                'address' => $user->address,
                'phone' => $user->phone,
                'type' => $user->type,
                'presentation' => $user->presentation,
                'artistic_process' => $user->artistic_process,
                'picture' => $file->storeAs('public/pictures', strtolower(str_replace(' ', '_', $user->name)) .'.' .$file->extension()),
                'password' => Hash::make($user->password),
            ]);
            $item->artistCategories()->attach($request->options);
        DB::commit();
        $request->session()->forget('user');
        
        event(new Registered($user));
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
