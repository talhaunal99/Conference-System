@extends('layouts.app', ['header' => 'Create a new conference', 'slot' => ''])

@section('content')
    <form action="{{ route('conference.edit', $conference) }}" method="post" >
        @csrf
        @method('PUT')
        <div class="flex justify-center">
            <div class="w-5/12 bg-gradient-to-r from-teal-400 to-blue-500 p-6 rounded-lg">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-1" for="Name">Conference Name</label>
                        <x-jet-input value="{{ $conference->Name }}" class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="Name" placeholder="Konferans İsim">
                        </x-jet-input>
                    </div>

                    @error('Name')
                    <div class="text-pink-900	 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-1" for="ShortName">Conference Short Name</label>
                        <x-jet-input value="{{ $conference->ShortName }}" class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="ShortName" placeholder="Konferans Kısa İsim">
                        </x-jet-input>
                    </div>

                    @error('ShortName')
                    <div class="text-pink-900	 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-1" for="Year">Conference Year</label>
                        <x-jet-input value="{{ $conference->Year }}" class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="number" name="Year" placeholder="2020">
                        </x-jet-input>
                    </div>

                    @error('Year')
                    <div class="text-pink-900	 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-1" for="WebSite">Conference website</label>
                        <x-jet-input value="{{ $conference->WebSite }}" class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="WebSite" placeholder="www.konferans1.com">
                        </x-jet-input>
                    </div>

                    @error('WebSite')
                    <div class="text-pink-900	 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-1" for="Tags">Tags (Max: 5)</label>
                        <x-jet-input value="{{ $tags }}" type="text" name="Tags" class="w-3/6 border-4 border-green-500 placeholder-gray-500 focus:placeholder-gray-300" placeholder="tag1, tag2, tag3, tag4, tag5">
                        </x-jet-input>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-1" for="CreationDateTime">Choose conference creation time</label>
                        <x-jet-input value="{{ date('Y-m-d\TH:i', strtotime($conference->CreationDateTime)) }}" type="datetime-local" name="CreationDateTime" class="w-3/6 border-4 border-indigo-600">
                        </x-jet-input>
                    </div>

                    @error('CreationDateTime')
                    <div class="text-pink-900	 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-1" for="StartDate">Choose conference start date</label>
                        <x-jet-input value="{{ $conference->StartDate}}" type="date" name="StartDate" class="w-1/3 border-4 border-indigo-600">
                        </x-jet-input>
                    </div>

                    @error('StartDate')
                    <div class="text-pink-900	 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-1" for="EndDate">Choose conference end date</label>
                        <x-jet-input value="{{ $conference->EndDate}}" type="date" name="EndDate" class="w-1/3 border-4 border-indigo-600">
                        </x-jet-input>
                    </div>

                    @error('EndDate')
                    <div class="text-pink-900	 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-1" for="Submission_Deadline">Choose submission deadline</label>
                        <x-jet-input value="{{ $conference->Submission_Deadline}}" type="date" name="Submission_Deadline" class="w-1/3 border-4 border-indigo-600">
                        </x-jet-input>
                    </div>

                    @error('Submission_Deadline')
                    <div class="text-pink-900	 mt-2 text-sm">
                        {{ $message }}
                    </div>
                    @enderror

                    <div>
                        <x-jet-button type="submit" class="bg-red-500 text-white px-4 py-2 rounded font-medium">Create</x-jet-button>
                    </div>
            </div>
        </div>
    </form>
@endsection
