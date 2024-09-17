@extends('layouts.admin.app')

@section('title', 'General Dashboard')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total User</h4>
                            </div>
                            <div class="card-body">
                                {{ $data['jumlah_user'] }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="far fa-newspaper"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Posts</h4>
                            </div>
                            <div class="card-body">
                                {{ $data['jumlah_post'] }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="far fa-file"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Pages</h4>
                            </div>
                            <div class="card-body">
                                {{ $data['jumlah_page'] }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-circle"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Kunjungan Hari ini</h4>
                            </div>
                            <div class="card-body">
                                {{ $data['totalVisitor'] }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Statistik Kunjungan per Minggu</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="myChart" height="100"></canvas>
                            <div class="statistic-details mt-sm-4">
                                <div class="statistic-details-item">
                                    <div class="detail-value">{{ $data['todayVisits'] }}</div>
                                    <div class="detail-name">Kunjungan Hari ini</div>
                                </div>
                                <div class="statistic-details-item">
                                    <div class="detail-value">{{ $data['weekVisits'] }}</div>
                                    <div class="detail-name">Kunjungan Minggu ini</div>
                                </div>
                                <div class="statistic-details-item">
                                    <div class="detail-value">{{ $data['monthVisits'] }}</div>
                                    <div class="detail-name">Kunjungan Bulan ini</div>
                                </div>
                                <div class="statistic-details-item">
                                    <div class="detail-value">{{ $data['yearVisits'] }}</div>
                                    <div class="detail-name">Kunjungan Tahun ini</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Halaman/Post Sering di Kunjungi</h4>
                        </div>

                        <div class="card-body">

                            @foreach ($visitorsData as $visitor)
                                <div class="mb-4">
                                    <div class="text-small font-weight-bold text-muted float-right">{{ $visitor['total'] }}
                                    </div>
                                    <div class="font-weight-bold mb-1">{{ $visitor['title'] }}</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar"
                                            data-width="{{ $visitor['percentage'] }}%"
                                            aria-valuenow="{{ $visitor['percentage'] }}" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest Posts</h4>
                            <div class="card-header-action">
                                <a href="{{ route('posts.index') }}" class="btn btn-primary">View All</a>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table-striped mb-0 table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td style="width: 300px;">
                                                    {{ $post->title }}
                                                    <div class="table-links" style =" padding-bottom: 10px;">
                                                        Jenis Post: <strong>{{ $post->type->name }}</strong>
                                                        <div class="bullet"></div>
                                                        <a href="/{{ $post->slug }}" target="_blank">View</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="#" class="font-weight-600">
                                                        <img src="{{ asset('img/avatar/avatar-1.png') }}" alt="avatar"
                                                            width="20" class="rounded-circle mr-1">
                                                        <small>{{ $post->user_update->name }}</small>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ route('posts.edit', $post->id) }}"
                                                        class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                        title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Popular Browser</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="row">
                                    @foreach ($browserData as $data)
                                        @if ($data->browser != null)
                                            <div class="col text-center">
                                                @if ($data->browser == '"Edge"')
                                                    <div class="browser browser-internet-explorer"></div>
                                                @else
                                                    <div
                                                        class="browser browser-{{ strtolower(str_replace('"', '', $data->browser)) }}">
                                                    </div>
                                                @endif
                                                <div class="font-weight-bold mt-2">
                                                    {{ str_replace('"', '', $data->browser) }}</div>
                                                <div class="text-muted text-small">{{ $data->count }}</div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Popular Platform</h4>
                        </div>
                        <div class="card-body">
                            @foreach ($platformData as $data)
                                <div class="mb-4">
                                    <div class="text-small font-weight-bold text-muted float-right">
                                        {{ $data->count }}
                                    </div>
                                    <div class="font-weight-bold mb-1">
                                        {{ str_replace('"', '', $data->platform ?? 'Tidak Diketahui') }}</div>
                                    <div class="progress" data-height="3">
                                        <div class="progress-bar" role="progressbar"
                                            data-width="{{ $data->percentage }}%"
                                            aria-valuenow="{{ $data->percentage }}" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
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
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->

    <script>
        var statistics_chart = document.getElementById("myChart").getContext('2d');

        var myChart = new Chart(statistics_chart, {
            type: 'line',
            data: {
                labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                datasets: [{
                    label: 'Statistics',
                    data: [
                        {{ $visitors['Monday'] }},
                        {{ $visitors['Tuesday'] }},
                        {{ $visitors['Wednesday'] }},
                        {{ $visitors['Thursday'] }},
                        {{ $visitors['Friday'] }},
                        {{ $visitors['Saturday'] }},
                        {{ $visitors['Sunday'] }}
                    ],
                    borderWidth: 5,
                    borderColor: '#6777ef',
                    backgroundColor: 'transparent',
                    pointBackgroundColor: '#fff',
                    pointBorderColor: '#6777ef',
                    pointRadius: 4
                }]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            stepSize: 150
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            color: '#fbfbfb',
                            lineWidth: 2
                        }
                    }]
                },
            }
        });
    </script>
@endpush
