<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Village;
use Illuminate\Http\Request;

class AxiosController extends Controller
{
    public function district(Request $request)
    {
        $districts = District::where('city_id', $request->get('id'))->pluck('name', 'id');
        return response()->json($districts);
    }

    public function village(Request $request)
    {
        $villages = Village::where('district_id', $request->get('id'))->pluck('name', 'id');
        return response()->json($villages);
    }
}
