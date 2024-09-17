@extends('layouts.app')

@section('title', 'Profile')


@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Profil</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Profil</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Hi, {{ $user->name }}</h2>
                {{-- <p class="section-lead">
                    Change information about yourself on this page.
                </p> --}}

                <div class="row">
                    <div class="col-12">
                        @include('layouts.alert')
                    </div>
                </div>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="card profile-widget">
                            <div class="profile-widget-header">
                                <img alt="image"
                                    src="{{ $user->photo ? asset('storage/' . $user->photo) : asset('img/avatar/avatar-1.png') }}"
                                    class="rounded-circle profile-widget-picture">
                                <div class="profile-widget-items">
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Posts</div>
                                        <div class="profile-widget-item-value">{{ $jumlahPosts }}</div>
                                    </div>
                                    <div class="profile-widget-item">
                                        <div class="profile-widget-item-label">Pages</div>
                                        <div class="profile-widget-item-value">{{ $jumlahPages }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="profile-widget-description">
                                <div class="profile-widget-name">{{ $user->name }}<div
                                        class="text-muted d-inline font-weight-normal">
                                        <div class="slash"></div>
                                        @if ($user->roles->isNotEmpty())
                                            {{ $user->roles->pluck('name')->implode(', ') }}
                                        @else
                                            -
                                        @endif
                                    </div>
                                </div>
                                <p> <strong>No. Phone : </strong> {{ $user->phone }}</p>
                                <p><strong>Email : </strong>{{ $user->email }}</p>

                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info btn-icon">Edit
                                    Profil</a>
                                <a class="btn btn-warning" data-toggle="modal" data-target="#resetPassword">Reset
                                    Password</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="resetPassword">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Reset Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p>Silahkan Masukan Data untuk Kategori</p>
                    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="name" value="{{ $user->name }}">
                        <input type="hidden" name="email" value="{{ $user->email }}">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" id="password" required>
                        </div>

                        <div class="form-group">
                            <label for="re-password">Ulangi Password</label>
                            <input class="form-control" type="password" name="re-password" id="re-password" required>
                        </div>

                        <button type="submit" class="btn btn-primary" onclick="validatePasswords()">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        function validatePasswords() {
            var password = document.getElementById('password').value;
            var rePassword = document.getElementById('re-password').value;

            if (password === rePassword) {
                document.getElementById('passwordForm').submit();
            } else {
                alert('Password tidak cocok. Silakan coba lagi.');
            }
            event.preventDefault(); // Menghentikan default form submission
        }
    </script>
@endpush
