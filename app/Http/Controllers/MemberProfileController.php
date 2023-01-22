<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class MemberProfileController extends Controller
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
    public function edit(User $member)
    {
        return view('member.show',[
            'member' => $member
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $member)
    {
        $rules = [
            'name' => 'min:3|max:255',
            'img' => 'image|file|max:1024',
            'alamat' => ''
        ];

        if ($request->telepon != $member->telepon){
        $rules['telepon'] = 'required|min:11|max:13|unique:users';
    }
    if ($request->email != $member->email){
    $rules['email'] = 'required|unique:users';
}
    $validatedData = $request->validate($rules);
    if ($request->file('img')){
        if($request->oldImage == 'customers-images/default.jpg'){
        } else {
            Storage::delete($request->oldImage);
        }
        $validatedData['img'] =  $request->file('img')->store('customers-images');
    }
    if($validatedData['alamat']){
        $validatedData['is_active'] = 1;
    } else {
        $validatedData['is_active'] = 0;
    }

    User::where('id', $member->id)->update($validatedData);

    return redirect('/dashboard')->with('success', 'Update Profile succesfull!! Silahkan cek data diri anda');

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
