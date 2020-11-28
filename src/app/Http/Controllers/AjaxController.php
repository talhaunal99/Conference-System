<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\CountryCity;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function getCountryCity(Request $request)
    {
        $countryName = $request['country'];
        $countryCode = Country::select('CountryCode')->where('CountryName', $countryName)->get()[0]['CountryCode'];

        $cities = CountryCity::select('CityName')->where('CountryCode', $countryCode)->get()->toArray();
        return response()->json(['success'=>$cities]);
    }
}
