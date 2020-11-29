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
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Year</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Start Date</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">End Date</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Submission Deadline</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Website</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Approval</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Submissions</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Actions</th>
            @if (Auth::user()->role == 'Admin')
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Activation</th>
            @endif
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Assign Role</th>
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
                <td class="px-6 py-4 text-center">
                    @if ($conference->approved == 0)
                        Not Approved
                    @endif
                    @if ($conference->approved == 1)
                        Approved
                    @endif
                </td>
                <td>
                    <form action="{{ route('submissions.chair', $conference) }}" method="get">
                        @csrf
                        @method('GET')
                        <button type="submit" class="inline items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-400">View</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('conference.edit', $conference) }}" method="get">
                        @csrf
                        @method('GET')
                        <button type="submit" class="inline items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-400">Edit</button>
                    </form>
                    <form action="{{ route('conference.delete', $conference) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-700">Delete</button>
                    </form>
                </td>
                @if (Auth::user()->role == 'Admin')
                <td>
                    <form action="{{ route('conference.changeactivation', $conference) }}" method="post">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="inline items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-700">
                            @if ($conference->approved == 0)
                                Activate
                            @endif
                            @if ($conference->approved == 1)
                                Deactivate
                            @endif
                        </button>
                    </form>
                </td>
                @endif
                <!--
                <td>
                    <select class="block mt-1 w-full" name="user">
                        <option>Select User</option>
                        @foreach ($users as $user)
                            <option>{{ $user->username }}</option>
                        @endforeach
                    </select>
                    <select class="block mt-1 w-full" name="role">
                        <option>Select Role</option>
                        @foreach ($roles as $role)
                            <option>{{ $role->Role }}</option>
                        @endforeach
                    </select>
                    <button type="submit" name="assign_button" class="inline items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-700">Assign</button>
                </td>
                -->
                <td>
                    <form action="/assign" method="POST" class="w-64 mx-auto" x-data="assignForm()">
                        @csrf
                        <input name="confID" type="hidden" value={{ $conference->ConfID }} x-model="formData.confID">
                        <div class="mb-4">
                            <label class="block mb-2">Role:</label>
                            <select class="border w-full p-1" name="role" x-model="formData.role">
                                <option>Select Role</option>
                                @foreach ($roles as $role)
                                    <option>{{ $role->Role }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block mb-2">User:</label>
                            <select class="border w-full p-1" name="user" x-model="formData.user">
                                <option>Select User</option>
                                @foreach ($users as $user)
                                    <option>{{ $user->username }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="bg-gray-700 hover:bg-gray-800 text-white w-full p-2">Assign</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </table>

    <script>
        @csrf
        function assignForm() {
            return {
                formData: {
                    role: '',
                    user: '',
                    confID: '',
                    message: ''
                },
                message: '',

                submitData() {
                    this.message = ''

                    fetch('/assign', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify(this.formData)
                    })
                        .then(() => {
                            this.message = 'Rol atandı.'
                        })
                        .catch(() => {
                            this.message = 'Hata oluştu.'
                        })
                }
            }
        }
    </script>
@endsection
