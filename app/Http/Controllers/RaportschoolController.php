<?php

namespace App\Http\Controllers;

use App\Category;
use App\Raportschool;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RaportschoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rapotschools = Raportschool::latest()->paginate(5);
        return view('dashboard.raport.school.index', ['raportschools' => $rapotschools]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('dashboard.raport.school.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Raportschool $raportschools)
    {
        $attr = request()->validate([
            'name' => 'required',
            'nama_modul' => 'required',
            'nilai_modul' => 'required',
            'jenis_modul' => 'required',
        ]);

        $slug = Str::slug($request->name);
        $attr['slug'] = $slug;

        $raportschools->create($attr);

        return redirect()->to('/raport/instansi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Raportschool $raportschools)
    {
        return view('dashboard.raport.school.show', ['raportschools' => $raportschools]);
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
