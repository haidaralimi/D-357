<?php

namespace App\Http\Controllers;

use App\ExpenseCatagory;
use Illuminate\Http\Request;

class ExpenseCatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = ExpenseCatagory::all();
        return view ('expense_category',compact('category'));
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
        $category = new ExpenseCatagory();
        $category->category = $request->category;
        $category->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExpenseCatagory  $expenseCatagory
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseCatagory $expenseCatagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExpenseCatagory  $expenseCatagory
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpenseCatagory $expenseCatagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExpenseCatagory  $expenseCatagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpenseCatagory $expenseCatagory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExpenseCatagory  $expenseCatagory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = ExpenseCatagory::find($id);
        $category->delete();
        return redirect()->back();
    }
}