<?php

namespace App\Traits;

use App\Models\Bill;
use App\Models\PriceOrigin;
use Carbon\Carbon;

trait KeyNumberTrait
{

    public function total_week(Carbon $date = null)
    {
        $startDate = Carbon::now()->subWeek();
        $endDate = Carbon::now();

        $weekBill = Bill::where('created_at', '>=', $startDate)
            ->where('created_at', '<=', $endDate);

        $total['totalMass'] = $weekBill->sum('massTotal');
        $total['totalBill'] = $weekBill->sum('bill');
        $total['totalBuy'] = $weekBill->sum('buyTotal');
        $total['totalInterest'] = $weekBill->sum('interest');

        return $total;
    }
}
