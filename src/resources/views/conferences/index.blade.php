@extends('layouts.app', ['header' => 'Create a new conference', 'slot' => ''])

@section('content')
    <x-jet-nav-link href="{{ route('conference_create') }}" :active="request()->routeIs('dashboard')">
        {{ __('Create a new conference') }}
    </x-jet-nav-link>

    @if ($conferences->count())
        <table class="relative w-full border table-auto">
            <tr>
                <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Creation Date</th>
                <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Name</th>
                <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Short Name</th>
                <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Year</th>
                <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Start Date</th>
                <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">End Date</th>
                <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Submission Deadline</th>
                <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Website</th>
            </tr>
            @foreach ($conferences as $conference)
                <tr>
                    <td class="px-6 py-4 text-center">{{ $conference->CreationDateTime }}</td>
                    <td class="px-6 py-4 text-center">{{ $conference->Name }}</td>
                    <td class="px-6 py-4 text-center">{{ $conference->ShortName }}</td>
                    <td class="px-6 py-4 text-center">{{ $conference->Year }}</td>
                    <td class="px-6 py-4 text-center">{{ $conference->StartDate }}</td>
                    <td class="px-6 py-4 text-center">{{ $conference->EndDate }}</td>
                    <td class="px-6 py-4 text-center">{{ $conference->Submission_Deadline }}</td>
                    <td class="px-6 py-4 text-center">{{ $conference->WebSite }}</td>
                </tr>
            @endforeach
        </table>
    @else
        There are no conferences yet.
    @endif
@endsection
