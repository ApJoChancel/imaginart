<?php

namespace App\Http\Controllers;

use App\Models\Oeuvre;
use App\Models\OeuvreCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class OeuvreController extends Controller
{
    private static array $headers = [
        'N°',
        'Image',
        'Titre',
        'Catégorie',
        'Prix',
        'Prix de vente',
        'Actions'
    ];

    public function index()
    {
        $items = DB::table('oeuvres')
            ->join('oeuvre_categories', 'oeuvres.oeuvre_category_id', '=', 'oeuvre_categories.id')
            ->select(
                'oeuvres.id', 
                'oeuvres.title', 
                'oeuvres.picture', 
                'oeuvres.artist_price', 
                'oeuvres.sale_price', 
                'oeuvre_categories.name as categorie'
            )
            ->paginate(15); 
        $i = 1;
        return view(
            'artist_dashboard.oeuvres.index', 
            [
                'items' => $items, 
                'i' => $i,
                'headers' => self::$headers
            ]
        );
    }
    
    public function create()
    {
        $categories = OeuvreCategory::all();
        return view('artist_dashboard.oeuvres.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255', 'unique:'.Oeuvre::class], 
            'description' => ['required', 'string'], 
            'categorie' => ['required', 'integer'], 
            'picture' => ['required', 'image'], 
            'artist_price' => ['required', 'integer'], 
            'sale_price' => ['required', 'integer'], 
        ]);

        $file = $request->file('picture');
        $path = $file->storeAs('public/oeuvres', Str::Slug($request->title) .'.' .$file->extension());
        $path = str_replace('public/', 'storage/', $path);
        DB::beginTransaction();
            Oeuvre::create([
                'title' => $request->title,
                'description' => $request->description,
                'picture' => $request->picture,
                'artist_price' => $request->artist_price,
                'sale_price' => $request->sale_price,
                'picture' => $path,
                'oeuvre_category_id' => $request->categorie,
                'user_id' => Auth::user()->id
            ]);
        DB::commit();

        return to_route('oeuvres.index');
    }

    public function edit(int $oeuvre)
    {
        $item = Oeuvre::findOrFail($oeuvre);
        $categories = OeuvreCategory::all();
        return view('artist_dashboard.oeuvres.edit', compact(['item', 'categories']));
    }

    public function update(Request $request, int $oeuvre)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255', Rule::unique(Oeuvre::class)->ignore($oeuvre)], 
            'description' => ['required', 'string'], 
            'categorie' => ['required', 'integer'], 
            'picture' => ['nullable', 'image'], 
            'artist_price' => ['required', 'integer'], 
            'sale_price' => ['required', 'integer'],
        ]);

        $file = $request->file('picture');
        if($file){
            $path = $file->storeAs('public/oeuvres', Str::Slug($request->title) .'.' .$file->extension());
            $path = str_replace('public/', 'storage/', $path);
        }

        $item = Oeuvre::findOrFail($oeuvre);
        $item->title = $request->title;
        $item->description = $request->description;
        $item->oeuvre_category_id = $request->categorie;
        $item->picture = $path ?? $item->picture;
        $item->artist_price = $request->artist_price;
        $item->sale_price = $request->sale_price;
        DB::beginTransaction();
            $item->save();
        DB::commit();

        return to_route('oeuvres.index');
    }

    public function destroy($oeuvre)
    {
        DB::beginTransaction();
            Oeuvre::findOrFail($oeuvre)->delete();
        DB::commit();
        return back();
    }

    public function show(int $oeuvre)
    {
        $item = Oeuvre::findOrFail($oeuvre);
        return view('artist_dashboard.oeuvres.show', compact('item'));
    }
}
