<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Cart;
use App\Models\City;
use App\Models\User;
use App\Models\Province;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class TransactionController extends Controller
{
  
    public function index()
    {
        //
    }

 
    public function create($id)
    {
        $cart =   Cart::with(['products.images'])->find($id);
       
        $provinces = Province::pluck('name', 'province_id');
        return view('client.transaction.transaction-create',compact(['provinces','cart']));
    }
    public function getCities(Request $request)
    {
        $city = City::where('province_id', $request->province_id)->pluck('name', 'city_id');
        return response()->json($city);
    }
    
    public function check_ongkir(Request $request)
    {
        $cost = RajaOngkir::ongkosKirim([
            'origin'        => $request->city_origin, // ID kota/kabupaten asal
            'destination'   => $request->city_destination, // ID kota/kabupaten tujuan
            'weight'        => $request->weight, // berat barang dalam gram
            'courier'       => $request->courier // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
        ])->get();


        return response()->json($cost);
    }

    
    public function store(Request $request)
    {

        dd($request->all());
        $timeNow = Carbon::now();
        $timeOut = $timeNow->add(1,'day');


        $transactionAttribute = [];
        $transactionAttribute['user_id'] = Auth::user()->id;
        $transactionAttribute['status'] = 'PENIDNG';
        $transactionAttribute['timeout'] = $timeOut;
        

        Transaction::insertOrUpdate([

        ]);

        Transaction::create(
            [$request->all,
             $transactionAttribute
        ]);
    }

  
    public function show(Transaction $transaction)
    {
        //
    }

   
    public function edit(Transaction $transaction)
    {
        //
    }

   
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

  
    public function destroy(Transaction $transaction)
    {
        //
    }
}
