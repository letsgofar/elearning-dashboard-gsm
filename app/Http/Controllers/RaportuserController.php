<?php

namespace App\Http\Controllers;

use App\Category;
use App\Raportuser;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class RaportuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rapotusers = Raportuser::latest()->paginate(5);
        return view('dashboard.raport.user.index', ['raportusers' => $rapotusers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('dashboard.raport.user.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Raportuser $raportusers)
    {
        $attr = request()->validate([
            'name' => 'required',
            'nama_modul' => 'required',
            'nilai_modul' => 'required',
            'jenis_modul' => 'required',
        ]);

        $slug = Str::slug($request->name);
        $attr['slug'] = $slug;

        $raportusers->create($attr);

        return redirect()->to('/raport/guru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Raportuser $raportusers)
    {
        return view('dashboard.raport.user.show', ['raportusers' => $raportusers]);
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
