@extends('layouts.master')
@section('title', $new->title)
@section('content')
    <section class="detail-blog">
                <div class="blog-single ">
                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col-lg-8 m-15px-tb">
                                <article class="article">
                                    <div class="article-img">
                                        <img class="img-fluid" src="{{ config('constant.path') . $new->img }}" title="" alt="{{ $new->title }}">
                                    </div>
                                    <div class="article-title">
                                        <h2>{{ $new->title }}</h2>
                                    </div>
                                    <div class="article-content">
                                        <p>{!! $new->description !!}</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-4 m-15px-tb blog-aside">
                                <!-- Latest Post -->
                                <div class="widget widget-latest-post">
                                    <div class="widget-body">
                                        <h2> Digər Xəbərlər </h2>

                                        @foreach ($latest_news as $latest_new)

                                            <div class="latest-post-aside media">
                                            <div class="lpa-left media-body">
                                                <div class="lpa-title">
                                                    <h5><a href="{{ route('newsDetail',$latest_new->id) }}">{{ $latest_new->title }}</a></h5>
                                                </div>
                                                <div class="lpa-meta">
                                                    <a class="date" href="{{ route('newsDetail',$latest_new->id) }}">
                                                        {{ $latest_new->created_at }}
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="lpa-right">
                                                <a href="{{ route('newsDetail',$latest_new->id) }}">
                                                    <img src="{{ config('constant.path') . $latest_new->img }}" title="{{ $latest_new->title }}" alt="{{ $latest_new->title }}" class="img-fluid">
                                                </a>
                                            </div>
                                        </div>

                                        @endforeach
                                    </div>
                                </div>
                                <!-- End Latest Post -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
