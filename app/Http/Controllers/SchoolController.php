<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
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

    public function indexmodel()
    {
        $models = School::where('label_id', 1)->latest()->paginate(5);
        return view('dashboard.school.sekolahmodel', ['models' => $models]);
    }

    public function indexemodel()
    {
        $emodels = School::where('label_id', 2)->latest()->paginate(5);
        return view('dashboard.school.sekolahemodel', ['emodels' => $emodels]);
    }

    public function indexjejaring()
    {
        $jejarings = School::where('label_id', 3)->latest()->paginate(5);
        return view('dashboard.school.sekolahjejaring', ['jejarings' => $jejarings]);
    }

    public function indexindonesia()
    {
        $indonesias = School::where('label_id', 4)->latest()->paginate(5);
        return view('dashboard.school.sekolahindonesia', ['indonesias' => $indonesias]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
