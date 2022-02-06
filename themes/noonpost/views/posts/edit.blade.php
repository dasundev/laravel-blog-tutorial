@extends('layouts.master')

@section('content')
    <section class="section pt-55 mb-50">
        <div class="container">
            <div class="sign widget ">
                <div class="section-title">
                    <h5>{{ __('Edit Post') }}</h5>
                </div>
                <form  action="{{ route('posts.update', $post->id) }}" class="sign-form widget-form" method="post" enctype="multipart/form-data">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label>Post Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter post title" value="{{ $post->title }}" required>
                    </div>
                    <div class="form-group">
                        <label>Post Description</label>
                        <textarea class="form-control" name="description" placeholder="Enter post description" rows="10" required>{{ $post->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn-custom">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
