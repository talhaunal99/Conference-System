@extends('layouts.app', ['header' => 'Create a new submission', 'slot' => ''])

@section('content')
    <div class="flex justify-center">
        <div class="w-5/12 bg-gradient-to-r from-teal-400 to-blue-500 p-6 rounded-lg">
            <form action="{{ route('submission_create', $conference) }}" method="post">
                @csrf
{{--                <div class="mb-4">--}}
{{--                    <label class="block text-gray-700 text-sm font-bold mb-1" for="prev_submission_id">Previous Submission ID</label>--}}
{{--                    <x-jet-input class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="prev_submission_id" placeholder="Previous Submission ID">--}}
{{--                    </x-jet-input>--}}
{{--                </div>--}}

{{--                @error('prev_submission_id')--}}
{{--                <div class="text-pink-900	 mt-2 text-sm">--}}
{{--                    {{ $message }}--}}
{{--                </div>--}}
{{--                @enderror--}}

{{--                <div class="mb-4">--}}
{{--                    <label class="block text-gray-700 text-sm font-bold mb-1" for="submission_id">Submission ID</label>--}}
{{--                    <x-jet-input class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="submission_id" placeholder="Submission ID">--}}
{{--                    </x-jet-input>--}}
{{--                </div>--}}

{{--                @error('submission_id')--}}
{{--                <div class="text-pink-900	 mt-2 text-sm">--}}
{{--                    {{ $message }}--}}
{{--                </div>--}}
{{--                @enderror--}}

                <input type="hidden" id="confID" name="confID" value="{{ $conference->ConfID }}">

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="title">Title</label>
                    <x-jet-input class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="title" placeholder="Title">
                    </x-jet-input>
                </div>

                @error('title')
                <div class="text-pink-900	 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="abstract">Abstract</label>
                    <x-jet-input class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="abstract" placeholder="Abstract">
                    </x-jet-input>
                </div>

                @error('abstract')
                <div class="text-pink-900	 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="keywords">Enter comma seperated keywords (Max: 5)</label>
                    <x-jet-input type="text" name="keywords" class="w-3/6 border-4 border-green-500 placeholder-gray-500 focus:placeholder-gray-300" placeholder="keyword1, keyword2, keyword3, keyword4, keyword5">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="authors">Authors (Select with CTRL + Click)</label>
                    <select name="author[]" multiple class="form-control">
                        @foreach ($users as $user)
                            <option>{{ $user->Name }}</option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="submitted_by">Submitted By</label>
                    <select class="border w-full p-1" name="submitted_by">
                        <option disabled>Select Submitter</option>
                        @foreach ($users as $user)
                            <option>{{ $user->Name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="submitted_by">Corresponding Author</label>
                    <select class="border w-full p-1" name="corresponding_author">
                        <option disabled>Select Corresponding Author</option>
                        @foreach ($users as $user)
                            <option>{{ $user->Name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="type">Type</label>
                    <select class="border w-full p-1" name="type">
                        <option disabled>Select Type</option>
                        <option>article</option>
                        <option>abstract</option>
                        <option>poster</option>
                        <option>short paper</option>
                        <option>*</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="status">Status</label>
                    <select class="border w-full p-1" name="status">
                        <option>Status</option>
                        <option>Original</option>
                        <option>Modified</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="active">Active</label>
                    <select class="border w-full p-1" name="active">
                        <option>Active</option>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>

                <div>
                    <x-jet-button type="submit" class="bg-red-500 text-white px-4 py-2 rounded font-medium">Create</x-jet-button>
                </div>
            </form>
        </div>
    </div>

@endsection
