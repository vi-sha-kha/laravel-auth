<?php

namespace App\Http\Controllers;

use App\Models\Crudop;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CrudopController extends Controller
{

         /**
     * Display a listing of the resource.
     */
    public function index(): View
    {


        $crudops = Crudop::all();



        return view('crudops.index', compact('crudops'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('crudops.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'details' => 'required',
        ]);

        Crudop::create($request->all());

        return redirect()->route('crudops.index')
                        ->with('success','Crudop created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Crudop $crudop): View
    {
        return view('crudops.show',compact('crudop'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Crudop $crudop): View
    {
        return view('crudops.edit',compact('crudop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Crudop $crudop): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'details' => 'required',
        ]);

        $crudop->update($request->all());

        return redirect()->route('crudops.index')
                        ->with('success','Crudop updated successfully');
    }



    public function destroy(Crudop $crudop)
    {
        $crudop->delete();

          return back() -> withDanger ('Deleted Successfully!');

    }

}
