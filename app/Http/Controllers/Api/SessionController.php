<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\HallResource;
use App\Models\Hall;
use App\Models\Session;
use Illuminate\Http\Request;
use App\Http\Requests\SessionRequest;
use App\Http\Resources\SessionResource;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return SessionResource::collection(Session::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SessionRequest $request)
    {
        $session = Session::create($request->validated());
        return new SessionResource($session);
    }

    /**
     * Display the specified resource.
     */
    public function show(SessionResource $session)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SessionRequest $request, SessionResource $session)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SessionResource $session)
    {
        //
    }
}
