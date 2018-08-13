<?php

namespace envios\Http\Controllers;

use Illuminate\Http\Request;
use envios\envios;


class EnviosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $envios = envios::All();
        return view('envios.index',compact('envios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return "Esta en Create";
        return view('envios.ingresar');
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

        $validatedData = $request->validate([
        'user_envia_nombre' => 'required|max:255',
        'user_envia_id' => 'required|max:25',
        'user_recibe_nombre' => 'required|max:255',
        'user_recibe_id' => 'required|max:25',
    ]);
    
        envios::create([
            'user_envia_nombre' => request('user_envia_nombre'),
            'user_envia_id' => request('user_envia_id'),
            'user_recibe_nombre' => request('user_recibe_nombre'),
            'user_recibe_id' => request('user_recibe_id'),
            'tipo_envio_desc' => request('tipo_envio_desc'),
            'descripcion' => request('descripcion'),
            'estado_envio' => request('estado_envio'),
            'fecha_envio' => request('fecha_envio'),
            'fecha_recibido' => request('fecha_recibido'),
            'dep_origen_id' => request('dep_origen_id'),
            'dep_destino_id' => request('dep_destino_id'),
            'muni_origen_id' => request('muni_origen_id'),
            'muni_destino_id' => request('muni_destino_id'),
        ]);

        return "Envio Registrado";
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
        $envios = envios::find($id);
        return view('envios.modificar',['envios'=>$envios]);
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
        $envios = envios::find($id);
        $envios->fill($request->all());
        $envios->save();

        $request->session()->flash('mensaje', 'envio editado correctamente');
        //Session::flash('mensaje','envio editado correctamente');
        //return reidrect::to('/envios');
         return redirect('/envios');
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

     public function ingresar()
    {
        //
        return view('ingresar');
    }

     public function modificar($id)
    {
        //
       return view('envios.modificar');
    }

     public function visualizar($id)
    {
        //
        return view('visualizar');
    }
}
