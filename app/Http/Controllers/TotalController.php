<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\PriceDaily;
use App\Models\PriceOrigin;
use App\Models\ShellType;
use App\Models\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $dataBills = Bill::all();
        return view('manage.index')->with(compact('priceOrigin','shellTypes','storages','dataBills'));
    }
    public function index_ac()
    {
        return view('accountant.dashboard-accountant');
    }
    public function index_sa()
    {
        $priceOrigin = PriceOrigin::all();
        $shellTypes = ShellType::all();
        $storages = Storage::all();
        $dataBill = Bill::all();
        return view('sales.dashboard-sales')->with(compact('priceOrigin','shellTypes','storages','dataBill'));
    }
    public function checklogin(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'username' => 'required|min:6|alpha_num',
            'password' => 'required|min:8'
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
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
