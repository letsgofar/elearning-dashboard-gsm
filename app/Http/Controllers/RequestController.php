<?php

namespace App\Http\Controllers;

use App\School;
use App\User;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mentorindex()
    {
        $requests = User::where('role_id', '3')->latest()->paginate(5);
        return view('dashboard.request.mentor.index', ['requests' => $requests]);
    }

    public function sekolahmodelindex()
    {
        $requests = School::where('label_id', '3')->latest()->paginate(5);
        return view('dashboard.request.sekolahmodel.index', ['requests' => $requests]);
    }

    public function mentorupdate(Request $request, User $users)
    {
        $users->role_id = 2;
        $users->update();
        return redirect('/request/permintaanmentor')->with('success', 'Permintaan mentor berhasil diterima !');
    }

    public function sekolahmodelupdate(Request $request, School $schools)
    {
        $schools->label_id = 1;
        $schools->update();
        return redirect('/request/permintaansekolah')->with('success', 'Permintaan sekolah model berhasil diterima !');
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
