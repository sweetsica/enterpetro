<?php

namespace App\Http\Controllers;

use App\Models\PriceDaily;
use App\Models\PriceOrigin;
use App\Models\ShellType;
use App\Models\Storage;
use Illuminate\Http\Request;

class TotalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function index_ad()
    {
        $priceOrigin = PriceOrigin::all();
        $shellTypes = ShellType::all();
        $storages = Storage::all();
        return view('manage.index')->with(compact('priceOrigin','shellTypes','storages'));
    }
    public function index_ac()
    {
        return view('accountant.dashboard-accountant');
    }
    public function index_sa()
    {
        return view('sales.dashboard-sales');
    }
    public function billTotal()
    {
//        $priceOrigin = PriceOrigin::all();
//        $shellTypes = ShellType::all();
//        $storages = Storage::all();
//        return view('manage.index')->with(compact('priceOrigin','shellTypes','storages'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
