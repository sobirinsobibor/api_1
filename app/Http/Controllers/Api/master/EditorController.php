<?php

namespace App\Http\Controllers\Api\master;

use App\Http\Controllers\Controller;

use App\Models\Editor;
use App\Http\Requests\StoreEditorRequest;
use App\Http\Requests\UpdateEditorRequest;

class EditorController extends Controller
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
     * @param  \App\Http\Requests\StoreEditorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEditorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Editor  $editor
     * @return \Illuminate\Http\Response
     */
    public function show(Editor $editor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Editor  $editor
     * @return \Illuminate\Http\Response
     */
    public function edit(Editor $editor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEditorRequest  $request
     * @param  \App\Models\Editor  $editor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEditorRequest $request, Editor $editor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Editor  $editor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Editor $editor)
    {
        //
    }
}
