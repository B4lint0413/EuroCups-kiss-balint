<?php

namespace App\Http\Controllers;

use App\Http\Requests\EurocupRequest;
use App\Http\Requests\StoreEurocupRequest;
use App\Http\Requests\UpdateEurocupRequest;
use App\Http\Resources\EurocupResource;
use App\Models\Eurocup;

class EurocupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return EurocupResource::collection(Eurocup::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Eurocup $eurocup)
    {
        return new EurocupResource($eurocup);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EurocupRequest $request, Eurocup $eurocup)
    {
        $eurocup->update($request->validated());
        return new EurocupResource($eurocup);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eurocup $eurocup)
    {
        $eurocup->delete();
        return response('',204);
    }
}
