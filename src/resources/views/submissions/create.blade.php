@extends('layouts.app', ['header' => 'Create a new submission', 'slot' => ''])

@section('content')
    <div class="flex justify-center">
        <div class="w-5/12 bg-gradient-to-r from-teal-400 to-blue-500 p-6 rounded-lg">
            <form action="{{ route('submission_create') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="prev_submission_id">Previous Submission ID</label>
                    <x-jet-input class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="prev_submission_id" placeholder="Previous Submission ID">
                    </x-jet-input>
                </div>

                @error('prev_submission_id')
                <div class="text-pink-900	 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="submission_id">Submission ID</label>
                    <x-jet-input class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="submission_id" placeholder="Submission ID">
                    </x-jet-input>
                </div>

                @error('submission_id')
                <div class="text-pink-900	 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

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

                <label class="block text-gray-700 text-sm font-bold mb-1" for="author_table">Authors</label>
                <table id="author_table" border="1">
                    <input type="text" class="form-control" id="authors_authenticationID" placeholder="Authentication ID">
                    <input type="text" class="form-control" id="authors_name" placeholder="Name">
                    <input type="text" class="form-control" id="authors_email" placeholder="Email">
                    <input type="text" class="form-control" id="authors_affil" placeholder="Affiliation">
                    <input type="text" class="form-control" id="authors_country" placeholder="Country">

                </table>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="corresponding_author">Corresponding Author</label>
                    <x-jet-input class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="corresponding_author" placeholder="Corresponding Author">
                    </x-jet-input>
                </div>

                @error('corresponding_author')
                <div class="text-pink-900	 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

                <div>
                    <x-jet-button type="submit" class="bg-red-500 text-white px-4 py-2 rounded font-medium">Create</x-jet-button>
                </div>
            </form>
        </div>
    </div>

@endsection
