<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('dashboard.user.listuser', ['users' => $users]);
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
    public function show(User $users)
    {
        return view('dashboard.user.userdetail', ['users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $users)
    {
        $roles = Role::get();
        return view('dashboard.user.useredit', [
            'users' => $users,
            'roles' => $roles,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $users, Role $roles)
    {
        $attr = request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $attr['role_id'] = request('role');
        $attr['jabatan'] = request('jabatan');
        $attr['sekolah'] = request('sekolah');
        $attr['kabupaten'] = request('kabupaten');

        $users->update($attr);

        return redirect()->to('user/listuser')->with('success', 'Data User berhasil diperbarui !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $users)
    {
        $users->delete();
        return redirect('user/listuser')->with('success', 'Data User berhasil dihapus !');
    }
	
	public function profile(User $users)
    {
        return view('elearning.profile.rincian-profil',compact('users',$users));
    }
	
	public function upload(Request $request)
    {
        if($request->hasFile('avatar')){
            $filename = $request->avatar->getClientOriginalName();
            $request->avatar->storeAs('avatar',$filename,'public');
            Auth()->user()->update(['avatar'=>$filename]);
        }
        return redirect()->back()->with('success',' Foto telah diperbaharui!');
    }
	
	public function ubah(Request $request)
    {	
		$users=auth()->user();
        $users->name = $request->input('name');
        $users->workshop = $request->input('workshop');
        $users->pendidikan_terakhir = $request->input('pendidikan_terakhir');
        $users->tempat_lahir = $request->input('tempat_lahir');
		$users->tanggal_lahir = $request->input('tanggal_lahir');
		$users->gender = $request->input('gender');
		$users->hp = $request->input('hp');
		$users->jabatan = $request->input('jabatan');
        $users->update();
        return redirect()->back()->with('success',' Data telah diperbaharui!');
    }
}
