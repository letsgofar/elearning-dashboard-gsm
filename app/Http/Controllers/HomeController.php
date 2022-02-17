<?php

namespace App\Http\Controllers;

use App\School;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function guruHome()
    {
        return view('elearning.home.index');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
		$sekolahmodel = School::where('label_id', 1)->count();
        $sekolahjejaring = School::where('label_id', 3)->count();
        $mentor = User::where('role_id', 2)->count();
        $guru = User::where('role_id', 3)->count();
        return view('dashboard.index', [
            'model' => $sekolahmodel,
            'jejaring' => $sekolahjejaring,
            'mentor' => $mentor,
            'guru' => $guru,
        ]);
        return view('dashboard.index');
		}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
        $sekolahmodel = School::where('label_id', 1)->count();
        $sekolahjejaring = School::where('label_id', 3)->count();
        $mentor = User::where('role_id', 2)->count();
        $guru = User::where('role_id', 3)->count();
        return view('dashboard.index', [
            'model' => $sekolahmodel,
            'jejaring' => $sekolahjejaring,
            'mentor' => $mentor,
            'guru' => $guru,
        ]);
    }
	*/
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
