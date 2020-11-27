@extends('layouts.app', ['header' => 'Create a new conference', 'slot' => ''])

@section('content')
    <x-jet-nav-link href="{{ route('conference_create') }}" :active="request()->routeIs('dashboard')">
        {{ __('Create a new conference') }}
    </x-jet-nav-link>

    <table class="relative w-full border table-auto">
        <tr>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Creation Date</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Name</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Short Name</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Tags</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Year</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Start Date</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">End Date</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Submission Deadline</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Website</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Approval</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Actions</th>
            @if (Auth::user()->role == 'Admin')
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Activation</th>
            @endif
        </tr>
        @foreach ($conferencesAndTags as $conferencesAndTag)
            <tr>
                <td class="px-6 py-4 text-center">{{ $conferencesAndTag[0]->CreationDateTime }}</td>
                <td class="px-6 py-4 text-center">{{ $conferencesAndTag[0]->Name }}</td>
                <td class="px-6 py-4 text-center">{{ $conferencesAndTag[0]->ShortName }}</td>
                <td class="px-6 py-4 text-center">{{ $conferencesAndTag[1] }}</td>
                <td class="px-6 py-4 text-center">{{ $conferencesAndTag[0]->Year }}</td>
                <td class="px-6 py-4 text-center">{{ $conferencesAndTag[0]->StartDate }}</td>
                <td class="px-6 py-4 text-center">{{ $conferencesAndTag[0]->EndDate }}</td>
                <td class="px-6 py-4 text-center">{{ $conferencesAndTag[0]->Submission_Deadline }}</td>
                <td class="px-6 py-4 text-center">{{ $conferencesAndTag[0]->WebSite }}</td>
                <td class="px-6 py-4 text-center">
                    @if ($conferencesAndTag[0]->approved == 0)
                        Not Approved
                    @endif
                    @if ($conferencesAndTag[0]->approved == 1)
                        Approved
                    @endif
                </td>
                <td>
                    <form action="{{ route('conference.edit', $conferencesAndTag[0]) }}" method="get">
                        @csrf
                        @method('GET')
                        @if ($conferencesAndTag[0]->CreatorUser != \Illuminate\Support\Facades\Auth::user()->id)
                        <button type="submit" class="inline items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-400">Edit</button>
                        @endif
                    </form>
                    <form action="{{ route('conference.delete', $conferencesAndTag[0]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        @if ($conferencesAndTag[0]->CreatorUser != \Illuminate\Support\Facades\Auth::user()->id)
                        <button type="submit" class="inline items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-700">Delete</button>
                        @endif
                    </form>
                </td>
                @if (Auth::user()->role == 'Admin')
                <td>
                    <form action="{{ route('conference.changeactivation', $conferencesAndTag[0]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="inline items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-700">
                            @if ($conferencesAndTag[0]->approved == 0)
                                Activate
                            @endif
                            @if ($conferencesAndTag[0]->approved == 1)
                                Deactivate
                            @endif
                        </button>
                    </form>
                </td>
                @endif
            </tr>
        @endforeach
    </table>
@endsection
