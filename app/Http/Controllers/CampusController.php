<?php

namespace App\Http\Controllers;

use App\Models\Campu;
use Illuminate\Http\Request;

/**
 * Class CampusController
 * @package App\Http\Controllers
 */
class CampusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campuses = Campu::paginate();

        return view('campus.index', compact('campuses'))
            ->with('i', (request()->input('page', 1) - 1) * $campuses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $campus = new Campu();
        return view('campus.create', compact('campus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Campu::$rules);

        $campus = Campu::create($request->all());

        return redirect()->route('campus.index')
            ->with('success', 'Campus created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $campus = Campu::find($id);

        return view('campus.show', compact('campus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $campus = Campu::find($id);

        return view('campus.edit', compact('campus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Campu $campus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campu $campus)
    {
        request()->validate(Campu::$rules);

        $campus->update($request->all());

        return redirect()->route('campus.index')
            ->with('success', 'Campus updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $campus = Campu::find($id)->delete();

        return redirect()->route('campus.index')
            ->with('success', 'Campus deleted successfully');
    }
}
