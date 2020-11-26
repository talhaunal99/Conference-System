@extends('layouts.app', ['header' => 'Create a new conference', 'slot' => ''])

@section('content')
    <table class="relative w-full border table-auto">
        <tr>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Username</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Email</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Role</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Approval</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Activation</th>
        </tr>
        @foreach ($users as $user)
            @if ($user != Auth::user())
            <tr>
                <td class="px-6 py-4 text-center">{{ $user->username }}</td>
                <td class="px-6 py-4 text-center">{{ $user->email }}</td>
                <td class="px-6 py-4 text-center">{{ $user->role }}</td>
                @if($user->approved == 0)
                <td class="px-6 py-4 text-center">Not Approved</td>
                @endif
                @if($user->approved == 1)
                    <td class="px-6 py-4 text-center">Approved</td>
                @endif
                @if($user->approved == 0)
                <td>
                    <form action="{{ route('user.edit', $user) }}" method="post">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="inline items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-400">Activate</button>
                    </form>
                </td>
                @endif
                @if($user->approved == 1)
                    <td>
                        <form action="{{ route('user.edit', $user) }}" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="inline items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-400">Deactivate</button>
                        </form>
                    </td>
                @endif
            </tr>
            @endif
        @endforeach
    </table>
@endsection
