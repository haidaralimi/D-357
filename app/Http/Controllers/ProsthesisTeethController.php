<?php

namespace App\Http\Controllers;

use App\ProsthesisTeeth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Psr7\Response;

class ProsthesisTeethController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teeth = new ProsthesisTeeth();
        $nextId = DB::table('treatments')->max('id') + 1;
        $teeth->tooth_number = $request->tooth_number;

        $teeth->treatment_id = $nextId;
        $teeth->patient_id = $request->patient_id;
        //==================================================
        $teeth->type_prosthesis = $request->type_prosthesis;
        $teeth->shade = $request->shade;
        $teeth->type_cover = $request->type_cover;
        $teeth->save();
        return json_encode($teeth);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProsthesisTeeth  $prosthesisTeeth
     * @return \Illuminate\Http\Response
     */
    public function show(ProsthesisTeeth $prosthesisTeeth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProsthesisTeeth  $prosthesisTeeth
     * @return \Illuminate\Http\Response
     */
    public function edit(ProsthesisTeeth $prosthesisTeeth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProsthesisTeeth  $prosthesisTeeth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProsthesisTeeth $prosthesisTeeth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProsthesisTeeth  $prosthesisTeeth
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teeth = ProsthesisTeeth::find($id);
        $teeth->delete();
        return redirect()->back();
    }
}
