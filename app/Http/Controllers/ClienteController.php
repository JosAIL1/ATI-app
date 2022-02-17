<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $clientes = Cliente::all();
        return view('cliente.index')->with('clientes', $clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cliente.create');
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
        $clientes = new Cliente();

        $clientes->nombre=$request->get('nombre');
        $clientes->apellido=$request->get('apellido');
        $clientes->correo=$request->get('correo');
        $clientes->dependencia=$request->get('dependencia');
        $clientes->area=$request->get('area');
        $clientes->domicilio=$request->get('domicilio');
        $clientes->telefono=$request->get('telefono');
        $clientes->fecha_registro=$request->get('fecha_registro');
        $clientes->marca=$request->get('marca');
        $clientes->serie=$request->get('serie');
        $clientes->factura=$request->get('factura');
        $clientes->falla=$request->get('falla');

        $clientes->save();

        return redirect('/clientes');
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
        $cliente = Cliente::find($id);
        return view('cliente.edit')->with('cliente',$cliente);
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
        $cliente = Cliente::find($id);

        $cliente->nombre=$request->get('nombre');
        $cliente->apellido=$request->get('apellido');
        $cliente->correo=$request->get('correo');
        $cliente->dependencia=$request->get('dependencia');
        $cliente->area=$request->get('area');
        $cliente->domicilio=$request->get('domicilio');
        $cliente->telefono=$request->get('telefono');
        $cliente->fecha_registro=$request->get('fecha_registro');
        $cliente->marca=$request->get('marca');
        $cliente->serie=$request->get('serie');
        $cliente->factura=$request->get('factura');
        $cliente->falla=$request->get('falla');

        $cliente->save();
       
        return redirect('/clientes');
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
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect('/clientes');
    }
}
