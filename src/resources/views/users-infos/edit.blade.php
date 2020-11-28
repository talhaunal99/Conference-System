@extends('layouts.app', ['header' => 'Create a new conference', 'slot' => ''])

@section('content')
    <form action="{{ route('users.edit') }}" method="post" >
        @csrf
        @method('PUT')
        <div class="flex justify-center">
            <div class="w-5/12 bg-gradient-to-r from-teal-400 to-blue-500 p-6 rounded-lg">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="Name">Salutation</label>
                    <x-jet-input value="{{ $userInfo->Salutation }}" class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="Salutation" placeholder="Salutation">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="Name">İsim</label>
                    <x-jet-input value="{{ $userInfo->Name }}" class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="Name" placeholder="İsim">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="LastName">Soyisim</label>
                    <x-jet-input value="{{ $userInfo->LastName }}" class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="LastName" placeholder="Soyisim">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="Affiliation">Kurum</label>
                    <x-jet-input value="{{ $userInfo->Affiliation }}" class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="Affiliation" placeholder="Kurum">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="SecondaryEmail">İkinci e-mail</label>
                    <x-jet-input value="{{ $userInfo->SecondaryEmail }}" class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="SecondaryEmail" placeholder="İkinci e-mail">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="Phone">Telefon</label>
                    <x-jet-input value="{{ $userInfo->Phone }}" class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="Phone" placeholder="Telefon">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="Fax">Fax</label>
                    <x-jet-input value="{{ $userInfo->Fax }}" class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="Fax" placeholder="Fax">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="URL">URL</label>
                    <x-jet-input value="{{ $userInfo->URL }}" class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="URL" placeholder="URL">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="Address">Adres</label>
                    <x-jet-input value="{{ $userInfo->Address }}" class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="Address" placeholder="Adres">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="country">Ülke</label>
                    <select class="border w-full p-1" name="country" id="country">
                        <option>{{ $userCountry->CountryName }}</option>
                        @foreach ($countries as $country)
                            <option>{{ $country->CountryName }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="city">Şehir</label>
                    <select class="border w-full p-1" name="city" id="city">
                        <option>{{ $userCity->CityName }}</option>
                    </select>
                </div>

                <div>
                    <x-jet-button type="submit" class="bg-red-500 text-white px-4 py-2 rounded font-medium">Düzenle</x-jet-button>
                </div>
            </div>
        </div>
    </form>

    <script>
        $('#country').on('change', e => {
            var country = $( "#country" ).val();
            $('#city')
                .empty()
            $.ajax({
                url: "/ajax-request",
                type: "get", //send it through get method
                data: {
                    country:country
                },
                success: function(response) {
                    var cities = response['success'];
                    cities.forEach(function(city) {

                        $('#city').append($('<option>', {
                            value: city['CityName'],
                            text: city['CityName']
                        }));
                    });
                },
                error: function(xhr) {
                    //Do Something to handle error
                }
            });
        })
    </script>
@endsection
