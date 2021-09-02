<?php

namespace App\Http\Controllers;

use App\Category;
use App\Grade;
use App\Level;
use App\Module;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ModuleController extends Controller
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
        $categories = Category::get();
        $levels = Level::get();
        $grades = Grade::get();

        return view('dashboard.modul.create', [
            'categories' => $categories,
            'levels' => $levels,
            'grades' => $grades
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attr = $request->validate([
            'category' => 'required',
            'level' => 'required',
            'grade' => 'required',
            'title' => 'required',
            'description' => 'required',
            'challenge' => 'required',
            'url_video' => 'required',
            'url_image' => 'required',
            'url_document' => 'required',
        ]);

        $slug = Str::slug($request->title);
        $attr['slug'] = $slug;

        $attr['category_id'] = request('category');
        $attr['level_id'] = request('level');
        $attr['grade_id'] = request('grade');

        Module::create($attr);
        return redirect()->to('/');
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
