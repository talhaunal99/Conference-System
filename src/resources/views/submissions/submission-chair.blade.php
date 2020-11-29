@extends('layouts.app', ['header' => 'Create a new conference', 'slot' => ''])

@section('content')
    <table id="submission-table" class="relative w-full border table-auto">
        <thead>
        <tr>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Submission Id</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Conference Name</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Title</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Abstract</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Authors</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Corresponding Author</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Submission Date</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Keywords</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Submitted By</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">PDF Path</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Type</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Status</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Active</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Revised version of</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Edit</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Delete</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Inactivate</th>
            <th class="sticky top-0 px-6 py-3 text-red-900 bg-red-300">Recover</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($submissions as $submission)
            <tr>
                <td class="px-6 py-4 text-center">{{ $submission->submission_id }}</td>
                <td class="px-6 py-4 text-center">{{ $submission->ConfID }}</td>
                <td class="px-6 py-4 text-center">{{ $submission->title }}</td>
                <td class="px-6 py-4 text-center">{{ $submission->abstract }}</td>
                <td class="px-6 py-4 text-center">
                    @foreach ($submission->authors as $author)
                        {{ $author['name'] }}, <br>
                    @endforeach
                </td>
                <td class="px-6 py-4 text-center">{{ $submission->corresponding_author }}</td>
                <td class="px-6 py-4 text-center">{{ $submission->submission_date_time }}</td>
                <td class="px-6 py-4 text-center">
                    @foreach ($submission->keywords as $keyword)
                        {{ $keyword }}, <br>
                    @endforeach
                </td>
                <td class="px-6 py-4 text-center">{{ $submission->submitted_by }}</td>
                <td class="px-6 py-4 text-center">
                    {{ $submission->pdf_path }}
                    <embed src="{{ asset('storage/uploads/1606565804_BIL372_Arasinav1_AlperKaanYILDIZ_141101027.pdf') }}" width="800" height="500" alt="pdf" />


                </td>
                <td class="px-6 py-4 text-center">{{ $submission->type }}</td>
                <td class="px-6 py-4 text-center">{{ $submission->status }}</td>
                <td class="px-6 py-4 text-center">{{ $submission->active }}</td>
                <td class="px-6 py-4 text-center">{{ $submission->prev_submission_id }}</td>
                <td>
                    <form action="{{ route('my_submissions.edit', $submission) }}" method="get">
                        @csrf
                        @method('GET')
                        <button type="submit" class="inline items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-green-500">Edit</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('my_submissions.delete', $submission) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-700">Delete</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('my_submissions.inactivate', $submission) }}" method="post">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="inline items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-700">Inactivate</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('my_submissions.recover', $submission) }}" method="post">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="inline items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-700">Recover</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <script>
        $(document).ready( function () {
            $('#conference-table').DataTable();
        } );
    </script
@endsection
