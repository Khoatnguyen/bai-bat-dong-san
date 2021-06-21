<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Ward;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function getDistrict(Request $request){
        $provinceId = $request->province_id;

        $districts = District::where('province_id',$provinceId)->get();
        //đổi dữ liệu bằng json vì bên ajax sd jon
        return response()->json($districts);
        // json là 1 kiểu dữ liệu
    }

    public function getWard(Request $request){
        $districtId= $request->district_id;

        $wards = Ward::where('district_id',$districtId)->get();

        return response()->json($wards);
    }
}
