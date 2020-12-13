<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class Poeta extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = DB::table('customer')
            ->orderBy('idcustomerCode', 'asc')
            ->get();

        return view('login.showusers', ['customer' => $customer]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('login.altauser');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        $customer = DB::table('customer')->insert([
            'firstname' => $request->input('firstname'),
            'surname' => $request->input('surname'),
            'address' => $request->input('address'),
            'postcode' => $request->input('postcode'),
            'telephonenumber' => $request->input('telephonenumber')
        ]);

        return redirect()->action('Poeta@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = DB::table('customer')
            ->where('idcustomerCode', '=', $id)
            ->first();
        return view('login.altauser', ['customer' => $customer]);
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
    public function update(Request $request)
    {
        $customer = DB::table('customer')
        ->where('idcustomerCode', '=', $request->input('id'))
        ->update([
            'firstname' => $request->input('firstname'),
            'surname' => $request->input('surname'),
            'address' => $request->input('address'),
            'postcode' => $request->input('postcode'),
            'telephonenumber' => $request->input('telephonenumber')
        ]);

        return redirect()->action('Poeta@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = DB::table('customer')
            ->where('idcustomerCode', '=', $id)
            ->delete();

            return redirect()->action('Poeta@index')
                ->with('status', 'usuario eliminado');
    }
}
