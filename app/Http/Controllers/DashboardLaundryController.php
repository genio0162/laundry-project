<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use App\Models\Item;
use App\Models\Perfume;
use App\Models\Payment;
use App\Models\Satuan;
use App\Models\Kiloan;
use App\Models\Pickup;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardLaundryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->role->id == 1){
        return view('laundry.index' , [
            'title' => 'Data Laundry',
            'laundrys' => Laundry::latest()->paginate(10),
        ]);
    } else{
            return view('dashboard.404');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(auth()->user()->role->id == 1){
            // Fetch departments
            return view('laundry.create', [
                'title' => 'Tambah Data Laundry',
                'satuans' => Satuan::all(),
                'kiloans' => Kiloan::all(),
                'items' => Item::all(),
                'perfumes' => Perfume::all(),
                'users' => User::all(),
                'payments' => Payment::all(),
            ]);
        } else{
                return view('dashboard.404');
            }
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
            'user_id' => 'required',
            'item_id' => 'required',
            'satuan_id' => '',
            'kiloan_id' => '',
            'perfume_id' => '',
            'tanggal_masuk' => 'required',
            'tanggal_selesai' => 'required',
            'payment_id' => 'required',
            'bayar' => '',
            'kembalian' => ''
        ]);

        $validatedData['user_id'] = User::firstWhere('telepon', $request['user_id'])->id;
        $perfume = Perfume::firstWhere('id', $request['perfume_id'])->harga;

        if($request['satuan_id']){
            $satuan = Satuan::firstWhere('id', $request['satuan_id'] )->harga;
            $validatedData['total_pembayaran'] = $perfume+$satuan;
        } elseif($request['kiloan_id']){
            $kiloan = Kiloan::firstWhere('id', $request['kiloan_id'] )->harga;
            $validatedData['total_pembayaran'] = $perfume+$kiloan;
        } else {
            $nilai = 0;
        }

        if($request['bayar']){
           $validatedData['kembalian']= $request['bayar']-$validatedData['total_pembayaran'];
        } else {
            $validatedData['bayar'] = 0;
            $validatedData['kembalian'] = 0;
        }

        Laundry::create($validatedData);

        return redirect('/laundries')->with('success', 'Tambah Laundry succesfull!!') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laundry  $laundry
     * @return \Illuminate\Http\Response
     */
    public function show(Laundry $laundry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laundry  $laundry
     * @return \Illuminate\Http\Response
     */
    public function edit(Laundry $laundry)
    {
        if(auth()->user()->role->id == 1){
            // Fetch departments
            return view('laundry.show', [
                'title' => 'Tambah Data Laundry',
                'laundry' => $laundry,
                'satuans' => Satuan::all(),
                'kiloans' => Kiloan::all(),
                'items' => Item::all(),
                'perfumes' => Perfume::all(),
                'users' => User::all(),
                'payments' => Payment::all(),
                'pickups' => Pickup::all()
            ]);
        } else{
                return view('dashboard.404');
            }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laundry  $laundry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laundry $laundry)
    {
        $validatedData = $request->validate([
            'tanggal_selesai' => '',
            'payment_id' => '',
            'pickup_id' => '',
            'bayar' => '',
            'kembalian' => ''
        ]);

        if($request['bayar']){
            $validatedData['kembalian']= $request['bayar']-$laundry->total_pembayaran;
         } else {
             $validatedData['bayar'] = 0;
             $validatedData['kembalian'] = 0;
         }

        Laundry::where('id', $laundry->id)->update($validatedData);

        return redirect('/laundries')->with('success', 'Update Laundry succesfull!! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laundry  $laundry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laundry $laundry)
    {
        Laundry::destroy($laundry->id);
        return redirect('/laundries')->with('delete', 'Hapus Laundry succesfull!! Data Di Hapus') ;
    }

}
