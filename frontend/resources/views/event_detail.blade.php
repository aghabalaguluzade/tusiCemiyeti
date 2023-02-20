@extends('layouts.master')
@section('title', $data->title)
@section('content')
    <section class="detail-blog">
                <div class="blog-single ">
                    <div class="container">
                        <div class="row align-items-start">
                            <div class="col-lg-8 m-15px-tb">
                                <article class="article">
                                    <div class="article-img">
                                        <img class="img-fluid" src="{{ config('constant.path') . $data->img }}" title="" alt="{{ $data->title }}">
                                    </div>
                                    <div class="article-title">
                                        <h2>{{ $data->title }}</h2>
                                    </div>
                                    <div class="article-content">
                                        <p>{!! $data->description !!}</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-4 m-15px-tb blog-aside">
                                <!-- Latest Post -->
                                <div class="widget widget-latest-post">
                                    <div class="widget-body">
                                        <h2> Digər Tədbirlər </h2>
                                        
                                        @foreach ($latest_events as $latest_event)
                                            
                                            <div class="latest-post-aside media">
                                            <div class="lpa-left media-body">
                                                <div class="lpa-title">
                                                    <h5><a href="{{ route('eventShow',$latest_event->id) }}">{{ $latest_event->title }}</a></h5>
                                                </div>
                                                <div class="lpa-meta">
                                                    <a class="date" href="{{ route('eventShow',$latest_event->id) }}">
                                                        {{ $latest_event->created_at }}
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="lpa-right">
                                                <a href="{{ route('eventShow',$latest_event->id) }}">
                                                    <img src="{{ config('constant.path') . $latest_event->img }}" title="{{ $latest_event->title }}" alt="{{ $latest_event->title }}" class="img-fluid">
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
