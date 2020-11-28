<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\CountryCity;
use App\Models\UsersInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersInfoController extends Controller
{
    public function index()
    {
        $countries = Country::get();
        return view('users-infos.create', [
            'countries' => $countries
        ]);
    }

    public function store(Request $request){
        $countryCode = Country::select('CountryCode')
            ->where('CountryName', $request->country)
            ->get()[0]->CountryCode;

        $cityId = CountryCity::select('CityId')
            ->where('CityName', $request->city)
            ->get()[0]->CityId;

        $usersInfo = new UsersInfo();
        $usersInfo->Salutation = $request->Salutation;
        $usersInfo->Name = $request->Name;
        $usersInfo->LastName = $request->Surname;
        $usersInfo->Affiliation = $request->Affiliation;
        $usersInfo->SecondaryEmail = $request->second_e_mail;
        $usersInfo->Phone = $request->Telefon;
        $usersInfo->Fax = $request->Fax;
        $usersInfo->URL = $request->URL;
        $usersInfo->Address = $request->Address;
        $usersInfo->CountryCode = $countryCode;
        $usersInfo->CityId = $cityId;
        $usersInfo->AuthenticationID = Auth::user()->id;

        $usersInfo->save();
        return redirect('dashboard');
    }

    public function edit(){
        $userInfo = UsersInfo::where('AuthenticationID', Auth::user()->id)->get()[0];
        $userCountry = $userInfo->CountryCode;
        $usersCountryName = Country::select('CountryName')->where('CountryCode', $userCountry)->get()[0];
        $usersCity = $userInfo->CityId;
        $countries = Country::select('CountryName')->where('CountryCode', '!=', $userCountry)->get();
        $cityName = CountryCity::select('CityName')->where('CityId', $usersCity)->get()[0];

        return view('users-infos.edit', [
            'userInfo' => $userInfo,
            'countries' => $countries,
            'userCountry' => $usersCountryName,
            'userCity' => $cityName
        ]);
    }

    public function edit2(Request $request){
        $usersInfo = UsersInfo::where('AuthenticationID', Auth::user()->id)->get()[0];
        $countryCode = Country::select('CountryCode')->where('CountryName', $request['country'])->get()[0]->CountryCode;
        $cityId = CountryCity::select('CityId')->where('CityName', $request['city'])->get()[0]->CityId;

        $usersInfo->Salutation = $request['Salutation'];
        $usersInfo->Name = $request['Name'];
        $usersInfo->LastName = $request['LastName'];
        $usersInfo->Affiliation = $request['Affiliation'];
        $usersInfo->SecondaryEmail = $request['SecondaryEmail'];
        $usersInfo->Phone = $request['Phone'];
        $usersInfo->Fax = $request['Fax'];
        $usersInfo->URL = $request['URL'];
        $usersInfo->Address = $request['Address'];
        $usersInfo->CountryCode = $countryCode;
        $usersInfo->CityId = $cityId;

        $usersInfo->save();

        return redirect('dashboard');
    }
}
