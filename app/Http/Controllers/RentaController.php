<?php

namespace App\Http\Controllers;

use App\Models\Renta;
use App\Models\Carro;
use App\Models\Sucursal;
use App\Models\Cliente;
use App\Models\Empleado;
use Illuminate\Http\Request;

/**
 * Class RentaController
 * @package App\Http\Controllers
 */
class RentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rentas = Renta::paginate();

        return view('renta.index', compact('rentas'))
            ->with('i', (request()->input('page', 1) - 1) * $rentas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $renta = new Renta();
        $carro = Carro::pluck('nombre', 'id');
        $sucursales = Sucursal::pluck('nom_suc', 'id');
        $cliente = Cliente::pluck('nombre_cli', 'id');
        $empleado = Empleado::pluck('nombre_emp', 'id');
        
        return view('renta.create', compact('renta', 'carro', 'sucursales', 'cliente', 'empleado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Renta::$rules);

        $renta = Renta::create($request->all());

        return redirect()->route('rentas.index')
            ->with('success', 'El registro se ha añadido correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $renta = Renta::find($id);

        return view('renta.show', compact('renta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $renta = Renta::find($id);
        $carro = Carro::pluck('nombre', 'id');
        $sucursales = Sucursal::pluck('nom_suc', 'id');
        $cliente = Cliente::pluck('nombre_cli', 'id');
        $empleado = Empleado::pluck('nombre_emp', 'id');

        return view('renta.edit', compact('renta', 'carro', 'sucursales', 'cliente', 'empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Renta $renta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Renta $renta)
    {
        request()->validate(Renta::$rules);

        $renta->update($request->all());

        return redirect()->route('rentas.index')
            ->with('success', 'El registro se ha actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $renta = Renta::find($id)->delete();

        return redirect()->route('rentas.index')
            ->with('success', 'El registro se ha eliminado correctamente');
    }
}
