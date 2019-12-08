<?php

namespace App\Http\Controllers;
use App\Niko;

use Illuminate\Http\Request;

class Nikolo extends Controller
{
    /**
     * index
     *
     */
    public function index()
    {

    }

    /**
     * index
     *
     */
    public function store(Request $request)
    {
        Niko::create($request->all());

        return redirect()->route('root');
    }

    /**
     * update
     *
     */
    public function actualizar(Request $request, $id)
    {
        $niko = Niko::find($id);
        $niko->nombre = $request->input('nombre');
        $niko->apellidoP = $request->input('apellidoP');
        $niko->apellidoM = $request->input('apellidoM');
        $niko->edad = $request->input('edad');
        $niko->correo_electronico = $request->input('correo_electronico');
        $niko->save();

        return redirect()->route('root');
    }

    /**
     * update
     *
     */
    public function eliminar(Request $request, $id)
    {
        $niko = Niko::find($id);
        $niko->delete();

        return redirect()->route('root');
    }
}
