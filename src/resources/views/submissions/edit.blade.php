@extends('layouts.app', ['header' => 'Create a new submission', 'slot' => ''])

@section('content')
    <div class="flex justify-center">
        <div class="w-5/12 bg-gradient-to-r from-teal-400 to-blue-500 p-6 rounded-lg">
            <form action="{{ route('my_submissions.edit', $submission) }}" method="post">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="title">Title</label>
                    <x-jet-input value="{{ $submission->title }}" class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="title" placeholder="Title">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="abstract">Abstract</label>
                    <x-jet-input value="{{ $submission->abstract }}" class="w-3/6 border-4 border-pink-800 placeholder-gray-500 focus:placeholder-gray-300" type="text" name="abstract" placeholder="Abstract">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="keywords">Enter comma seperated keywords (Max: 5)</label>
                    <x-jet-input value="{{ $keywords }}" type="text" name="keywords" class="w-3/6 border-4 border-green-500 placeholder-gray-500 focus:placeholder-gray-300" placeholder="keyword1, keyword2, keyword3, keyword4, keyword5">
                    </x-jet-input>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="authors">Authors (Current authors are already highlighted)</label>
                    <select name="author[]" multiple class="form-control">
                        @foreach ($submission->authors as $author)
                            <option selected>{{ $author['name'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="submitted_by">Submitted By (Selected by default)</label>
                    <select class="border w-full p-1" name="submitted_by">
                        <option disabled>Select Submitter</option>
                        @foreach ($users as $user)
                            @if ($user->Name == $submission->submitted_by)
                                <option selected>{{ $user->Name }}</option>
                            @else
                                <option>{{ $user->Name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="submitted_by">Corresponding Author (Selected by default)</label>
                    <select class="border w-full p-1" name="corresponding_author">
                        <option disabled>Select Corresponding Author</option>
                        @foreach ($users as $user)
                            @if ($user->Name == $submission->corresponding_author)
                                <option selected>{{ $user->Name }}</option>
                            @else
                                <option>{{ $user->Name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="type">Type</label>
                    <select class="border w-full p-1" name="type">
                        <option disabled>Select Type</option>
                        @if ($submission->type == 'article')
                            <option selected>article</option>
                        @else
                            <option>article</option>
                        @endif
                        @if ($submission->type == 'abstract')
                            <option selected>abstract</option>
                        @else
                            <option>abstract</option>
                        @endif
                        @if ($submission->type == 'poster')
                            <option selected>poster</option>
                        @else
                            <option>poster</option>
                        @endif
                        @if ($submission->type == 'short paper')
                            <option selected>short paper</option>
                        @else
                            <option>short paper</option>
                        @endif
                        @if ($submission->type == '*')
                            <option selected>*</option>
                        @else
                            <option>*</option>
                        @endif
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-1" for="active">Active</label>
                    <select class="border w-full p-1" name="active">
                        <option disabled>Active</option>
                        @if ($submission->active == 'Yes')
                            <option selected>Yes</option>
                        @else
                            <option>Yes</option>
                        @endif
                        @if ($submission->active == 'No')
                            <option selected>No</option>
                        @else
                            <option>No</option>
                        @endif
                    </select>
                </div>


                <div>
                    <x-jet-button type="submit" class="bg-red-500 text-white px-4 py-2 rounded font-medium">Revize et</x-jet-button>
                </div>
            </form>
        </div>
    </div>

@endsection
