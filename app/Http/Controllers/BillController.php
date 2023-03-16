<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\PriceOrigin;
use App\Models\ShellType;
use App\Models\Storage;
use App\Traits\CheckLatestPriceOrigin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBills = Bill::all();
        $priceOrigin = PriceOrigin::get()->last();
        $shellTypes = ShellType::all();
        $storages = Storage::all();
//        return view('manage.index')->with('minSaleOrigin', $priceOrigin)->with(compact('dataBills'));
        return view('sales.dashboard-sales')->with(compact('dataBills','shellTypes','storages','priceOrigin'));
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
//        dd($request);
        $userId = Auth::user()->id;
        $inStoreDate = Carbon::now();
        $unit = 'kg';
        $shellinfo = ShellType::find($request->shellType);
        $massShell = $shellinfo['massShell'];
        $ammount = $request->ammount;
        $massTotal = $massShell * $ammount;
        $salePrice = $request->salePrice;
        $priceOrigin = PriceOrigin::get('minSaleOrigin')->last();
        $minSaleAllow = $priceOrigin->minSaleOrigin;
        if ($priceOrigin->minSaleOrigin < $salePrice) {
            $priceSale = $salePrice;
        }else{
            echo 'Lỗi, giá bán phải cao hơn giá nhập!';
            return redirect()->back();
        }
        $buyTotal= $massTotal*$minSaleAllow;
        $bill =$massTotal*$priceSale;
        $databill=Bill::create([
            'inStoreDate' => $inStoreDate,
            'unit' => $unit,
            'massTotal' => $massTotal,
            'priceSale' => $priceSale,
            'nameCustomer' => $request->nameCustomer,
            'shellType' => $request->shellType,
            'ammount' => $request->ammount,
            'storageId' => $request->storageId,
            'salePrice' => $salePrice,
            'buyPrice' => $minSaleAllow,
            'buyTotal' => $buyTotal,
            'bill' => $bill,
            'idSale' => $userId,
            'interest' => $bill - $buyTotal,
            'income' => $bill-$buyTotal,
            'address' => $request->address,
        ]);
        $databill->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $dataBills = Bill::all();
        $priceOrigin = PriceOrigin::get('minSaleOrigin')->last();
        $shellTypes = ShellType::all();
        $storages = Storage::all();
//        return view('manage.index')->with('minSaleOrigin', $priceOrigin)->with(compact('dataBills'));
        return view('manage.billDetail')->with(compact('dataBills','shellTypes','storages','priceOrigin'));
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
    public function update(Request $request)
    {

        $bill = Bill::find($request->id);
        if (!$bill) {
            return response()->json('failed');
        }

        return response()->json($bill->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
