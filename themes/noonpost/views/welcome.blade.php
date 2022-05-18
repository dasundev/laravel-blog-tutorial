@extends('layouts.master')
@section('content')
    <!--masonry-layout-->
    <section class="section masonry-layout pt-45">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-columns">
                        @foreach($posts as $post)
                            <div class="card">
                                <div class="post-card">
                                    <div class="post-card-image">
                                        <a href="{{ route('posts.show', $post->id) }}">
                                            <img src="{{ asset("thumbnails/$post->thumbnail") }}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-card-content">
                                        <h5>
                                            <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                                        </h5>
                                        <p>{{ \Illuminate\Support\Str::limit($post->description, 150) }}</p>
                                        <div class="post-card-info">
                                            <ul class="list-inline">
                                                <li>
                                                    <a href="#">
                                                        <img src="{{ asset('themes/noonpost/img/author/1.jpg') }}" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">{{ $post->user->name }}</a>
                                                </li>
                                                <li class="dot"></li>
                                                <li>{{ \Illuminate\Support\Carbon::parse($post->created_at)->format('F d, Y') }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes.newsletter')
@endsection

