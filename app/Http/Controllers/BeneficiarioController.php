<?php

namespace App\Http\Controllers;
use App\Models\Campu;
use App\Models\Tarifa;
use App\Models\Beneficiario;
use Illuminate\Http\Request;

/**
 * Class BeneficiarioController
 * @package App\Http\Controllers
 */
class BeneficiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarifas= Tarifa::pluck('nombre','id');
        $beneficiarios = Beneficiario::paginate();

        return view('beneficiario.index', compact('beneficiarios','tarifas'))
            ->with('i', (request()->input('page', 1) - 1) * $beneficiarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tarifas= Tarifa::pluck('nombre','id');
        // $campus= Campu::pluck('nombre','id');
        $beneficiario = new Beneficiario();
        return view('beneficiario.create', compact('beneficiario','tarifas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Beneficiario::$rules);

        $beneficiario = Beneficiario::create($request->all());

        return redirect()->route('beneficiario.index')
            ->with('success', 'Beneficiario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $beneficiario = Beneficiario::find($id);

        return view('beneficiario.show', compact('beneficiario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarifas= Tarifa::pluck('nombre','id');
        $beneficiario = Beneficiario::find($id);

        return view('beneficiario.edit', compact('beneficiario','tarifas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Beneficiario $beneficiario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beneficiario $beneficiario)
    {
        request()->validate(Beneficiario::$rules);

        $beneficiario->update($request->all());

        return redirect()->route('beneficiario.index')
            ->with('success', 'Beneficiario Editado Satisfactoriamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $beneficiario = Beneficiario::find($id)->delete();

        return redirect()->route('beneficiario.index')
            ->with('success', 'Beneficiario deleted successfully');
    }
}
