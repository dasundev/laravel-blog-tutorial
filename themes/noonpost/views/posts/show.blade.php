@extends('layouts.master')
@section('content')

    <section class="section pt-55 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mb-20 centered">
                    <!--Post-single-->
                    <div class="post-single">
                        <div class="post-single-image">
                            <img src="{{ asset("thumbnails/$post->thumbnail") }}" alt="{{ $post->title }}">
                        </div>
                        <div class="post-single-content">
                            <h4>What the secrets you will know about jordan petra if visit it one day? </h4>
                            <div class="post-single-info">
                                <ul class="list-inline">
                                    <li><a href="#"><img src="{{ asset('themes/noonpost/img/author/1.jpg') }}" alt=""></a></li>
                                    <li><a href="#">David Smith</a> </li>
                                    <li class="dot"></li>
                                    <li>{{ \Illuminate\Support\Carbon::parse($post->created_at)->format('F d, Y') }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="post-single-body">
                            <p>{{ $post->description }}</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes.newsletter')
@endsection
