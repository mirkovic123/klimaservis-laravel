<?php

namespace App\Http\Controllers;

use App\Http\Resources\FirmaResource;
use App\Models\Firma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FirmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FirmaResource::collection(Firma::all());
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'naziv' => 'required',
            'adresa' => 'required',
            'grad' => 'required',
            'sajt' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'Info message - ' => $validator->errors()
            ]);
        }

        Firma::create([
            'naziv' => $request->naziv,
            'adresa' => $request->adresa,
            'grad' => $request->grad,
            'sajt' => $request->sajt
        ]);

        return response()->json([
            'Info message - ' => 'Firma je sacuvana!'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Firma  $firma
     * @return \Illuminate\Http\Response
     */
    public function show(Firma $firma)
    {
        return new FirmaResource($firma);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Firma  $firma
     * @return \Illuminate\Http\Response
     */
    public function edit(Firma $firma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Firma  $firma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Firma $firma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Firma  $firma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Firma $firma)
    {
        $firma->delete();

        return response()->json([
            'Info message - ' => 'Firma je obrisana!'
        ]);
    }
}
