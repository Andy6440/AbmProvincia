<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProvinciaRequest;
use App\Models\Provincia;
use Exception;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provincias = Provincia::with('ciudades')->orderBy('descripcion_provincia')->paginate(10);
        return view('provincias.index', compact('provincias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provincias  = Provincia::all();
        return view('provincias.create', compact('provincias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProvinciaRequest $request)
    {
        try {
            $provincia = new Provincia();
            $provincia->descripcion_provincia = $request->descripcion_provincia;
            $provincia->save();
            return redirect()->route('provincias.index')->with('success', 'Provincia creada con éxito');
        } catch (Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Hubo un error al crear la provincia. Por favor, inténtalo de nuevo.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //mostrar provincia by id
        $provincia = Provincia::find($id);
        return view('provincias.show', compact('provincia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit($id)
    {
        $provincias  = Provincia::all();
        $provincia = Provincia::find($id);
        return view('provincias.edit', compact('provincia','provincias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProvinciaRequest $request, $id)
    {
        $provincia = Provincia::find($id);
        $provincia->descripcion_provincia = $request->descripcion_provincia;
        $provincia->save();
        return redirect()->route('provincias.index')->with('status', 'Provincia actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $provincia = Provincia::find($id);
            $provincia->ciudades()->delete();
            $provincia->delete();
            return redirect()->route('provincias.index')->with('success', 'Provincia ' . $provincia->descripcion_provincia . '  eliminada exitosamente');
        } catch (Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Hubo un error al crear la provincia. Por favor, inténtalo de nuevo.']);
        }
    }
}
