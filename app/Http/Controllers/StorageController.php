<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use App\Traits\DataCommonTrait;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    use DataCommonTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Storage::all();
        $totalMass = $this->getTotalMass();
        $totalShell = $this->getTotalShell();
        return view('functions.storage.index',compact('datas','totalMass','totalShell'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Storage $id)
    {
        $data = Storage::find($id)->last();
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Storage $storage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $storage = Storage::where('id', $id)->first();
        if (!$storage) {
            return redirect()->back()->withErrors('Code bill not found', 'notFoundBill');
        }
        $storage->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Storage $storage)
    {
        //
    }
}
