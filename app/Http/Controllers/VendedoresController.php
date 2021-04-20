<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;

class VendedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendedores = Vendedor::all();
        return view("vendedores.index", compact("vendedores"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("vendedores.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vendedores = new Vendedor;
        $vendedores -> nombre =$request-> nombre;
        $vendedores -> apellido_paterno =$request-> apellido_paterno;
        $vendedores -> apellido_materno =$request-> apellido_materno;
        $vendedores ->save();
        return redirect("/vendedores");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendedores = Vendedor::findorFail($id);
        return view("vendedores.show", compact("vendedores"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vendedores = Vendedor::findorFail($id);
        return view("vendedores.edit", compact("vendedores"));
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
        $vendedores = Vendedor::findOrFail($id);
        $vendedores ->update($request->all());
        return redirect("/vendedores");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendedores = Vendedor::findOrFail($id);
        $vendedores ->delete();
        return redirect("/vendedores");
    }
}
