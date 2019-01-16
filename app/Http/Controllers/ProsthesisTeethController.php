<?php

namespace App\Http\Controllers;

use App\DentalDefectList;
use App\Patient;
use App\ProsthesisTeeth;
use App\TeethCoverType;
use App\TeethShade;
use App\Treatment;
use App\TreatmentList;
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
    public function edit($id)
    {

        $treatment = Treatment::find($id);
        $patien = Treatment::find($id)->patient;


        $treatementList = TreatmentList::all();
        $dentalDefectList = DentalDefectList::all();
        $teethShadeList = TeethShade::all();
        $teethCoverList = TeethCoverType::all();
        $teeth = ProsthesisTeeth::where('treatment_id','=',$id)->get();
        $tee =   DB::table('prosthesis_teeths')->select('tooth_number')->where('patient_id','=',$patien->id)->where('treatment_id',$id)->distinct()->get();

        $patient_in_treatment = Patient::find($patien->id);
        return view('prosthesis_operation_edit',compact('treatment','treatementList','dentalDefectList',
            'teethCoverList','teethShadeList','teeth','tee','patient_in_treatment','patien'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProsthesisTeeth  $prosthesisTeeth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $teeth = ProsthesisTeeth::find($id);
        $teeth->tooth_number = $request->tooth_number;
        $teeth->type_prosthesis = $request->type_prosthesis;
        $teeth->shade = $request->shade;
        $teeth->type_cover = $request->type_cover;
        $teeth->update();
        return back();
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
