@extends('layouts.app') 

@section('content')
<div class="dashboard-container">
    <h2>Contact Submissions</h2>
    <table>
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            @forelse($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->message }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No contact messages yet.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4 d-flex justify-content-center">
        {{ $contacts->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection

@push('styles')
    <style>
        .dashboard-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #f0f0f0;
        }
    </style>
@endpush
