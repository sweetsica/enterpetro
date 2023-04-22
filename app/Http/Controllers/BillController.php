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
use Illuminate\Support\Facades\Session;

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
        return view('sales.dashboard-sales')->with(compact('dataBills', 'shellTypes', 'storages', 'priceOrigin'));
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
        $priceOrigin = PriceOrigin::get('minSaleOrigin')->last();
        $salePrice = str_replace(',', '', $request->salePrice);
        if ($priceOrigin->minSaleOrigin < $salePrice) {
            $priceSale = $salePrice;
        } else {
        dd('something wrong');
            return redirect()->back()->with('fail', 'Lỗi, giá bán phải cao hơn giá nhập!');
        }

        $userId = Auth::user()->id;

        $codeBill = time();
        $inStoreDate = Carbon::now();
        $unit = 'kg';
        $shellinfo = ShellType::find($request->shellType);
        $massShell = $shellinfo['massShell'];
        $ammount = $request->ammount;
        $massTotal = $massShell * $ammount;
        $minSaleAllow = $priceOrigin->minSaleOrigin;
        $salePrice = str_replace(',', '', $salePrice);
        $buyTotal = $massTotal * $minSaleAllow;
        $bill = $massTotal * $priceSale;
        $shellDebt = $request->shellDebt;
        $debt = $request->debt;


        $databill = Bill::create([
            'codeBill' => $codeBill,
            'inStoreDate' => $inStoreDate,
            '$bill' => $unit,
            'massTotal' => $massTotal,
            'priceSale' => $priceSale,
            'customer_id' => $request->customer_id,
            'shellType' => $request->shellType,
            'ammount' => $request->ammount,
            'storageId' => $request->storageId,
            'salePrice' => $salePrice,
            'buyPrice' => $minSaleAllow,
            'buyTotal' => $buyTotal,
            'bill' => $bill,
            'shellDebt' => $shellDebt,
            'debt' => $debt,
            'idSale' => $userId,
            'interest' => $bill - $buyTotal,
            'income' => $bill - $buyTotal,
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
        return view('manage.billDetail')->with(compact('dataBills', 'shellTypes', 'storages', 'priceOrigin'));
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
//        dd(\session()->all());
        $code = $request->codeBill;
        $bill = Bill::where('codeBill', $code)->first();
        if (!$bill) {
            return redirect()->back()->withErrors('Code bill not found', 'notFoundBill');
        }

        if (Session::get('role') == 'admin' || Session::get('role') == 'accountant') {
            $bill->update($request->all());
        } else {
            $data = [];
            if ($request->moneyDebt) {
                $data['debt'] = $bill->debt - $request->moneyDebt;
            }

            if ($request->shellDebt) {
                $data['shellDebt'] = $bill->shellDebt - $request->shellDebt;
            }
            $bill->update($data);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
