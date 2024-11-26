@extends('layouts.admin.app')

@section('title', 'Messages')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Detail Messages</h1>
            </div>
        </section>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Contact From: {{ $contact->name }}</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name</th>
                            <td>{{ $contact->name }}</td>
                        </tr>
                        <tr>
                            <th>Company</th>
                            <td>{{ $contact->company }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $contact->email }}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{ $contact->phone }}</td>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <td>{{ $contact->subject ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>{{ $contact->message }}</td>
                        </tr>
                        <tr>
                            <th>Received At</th>
                            <td>{{ $contact->created_at->format('d M Y, H:i') }}</td>
                        </tr>
                    </table>
                    <br>
                </div>
                <div class="card-footer text-end">
                    <a href="{{ route('admin.contacts.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
