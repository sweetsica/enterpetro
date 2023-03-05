<?php

namespace App\Traits;

use App\Models\PriceOrigin;
use Carbon\Carbon;

trait CheckLatestPriceOrigin
{
    public function isExistPriceOrigin(Carbon $date = null)
    {
        $currentDays = Carbon::now();
        if ($date) {
            $currentDays = $date;
        }

        return PriceOrigin::query()
        ->whereDay('created_at', $currentDays->day)
        ->whereYear('created_at', $currentDays->year)
        ->whereMonth('created_at', $currentDays->month)
        ->exists();
    }
}
