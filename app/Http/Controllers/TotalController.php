<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Customer;
use App\Models\PriceDaily;
use App\Models\PriceOrigin;
use App\Models\ShellType;
use App\Models\Storage;
use App\Traits\CheckLatestPriceOrigin;
use App\Traits\DataCommonTrait;
use App\Traits\KeyNumberTrait;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class TotalController extends Controller
{
    use CheckLatestPriceOrigin, KeyNumberTrait, DataCommonTrait;

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
        $data = $this->getData();
        $priceOrigin = $data['priceOrigin'];
        $shellTypes = $data['shellTypes'];
        $storages = $data['storages'];
        $dataBills = Bill::orderByDesc('created_at')->take(20)->get();
        $key_week = $this->total_week();
        return view('manage.index')
            ->with(compact('priceOrigin', 'shellTypes', 'storages', 'dataBills', 'key_week'));
    }

    public function index_ac()
    {
        $priceOrigin = PriceOrigin::get()->last();
        $shellTypes = ShellType::all();
        $storages = Storage::all();
        $dataBills = Bill::orderByDesc('created_at')->take(20)->get();
        $key_week = $this->total_week();
        return view('accountant.dashboard-accountant')
            ->with(compact('priceOrigin', 'shellTypes', 'storages', 'dataBills', 'key_week'));
    }

    public function index_sa(Request $request)
    {
        if (is_null(Auth::user())) {
            return redirect('/')->with('error', 'Vui lòng đăng nhập!');
        }

        $search = $request->search;
        $checkDaily = $this->isExistPriceOrigin();
        if ($checkDaily == true) {
            $priceOrigin = PriceOrigin::all()->last();
        } else {
            $priceOrigin = null;
        }
        $shellTypes = ShellType::all();
        $storages = Storage::all()->toArray();
        $customers = Customer::all();

        $dataBills = Bill::query();
        if (Auth::user()->id == 0 || Auth::user()->id == 1) {
            $dataBills = $dataBills->orderByDesc('created_at')->take(20);
        } else {
            $userId = Auth::user()->id;
            $dataBills = $dataBills->where('idSale', '=', $userId);
        }
        if ($search) {
            $dataBills->where(function ($query) use ($search) {
                $query->where('nameCustomer', 'like', "%$search%")
                    ->orWhere('codeBill', 'like', "%$search%");
            });
        }
        $dataBills = $dataBills->get();
        return view('sales.dashboard-sales')->with(compact('priceOrigin', 'search', 'shellTypes', 'storages', 'dataBills', 'customers'));
    }

    public function checklogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
//            'username' => 'required|min:6|alpha_num',
//            'email' => 'required|email|min:4|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\\\.[a-zA-Z]{2,}$/',
            'password' => 'required|min:8'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $user_role = $user->role;
            if ($user_role == 'admin') {
                Session::put('userId', $user->id);
                Session::put('role', 'admin');
                return redirect()->route('dashboard-ad')->with('success', 'Đăng nhập thành công!');
            } elseif ($user_role == 'accounting') {
                Session::put('userId', $user->id);
                Session::put('role', 'accounting');
                return redirect()->route('dashboard-ac')->with('success', 'Đăng nhập thành công!');
            } else {
                Session::put('userId', $user->id);
                Session::put('role', 'sale');
                return redirect()->route('dashboard-sa')->with('success', 'Đăng nhập thành công!');
            }
        } else {
            return redirect('/login')->with('error', 'Email hoặc mật khẩu không đúng!');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
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
