<?php

namespace App\Traits;

use App\Models\Bill;
use App\Models\PriceOrigin;
use App\Models\ShellType;
use App\Models\Storage;
use App\Models\User;
use Carbon\Carbon;

trait DataCommonTrait
{

    public function getData()
    {
        $data['priceOrigin'] = PriceOrigin::get()->last();
        $data['shellTypes'] = ShellType::all();
        $data['storages'] = Storage::all();
        return $data;
    }
//    public function getTotalMass()
//    {
//        $storages = Storage::all();
//        $bottleType = ['20', '25', '27', '28', '2', '3', '4'];
//        $storageTotalMass = [];
//        foreach ($storages as $storage) {
//            $index = $storage->id;
//            $storageTotalMass[$index] = $storage;
//            foreach ($bottleType as $keyType) {
//                $type = $keyType  < 20 ? 'bn' : 'bt';
//                $fullKey = $type . $keyType;
//                $totalKey = $fullKey . '_total';
//                $storageTotalMass[$index][$fullKey] = $storageTotalMass[$index][$fullKey] * $keyType;
////                $storageTotalMass[$index][$totalKey] = $storageTotalMass[$index][$fullKey] * $keyType;
//                $storageTotalMass[$index]['total'] += $storageTotalMass[$index][$totalKey];
//            }
////            $storageTotalMass[]
////            foreach ($storageTotalMass[$index] as $info){
////                echo 'trọng lượng bình 20: '. $storageTotalMass[$index]['bt20'].'<br>';
////                $storageTotalMass[$index]['bt20']=$storageTotalMass[$index]['bt20']*20;
////            }
////            dd($storageTotalMass[$index]);
//        }
//        dd($storageTotalMass);
//        return $storageTotalMass;
//    }

    public function getTotalMass()
    {
        $storages = Storage::all();
        $data = [ 'bt20' => 0, 'bt25' => 0, 'bt27' => 0, 'bt28' => 0, 'bn2' => 0, 'bn3' => 0, 'bn4' => 0];
        $totalMassInfo = [''];
        foreach ($storages as $storage){
            $key = $storage->id;
//            dump($key);
            $data['bt20'] = $storage->bt20 *20;
            $data['bt25'] = $storage->bt25 *25;
            $data['bt27'] = $storage->bt27 *27;
            $data['bt28'] = $storage->bt28 *28;
            $data['bn2'] = $storage->bn2 *2;
            $data['bn3'] = $storage->bn3 *3;
            $data['bn4'] = $storage->bn4 *4;
            $totalMassInfo[$key] = array_sum($data);
//            dump($totalMassInfo[$key]);
        }
//        $totalMass = array_sum($data);
//        dump('Tổng khối: '.$totalMass);
        return $totalMassInfo;
//        $bottleType = ['20', '25', '27', '28', '2', '3', '4'];
//        $storageTotalMass = [];
//        foreach ($storages as $storage) {
//            $index = $storage->id;
//            $storageTotalMass[$index] = $storage;
//            foreach ($bottleType as $keyType) {
//                $type = $keyType  < 20 ? 'bn' : 'bt';
//                $fullKey = $type . $keyType;
//                $totalKey = $fullKey . '_total';
//                $storageTotalMass[$index][$fullKey] = $storageTotalMass[$index][$fullKey] * $keyType;
////                $storageTotalMass[$index][$totalKey] = $storageTotalMass[$index][$fullKey] * $keyType;
//                $storageTotalMass[$index]['total'] += $storageTotalMass[$index][$totalKey];
//            }
//            $storageTotalMass[]
//            foreach ($storageTotalMass[$index] as $info){
//                echo 'trọng lượng bình 20: '. $storageTotalMass[$index]['bt20'].'<br>';
//                $storageTotalMass[$index]['bt20']=$storageTotalMass[$index]['bt20']*20;
//            }
//            dd($storageTotalMass[$index]);
//        }
//        return $storageTotalMass;
    }

    public function getTotalShell()
    {
        $storages = Storage::all();
        $data = [ 'bt20' => 0, 'bt25' => 0, 'bt27' => 0, 'bt28' => 0, 'bn2' => 0, 'bn3' => 0, 'bn4' => 0];
//        $totalShellInfo = [''];
        foreach ($storages as $storage) {
            $key = $storage->id;
            $data['bt20'] = $storage->bt20;
            $data['bt25'] = $storage->bt25;
            $data['bt27'] = $storage->bt27;
            $data['bt28'] = $storage->bt28;
            $data['bn2'] = $storage->bn2;
            $data['bn3'] = $storage->bn3;
            $data['bn4'] = $storage->bn4;
            $totalShellInfo[$key] = array_sum($data);
//            dd($data);
        }
//        dd($totalShellInfo);
//            dump($totalShellInfo[$key]);
            return $totalShellInfo;
    }
}
