<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Models\Part;

class AreaController extends Controller
{
    public function getParts(Area $area): Collection
    {
        // create collection of parts for an area
    }
}
