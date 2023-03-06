<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use App\Models\Exposure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ExposureController extends Controller
{
    private static array $headers = [
        'N°',
        'Titre',
        'Début',
        'Fin',
        'Status',
        'Actions'
    ];

    private function majExposures(): void{
        //On MAJ les status des expositions
        DB::beginTransaction();
            //L'exposition a commencée
            DB::table('exposures')
                ->where('start', '<=', date('Y-m-d'))
                ->update(['status' => 1]);
            //L'exposition est terminée
            DB::table('exposures')
            ->where('end', '<', date('Y-m-d'))
            ->update(['status' => 2]);
        DB::commit();
    }

    public function index(): View
    {
        //On MAJ les status des expositions
        self::majExposures();
        //On affiche
        $items = Exposure::paginate(15);
        $i = 1;
        return view(
            'artist_dashboard.exposures.index', 
            [
                'items' => $items, 
                'i' => $i,
                'headers' => self::$headers
            ]
        );
    }

    public function createStepOne(): View
    {
        return view('artist_dashboard.exposures.create-step-one');
    }

    public function storeStepOne(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'target' => ['required', 'string', 'max:255'],
            'start' => ['required', 'date', 'after:' . date('Y-m-d')],
            'end' => ['required', 'date', 'after:' . $request->start],
        ]);

        $exposure = new Exposure();
        $exposure->title = $request->title;
        $exposure->description = $request->description;
        $exposure->target = $request->target;
        $exposure->start = $request->start;
        $exposure->end = $request->end;

        $request->session()->put('exposure', $exposure);
        return to_route('exposureStepTwo');
    }

    public function createStepTwo(): View
    {
        $artworks = Artwork::where('user_id', Auth::user()->id)->get();
        return view('artist_dashboard.exposures.create-step-two', compact('artworks'));
    }

    public function storeStepTwo(Request $request): RedirectResponse
    {
        $request->validate([
            'artworks' => ['required']
        ]);

        $exposure = $request->session()->get('exposure');
        DB::beginTransaction();
            $item = Exposure::create([
                'title' => $exposure->title,
                'description' => $exposure->description,
                'target' => $exposure->target,
                'start' => $exposure->start,
                'end' => $exposure->end,
                'status' => 0
            ]);
            $item->artworks()->attach($request->artworks);
        DB::commit();

        $request->session()->forget('exposure');
        return to_route('expositions.index');
    }


    public function show(int $exposure): View
    {
        $item = Exposure::findOrFail($exposure);
        return view('artist_dashboard.exposures.show', compact('item'));
    }


    public function edit(int $exposure): View|RedirectResponse 
    {
        $item = Exposure::findOrFail($exposure);
        if($item->status > 0)
            return back();
        return view('artist_dashboard.exposures.edit', compact(['item']));
    }

    public function update(Request $request, int $exposure): RedirectResponse
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'target' => ['required', 'string', 'max:255'],
            'start' => ['required', 'date', 'after:' . date('Y-m-d')],
            'end' => ['required', 'date', 'after:' . $request->start],
        ]);

        $item = Exposure::findOrFail($exposure);
        $item->title = $request->title;
        $item->description = $request->description;
        $item->target = $request->target;
        $item->start = $request->start;
        $item->end = $request->end;
        DB::beginTransaction();
            $item->save();
        DB::commit();

        return to_route('expositions.index');
    }

    public function destroy(int $exposure): RedirectResponse
    {
        $item = Exposure::findOrFail($exposure);
        if($item->status > 0)
            return back();
        DB::beginTransaction();
            $item->delete();
        DB::commit();
        return back();
    }
}
