@extends('layouts.app', ['header' => 'Create a new conference'])

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-yellow-400 p-6 rounded-lg">
            <form action="{{ route('conference') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="CreationDateTime">Choose conference creation time</label>
                    <input type="datetime-local" name="CreationDateTime" class="js-datepicker border-4 border-indigo-600">
                </div>

                @error('CreationDateTime')
                <div class="text-red-600 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

                <div class="mb-4">
                    <label for="Name">Conference Name</label>
                    <input type="text" name="Name" class="border-4  p-4 rounded-lg">
                </div>

                @error('Name')
                <div class="text-red-600 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

                <div class="mb-4">
                    <label for="ShortName">Conference Short Name</label>
                    <input type="text" name="ShortName">
                </div>

                @error('ShortName')
                <div class="text-red-600 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

                <div class="mb-4">
                    <label for="Year">Conference Year</label>
                    <input type="number" name="Year">
                </div>

                @error('Year')
                <div class="text-red-600 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

                <div class="mb-4">
                    <label for="StartDate">Choose conference start date</label>
                    <input type="date" name="StartDate" class="js-datepicker border-4 border-indigo-600">
                </div>

                @error('StartDate')
                <div class="text-red-600 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

                <div class="mb-4">
                    <label for="EndDate">Choose conference end date</label>
                    <input type="date" name="EndDate" class="js-datepicker border-4 border-indigo-600">
                </div>

                @error('EndDate')
                <div class="text-red-600 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

                <div class="mb-4">
                    <label for="Submission_Deadline">Choose submission deadline</label>
                    <input type="date" name="Submission_Deadline" class="js-datepicker border-4 border-indigo-600">
                </div>

                @error('Submission_Deadline')
                <div class="text-red-600 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

                <div class="mb-4">
                    <label for="WebSite">Conference website</label>
                    <input type="text" name="WebSite">
                </div>

                @error('WebSite')
                <div class="text-red-600 mt-2 text-sm">
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
