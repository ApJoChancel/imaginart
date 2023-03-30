<?php

namespace App\Http\Controllers;

use App\Models\ArtworkCategory;
use App\Models\CategoryStyle;
use App\Models\CategoryTechnic;
use App\Models\CategoryTheme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ArtworkCategoryController extends Controller
{
    private static array $headers = [
        'Libellé',
        'Actions'
    ];

    public function index()
    {
        $headers = self::$headers;
        $items = ArtworkCategory::all();
        return view('admin_dashboard.category.index', compact(['items', 'headers']));
    }

    public function show(int $id)
    {
        $headers = self::$headers;
        $categorie = ArtworkCategory::findOrFail($id);
        $parent = $id;
        $styles = $categorie->styles;
        $technics = $categorie->technics;
        $themes = $categorie->themes;
        return view('admin_dashboard.category.show', 
            compact(['headers', 'styles', 'technics', 'themes', 'parent'])
        );
    }

    public function editCategories(int $parent, string $module, int $category)
    {
        $item = null;
        switch ($module) {
            case 'style':
                $item = CategoryStyle::findOrFail($category);
                break;

            case 'technic':
                $item = CategoryTechnic::findOrFail($category);
                break;

            case 'theme':
                $item = CategoryTheme::findOrFail($category);
                break;
        }
        return view('admin_dashboard.category.edit_categories', compact(['item', 'module', 'parent']));
    }

    public function updateCategories(Request $request, int $parent, string $module, int $category)
    {
        $item = null;
        switch ($module) {
            case 'style':
                $request->validate([
                    'name' => ['required', 'string', 'max:255'],
                ]);
                $item = CategoryStyle::findOrFail($category);
                break;

            case 'technic':
                $request->validate([
                    'name' => ['required', 'string', 'max:255'],
                ]);
                $item = CategoryTechnic::findOrFail($category);
                break;

            case 'theme':
                $request->validate([
                    'name' => ['required', 'string', 'max:255'],
                ]);
                $item = CategoryTheme::findOrFail($category);
                break;
        }

        $item->name = $request->name;
        DB::beginTransaction();
            $item->save();
        DB::commit();

        return to_route('category.show', ['category' => $parent]);
    }

    public function destroyCategories(Request $request, int $parent, string $module, int $category)
    {
        $item = null;
        switch ($module) {
            case 'style':
                $item = CategoryStyle::findOrFail($category);
                break;

            case 'technic':
                $item = CategoryTechnic::findOrFail($category);
                break;

            case 'theme':
                $item = CategoryTheme::findOrFail($category);
                break;
        }

        DB::beginTransaction();
            $item->delete();
        DB::commit();

        return to_route('category.show', ['category' => $parent]);
    }
}