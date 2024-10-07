@extends('layouts.admin.app')

@section('title', 'Activities')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Activities</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Activities</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">{{ \Carbon\Carbon::now()->format('d F Y') }}</h2>
                <div class="row">
                    <div class="col-12">
                        <div class="activities">
                            @foreach ($loginLogs as $log)
                                <div class="activity">
                                    <div class="activity-icon bg-primary shadow-primary text-white">

                                        <i class="fas fa-unlock"></i>

                                    </div>
                                    <div class="activity-detail">
                                        <div class="mb-2">
                                            <span class="text-job">{{ $log->formatted_created_at }}</span>
                                            <span class="bullet"></span><a class="text-job">{{ $log->activity_name }}</a>
                                            {{-- <p class="text-job">{{ $log->activity_name }}</p> --}}
                                        </div>
                                        <p>{{ $log->activity_name }} to the system with {{ $log->user->email }} email and IP
                                            Address
                                            {{ $log->ip_address }}.</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
