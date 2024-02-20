<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;
use App\Http\Resources\PlaceResource;

class PlaceController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        /*$places = Place::where('hall_id', $request->get('hallID'))->get();
        return new PlaceResource($places);*/
        return PlaceResource::collection(Place::where('hall_id', $request->get('hallID'))->get());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        Place::where('hall_id', $request->input('hallId'))
            ->where('seat_id', $request->input('idSeat'))
            ->update(['status' => $request->input('type')]);

    }

}
