@extends('layouts.app')
@section('title', 'edit Post')
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Post</h1>
            </div>
        </section>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Update</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include('pages.admin.posts._form')
                    </form>

                    <div class="modal fade" tabindex="-1" role="dialog" id="addCategory">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Modal body text goes here.</p>
                                    <form action="{{ route('categories.add') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Category Name</label>
                                            <input class="form-control" type="text" name="name" id="name"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="slug">Slug</label>
                                            <input class="form-control" type="text" name="slug" id="slug"
                                                required>
                                        </div>

                                        <input type="hidden" name="created_by" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="updated_by" value="{{ Auth::user()->id }}">

                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
