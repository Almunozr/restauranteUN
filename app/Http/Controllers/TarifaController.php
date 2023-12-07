<?php

namespace App\Http\Controllers;

use App\Models\Tarifa;
use Illuminate\Http\Request;

/**
 * Class TarifaController
 * @package App\Http\Controllers
 */
class TarifaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarifas = Tarifa::paginate();

        return view('tarifa.index', compact('tarifas'))
            ->with('i', (request()->input('page', 1) - 1) * $tarifas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tarifa = new Tarifa();
        return view('tarifa.create', compact('tarifa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tarifa::$rules);

        $tarifa = Tarifa::create($request->all());

        return redirect()->route('tarifa.index')
            ->with('success', 'Tarifa created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarifa = Tarifa::find($id);

        return view('tarifa.show', compact('tarifa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarifa = Tarifa::find($id);

        return view('tarifa.edit', compact('tarifa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tarifa $tarifa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarifa $tarifa)
    {
        request()->validate(Tarifa::$rules);

        $tarifa->update($request->all());

        return redirect()->route('tarifa.index')
            ->with('success', 'Tarifa updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tarifa = Tarifa::find($id)->delete();

        return redirect()->route('tarifa.index')
            ->with('success', 'Tarifa deleted successfully');
    }
}
