<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePlayerCharacterRequest;
use App\Http\Requests\UpdatePlayerCharacterRequest;
use App\Models\PlayerCharacter;

class PlayerCharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlayerCharacterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlayerCharacterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlayerCharacter  $playerCharacter
     * @return \Illuminate\Http\Response
     */
    public function show(PlayerCharacter $playerCharacter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlayerCharacter  $playerCharacter
     * @return \Illuminate\Http\Response
     */
    public function edit(PlayerCharacter $playerCharacter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlayerCharacterRequest  $request
     * @param  \App\Models\PlayerCharacter  $playerCharacter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlayerCharacterRequest $request, PlayerCharacter $playerCharacter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlayerCharacter  $playerCharacter
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlayerCharacter $playerCharacter)
    {
        //
    }
}
