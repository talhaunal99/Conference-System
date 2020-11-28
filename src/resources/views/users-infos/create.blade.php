@extends('layouts.app', ['header' => 'Create a new conference', 'slot' => ''])

@section('content')
    <div class="flex justify-center">
        <div class="w-5/12 bg-gradient-to-r from-teal-400 to-blue-500 p-6 rounded-lg">
            <form action="{{ route('conference_create') }}" method="post">
                @csrf

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="ShortName">Salutation</label>
                    <x-jet-input class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="Salutation" placeholder="Salutation">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="Name">İsim</label>
                    <x-jet-input class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="Name" placeholder="İsim">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="Surname">Soyisim</label>
                    <x-jet-input class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="Surname" placeholder="Soyisim">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="second_e_mail">İkinci e-mail</label>
                    <x-jet-input class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="second_e_mail" placeholder="İkinci e-mail">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="Telefon">Telefon</label>
                    <x-jet-input class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="Telefon" placeholder="Telefon">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="Fax">Fax</label>
                    <x-jet-input class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="Fax" placeholder="Fax">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="URL">URL</label>
                    <x-jet-input class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="URL" placeholder="URL">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="Address">Address</label>
                    <x-jet-input class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="Address" placeholder="Address">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="Country">Ülke</label>
                    <x-jet-input class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="Country" placeholder="Ülke">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="City">Şehir</label>
                    <x-jet-input class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="City" placeholder="Şehir">
                    </x-jet-input>
                </div>

                <div>
                    <x-jet-button type="submit" class="bg-red-500 text-white px-4 py-2 rounded font-medium">Create</x-jet-button>
                </div>
            </form>
        </div>
    </div>

@endsection
