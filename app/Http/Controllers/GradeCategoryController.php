<?php

namespace App\Http\Controllers;

use App\gradeCategory;
use Illuminate\Http\Request;

class GradeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return gradeCategory::all();
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
        //
        $data = new gradeCategory;
        $data->descrition = $request->descrition;
        $data->save();
        return $data;


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\gradeCategory  $gradeCategory
     * @return \Illuminate\Http\Response
     */
    public function show(gradeCategory $gradeCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\gradeCategory  $gradeCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(gradeCategory $gradeCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\gradeCategory  $gradeCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gradeCategory $gradeCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\gradeCategory  $gradeCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(gradeCategory $gradeCategory)
    {
        //
    }
}
