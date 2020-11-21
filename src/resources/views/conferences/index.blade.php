@extends('layouts.app', ['header' => 'Create a new conference', 'slot' => ''])

@section('content')
    <div class="flex justify-center">
        <div class="w-5/12 bg-gradient-to-r from-teal-400 to-blue-500 p-6 rounded-lg">
            <form action="{{ route('conference') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="Name">Conference Name</label>
                    <input class="border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="Name" placeholder="Konferans İsim">
                </div>

                @error('Name')
                <div class="text-pink-900	 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="ShortName">Conference Short Name</label>
                    <input class="border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="ShortName" placeholder="Konferans Kısa İsim">
                </div>

                @error('ShortName')
                <div class="text-pink-900	 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="Year">Conference Year</label>
                    <input class="border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="number" name="Year" placeholder="2020">
                </div>

                @error('Year')
                <div class="text-pink-900	 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="WebSite">Conference website</label>
                    <input class="border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="WebSite" placeholder="www.konferans1.com">
                </div>

                @error('WebSite')
                <div class="text-pink-900	 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="Tags">Enter comma seperated tags (Max: 5)</label>
                    <input type="text" name="Tags" class="border-4 border-green-500 placeholder-gray-500 focus:placeholder-gray-300" placeholder="tag1, tag2, tag3, tag4, tag5">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="CreationDateTime">Choose conference creation time</label>
                    <input type="datetime-local" name="CreationDateTime" class="border-4 border-indigo-600">
                </div>

                @error('CreationDateTime')
                <div class="text-pink-900	 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="StartDate">Choose conference start date</label>
                    <input type="date" name="StartDate" class="border-4 border-indigo-600">
                </div>

                @error('StartDate')
                <div class="text-pink-900	 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="EndDate">Choose conference end date</label>
                    <input type="date" name="EndDate" class="border-4 border-indigo-600">
                </div>

                @error('EndDate')
                <div class="text-pink-900	 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="Submission_Deadline">Choose submission deadline</label>
                    <input type="date" name="Submission_Deadline" class="border-4 border-indigo-600">
                </div>

                @error('Submission_Deadline')
                <div class="text-pink-900	 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium">Create</button>
                </div>
            </form>
        </div>
    </div>

@endsection
