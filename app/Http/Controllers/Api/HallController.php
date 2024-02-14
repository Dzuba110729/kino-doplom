<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Hall;
use App\Models\Place;
use Illuminate\Http\Request;
use App\Http\Requests\HallRequest;
use App\Http\Resources\HallResource;

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return HallResource::collection(Hall::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HallRequest $request)
    {
        $hall = Hall::create($request->validated());
        $this->createBasePlaces($hall->id, 3, 3);
        return new HallResource($hall);
    }

    /**
     * Display the specified resource.
     */
    public function show(Hall $hall)
    {
        return new HallResource($hall);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hall $hall)
    {
        $hall->update($request->all());
        $this->createOrUpdateBasePlaces($hall->id, $request->post('row'), $request->post('col'));
        return new HallResource($hall);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hall $hall)
    {
        $hall->delete();

        return response()->noContent();
    }

    private function createOrUpdateBasePlaces(int $hallId, int $row = 2, int $col = 2)
    {
        $json = [];
        for ($i = 1; $i <= $row * $col; $i++) {
            $json[] = [
                "seat_number" => $i,
                "seat_status" => "standart",
                "order_id" => null
            ];
        }

        Place::updateOrCreate(
            ['hall_id' => $hallId],
            ['seats' => json_encode($json)]
        );

    }


}
