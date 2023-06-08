<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Part;
use Illuminate\Support\Arr;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Collection;

class PartController extends Controller
{
    /**

     * Display a listing of the resource.

     */

    public function index()
    {
        return Inertia::render('Part/PartDropdown', [
           'areaParts' => $this->generateAreaPartsArray()
        ]);
    }

    private function generateAreaPartsArray(): Object
    {
        $areaParts = collect();

        // retrieve a collection of areas
        $areas = DB::table('areas')
            ->select('id', 'name')
            ->where('active', true)
            ->orderBy('sort_order')
            ->get();

        foreach ($areas as $area) {
            // Retrieve parts collection
            $parts = $this->getParts($area->id);

            $areaParts->put($area->name, $parts);

        }
        //dd($areaParts->toJson());
        return $areaParts;

    }

    private function getParts(Int $areaId): Collection
    {
        // return Part::where('active', true)->where('area_id', $area)->get()->toArray();
        $parts = DB::table('parts')
            ->select('name')
            ->where('active', true)
            ->where('area_id', '=', $areaId)
            ->orderBy('sort_order_within_area')
            ->get();
        return $parts;

    }

}
