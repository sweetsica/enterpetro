<?php

namespace App\Http\Controllers;

use App\Models\PriceOrigin;
use App\Traits\CheckLatestPriceOrigin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PriceDailyController extends Controller
{
    use CheckLatestPriceOrigin;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $priceOrigins = PriceOrigin::query()->latest()->paginate(10);
        $isExist = $this->isExistPriceOrigin();

        return view('functions.priceDaily', [
            'priceOrigins' => $priceOrigins,
            'isExist' => $isExist
        ]);
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
        $validator = Validator::make($request->all(), [
            'priceOrigin' => 'required',
            'minSaleOrigin' => 'required',
        ]);

        if ($validator->fails()) {
            dd($validator->messages());
        }

        $params = $request->only(['priceOrigin', 'minSaleOrigin']);
        PriceOrigin::create($params);


        return redirect()->back();
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
