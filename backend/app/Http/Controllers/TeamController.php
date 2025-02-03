<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Http\Resources\TeamResource;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TeamResource::collection(Team::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $Team)
    {
        return new TeamResource($Team);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeamRequest $request, Team $Team)
    {
        $Team->update($request->validated());
        return new TeamResource($Team);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $Team)
    {
        $Team->delete();
        return response('',204);
    }
}
