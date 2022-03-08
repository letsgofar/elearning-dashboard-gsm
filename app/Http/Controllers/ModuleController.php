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

    public function indexspecial()
    {
        $special = Module::where('level_id', 1)->latest()->paginate(5);
        return view('dashboard.module.modulespecial', ['specials' => $special]);
    }

    public function indexbasic()
    {
        $basic = Module::where('level_id', 2)->latest()->paginate(5);
        return view('dashboard.module.modulebasic', ['basics' => $basic]);
    }
    public function indexadvanced()
    {
        $advanced = Module::where('level_id', 3)->latest()->paginate(5);
        return view('dashboard.module.moduleadvanced', ['advanceds' => $advanced]);
    }

    //elearning
    public function materispecial()
    {
        $special = Module::where('level_id', 1)->latest()->paginate(5);
        return view('elearning.materi.special', ['specials' => $special]);
    }
    public function materibasic()
    {
        $basic = Module::where('level_id', 2)->latest()->paginate(5);
        return view('elearning.materi.basic', ['basics' => $basic]);
    }
    public function materiadvanced()
    {
        $advanced = Module::where('level_id', 3)->latest()->paginate(5);
        return view('elearning.materi.advanced', ['advanceds' => $advanced]);
    }


    //elearning
    public function detailspecial(Module $modules)
    {
        return view('elearning.materi.special-detail', ['modules' => $modules]);
    }
    public function detailbasic(Module $modules)
    {
        return view('elearning.materi.basic-detail', ['modules' => $modules]);
    }
    public function detailadvanced(Module $modules)
    {
        return view('elearning.materi.advanced-detail', ['modules' => $modules]);
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

        return view('dashboard.module.create', [
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
        return redirect()->to('/module/create')->with('success', 'Modul berhasil dibuat !');
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

    public function editspecial(Module $modules)
    {
        $categories = Category::get();
        $levels = Level::get();
        $grades = Grade::get();
        return view('dashboard.module.editmodulspecial', [
            'modules' => $modules,
            'categories' => $categories,
            'levels' => $levels,
            'grades' => $grades,
        ]);
    }

    public function editbasic(Module $modules)
    {
        $categories = Category::get();
        $levels = Level::get();
        $grades = Grade::get();
        return view('dashboard.module.editmodulbasic', [
            'modules' => $modules,
            'categories' => $categories,
            'levels' => $levels,
            'grades' => $grades,
        ]);
    }

    public function editadvanced(Module $modules)
    {
        $categories = Category::get();
        $levels = Level::get();
        $grades = Grade::get();
        return view('dashboard.module.editmoduladvanced', [
            'modules' => $modules,
            'categories' => $categories,
            'levels' => $levels,
            'grades' => $grades,
        ]);
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

    public function updatespecial(Request $request, Module $modules)
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

        $modules->update($attr);

        return redirect()->to('/module/special')->with('success', 'Modul berhasil diperbarui !');
    }

    public function updatebasic(Request $request, Module $modules)
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

        $modules->update($attr);

        return redirect()->to('/module/basic')->with('success', 'Modul berhasil diperbarui !');
    }

    public function updateadvanced(Request $request, Module $modules)
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

        $modules->update($attr);

        return redirect()->to('/module/advanced')->with('success', 'Modul berhasil diperbarui !');
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

    public function destroyspecial(Module $modules)
    {
        $modules->delete();
        return redirect()->to('/module/special')->with('success', 'Modul berhasil dihapus !');
    }

    public function destroybasic(Module $modules)
    {
        $modules->delete();
        return redirect()->to('/module/basic')->with('success', 'Modul berhasil dihapus !');
    }

    public function destroyadvanced(Module $modules)
    {
        $modules->delete();
        return redirect()->to('/module/advanced')->with('success', 'Modul berhasil dihapus !');
    }
}
