<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            return view('customer.index' , [
                'title' => 'Data Customer',
                'users' => User::paginate(10)
            ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

            return view('customer.create', [
                'title' => 'Tambah Data Customer'
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
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'username' => 'required|min:4|max:255|unique:users',
            'email' => '',
            'telepon' => 'required|min:11|max:13|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/customers')->with('success', 'Tambah Customer succesfull!! Silahkan cek data customer');
    }

    /**
     *
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $customer)
    {

            return view('customer.show',[
                'customer' => $customer
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $customer)
    {

    return view('customer.show',[
        'customer' => $customer
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $customer)
    {
        $rules = [
            'name' => 'min:3|max:255',
            'img' => 'image|file|max:1024',
            'alamat' => ''
        ];

        if ($request->telepon != $customer->telepon){
        $rules['telepon'] = 'required|min:11|max:13|unique:users';
    }
    if ($request->email != $customer->email){
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

    User::where('id', $customer->id)->update($validatedData);

    return redirect('/customers')->with('success', 'Update Customer succesfull!! Silahkan cek data customer');

}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $customer)
    {
        if($customer->img == 'customers-images/default.jpg'){
        } else {
            Storage::delete($customer->img);
        }

        User::destroy($customer->id);
        return redirect('/customers')->with('success', 'Hapus Customers succesfull!! Data Di Hapus') ;
    }


}
