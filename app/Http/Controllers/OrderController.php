<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store ($request, $current_customer_id) {

        //Aggiungi record nel database

        $order = new Order;

        $order->first_name = $request->nome;
        $order->last_name = $request->cognome;
        $order->total = '100';
        $order->billing_address = $request->indirizzo_fatturazione;
        $order->shipping_address = $request->indirizzo_spedizione;
        $order->zip_code = $request->cap;
        $order->city = $request->citta;
        $order->phone = $request->telefono;
        $order->email = $request->email;
        $order->customer_id = $current_customer_id;

        $order->save();

        return redirect()->route('index');

    }
}
