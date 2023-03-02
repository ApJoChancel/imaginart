<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use App\Models\ArtworkCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ArtworkController extends Controller
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
        $items = DB::table('artworks')
            ->join('artwork_categories', 'artworks.artwork_category_id', '=', 'artwork_categories.id')
            ->select(
                'artworks.id', 
                'artworks.title', 
                'artworks.picture', 
                'artworks.artist_price', 
                'artworks.sale_price', 
                'artwork_categories.name as categorie'
            )
            ->paginate(15); 
        $i = 1;
        return view(
            'artist_dashboard.artworks.index', 
            [
                'items' => $items, 
                'i' => $i,
                'headers' => self::$headers
            ]
        );
    }
    
    public function create()
    {
        $categories = ArtworkCategory::all();
        return view('artist_dashboard.artworks.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255', 'unique:'.Artwork::class], 
            'description' => ['required', 'string'], 
            'categorie' => ['required', 'integer'], 
            'picture' => ['required', 'image'], 
            'artist_price' => ['required', 'integer'], 
            'sale_price' => ['required', 'integer'], 
        ]);

        $file = $request->file('picture');
        $path = $file->storeAs('public/artworks', Str::Slug($request->title) .'.' .$file->extension());
        $path = str_replace('public/', 'storage/', $path);
        DB::beginTransaction();
            Artwork::create([
                'title' => $request->title,
                'description' => $request->description,
                'picture' => $request->picture,
                'artist_price' => $request->artist_price,
                'sale_price' => $request->sale_price,
                'picture' => $path,
                'artwork_category_id' => $request->categorie,
                'user_id' => Auth::user()->id
            ]);
        DB::commit();

        return to_route('oeuvres.index');
    }

    public function edit(int $artwork)
    {
        $item = Artwork::findOrFail($artwork);
        $categories = ArtworkCategory::all();
        return view('artist_dashboard.artworks.edit', compact(['item', 'categories']));
    }

    public function update(Request $request, int $artwork)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255', Rule::unique(Artwork::class)->ignore($artwork)], 
            'description' => ['required', 'string'], 
            'categorie' => ['required', 'integer'], 
            'picture' => ['nullable', 'image'], 
            'artist_price' => ['required', 'integer'], 
            'sale_price' => ['required', 'integer'],
        ]);

        $file = $request->file('picture');
        if($file){
            $path = $file->storeAs('public/artworks', Str::Slug($request->title) .'.' .$file->extension());
            $path = str_replace('public/', 'storage/', $path);
        }

        $item = Artwork::findOrFail($artwork);
        $item->title = $request->title;
        $item->description = $request->description;
        $item->artwork_category_id = $request->categorie;
        $item->picture = $path ?? $item->picture;
        $item->artist_price = $request->artist_price;
        $item->sale_price = $request->sale_price;
        DB::beginTransaction();
            $item->save();
        DB::commit();

        return to_route('oeuvres.index');
    }

    public function destroy($artwork)
    {
        DB::beginTransaction();
            Artwork::findOrFail($artwork)->delete();
        DB::commit();
        return back();
    }

    public function show(int $artwork)
    {
        $item = Artwork::findOrFail($artwork);
        return view('artist_dashboard.artworks.show', compact('item'));
    }
}
