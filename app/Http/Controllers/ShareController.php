<?php

namespace App\Http\Controllers;

use App\Share;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Share::latest()->Paginate(6);
        return view('elearning.berbagi.lini-masa-berbagi', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('elearning/berbagi/buat-konten-berbagi');
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
            'body' => 'required',
            'title' => 'required',
        ]);

        $slug = Str::slug($request->title);
        $attr['slug'] = $slug;

        $request->validate([
            'thumbnail' => 'image | mimes:jpeg, png, jpg, svg| max:2048'
        ]);

        $attr['user_id'] = auth()->id();
        $thumbnail = request()->file('thumbnail');
        $thumbnailUrl = $thumbnail->storeAs('/images/photos', "{$slug}.{$thumbnail->extension()}",'public');
        $attr['thumbnail'] = $thumbnailUrl;

        Share::create($attr);
        return redirect('/elearning/berbagi/lini-masa-berbagi');
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
