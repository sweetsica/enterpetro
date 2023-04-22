<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $customers = Customer::take(50)->orderBy('id', 'asc');
        if ($request->search) {
            $customers = $customers->where('name', 'like', "%$request->search%");
            $data['search'] = $request->search;
        }

        $data['customers'] = $customers->get();


        return view('functions.customer.index', $data);
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
        $data = $request->all();
        $data['dob'] = Carbon::now();
//        dd($data);
        Customer::create($data);
        return redirect()->route('index-cus');
    }

    public function search(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::query()->with('bills')->find($id);

        $data['customer'] = $customer;

        return view('functions.customer.detail', $data);
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
