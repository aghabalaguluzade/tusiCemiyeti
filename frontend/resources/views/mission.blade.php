@extends('layouts.master')
@if(request()->routeIs('charitable'))
@section('title', 'Xeyriyyəçilik')
@endif
@if(request()->routeIs('enlightenment'))
@section('title', 'Maarifçilik')
@endif
@section('content')

    @if(request()->routeIs('charitable'))
        @if($charitable)
            <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-8 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2 class="head_text">Xeyriyyəçilik</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="{{ config('constant.path') . $charitable->img }}" title="" alt="">
                                </div>

                                <div class="article-content">
                                    <p>{!! $charitable->description !!}</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4 m-15px-tb blog-aside">
                            <!-- Latest Post -->
                            <div class="widget widget-latest-post">
                                <div class="widget-body">
                                    <h2 class="mb-5 head_text"> Digər Mövzular </h2>
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="{{route('activity')}}"> {!!  Str::limit($activity->description, 150, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('activity')}}">
                                                    Fəaliyyət
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('activity')}}">
                                                <img src="{{ config('constant.path') . $activity->img }}"
                                                     title="" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="{{route('enlightenment')}}"> {!!  Str::limit($enlightenment->description, 70, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('enlightenment')}}">
                                                    Maarifçilik
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('enlightenment')}}">
                                                <img src="{{ config('constant.path') . $enlightenment->img }}"
                                                     title="" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Latest Post -->
                            <div class="widget widget-latest-post">
                                <div class="widget-body">
                                    <h2 class="mb-5 head_text"> Son Xəbərlər </h2>
                                    @foreach ($latest_news as $latest_new)
                                        <div class="latest-post-aside media">
                                            <div class="lpa-left media-body">
                                                <div class="lpa-title">
                                                    <h5><a href="{{ route('newsDetail',$latest_new->id) }}">{!!  Str::limit($latest_new->title, 70, '...') !!}</a></h5>
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

                            <div class="widget widget-latest-post">
                                <div class="widget-body">
                                    <h2 class="mb-5 head_text"> Son Tədbirlər </h2>
                                    @foreach ($latest_events as $latest_event)

                                        <div class="latest-post-aside media">
                                            <div class="lpa-left media-body">
                                                <div class="lpa-title">
                                                    <h5><a href="{{ route('eventShow',$latest_event->id) }}">{!!  Str::limit($latest_event->title, 70, '...') !!}</a></h5>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endif



    @if(request()->routeIs('enlightenment'))
        @if($enlightenment)
            <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-8 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2 class="head_text">Maarifçilik</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="{{ config('constant.path') . $enlightenment->img }}" title="" alt="">
                                </div>

                                <div class="article-content">
                                    <p>{!! $enlightenment->description !!}</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4 m-15px-tb blog-aside">
                            <!-- Latest Post -->
                            <div class="widget widget-latest-post">
                                <div class="widget-body">
                                    <h2 class="mb-5 head_text"> Digər Mövzular </h2>
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="{{route('activity')}}"> {!!  Str::limit($activity->description, 150, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('activity')}}">
                                                    Fəaliyyət
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('activity')}}">
                                                <img src="{{ config('constant.path') . $activity->img }}"
                                                     title="" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="{{route('charitable')}}"> {!!  Str::limit($charitable->description, 70, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('charitable')}}">
                                                    Xeyriyyəçilik
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('charitable')}}">
                                                <img src="{{ config('constant.path') . $charitable->img }}"
                                                     title="" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Latest Post -->
                            <div class="widget widget-latest-post">
                                <div class="widget-body">
                                    <h2 class="mb-5 head_text"> Son Xəbərlər </h2>
                                    @foreach ($latest_news as $latest_new)
                                        <div class="latest-post-aside media">
                                            <div class="lpa-left media-body">
                                                <div class="lpa-title">
                                                    <h5><a href="{{ route('newsDetail',$latest_new->id) }}">{!!  Str::limit($latest_new->title, 70, '...') !!}</a></h5>
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

                            <div class="widget widget-latest-post">
                                <div class="widget-body">
                                    <h2 class="head_text"> Son Tədbirlər </h2>
                                    @foreach ($latest_events as $latest_event)

                                        <div class="latest-post-aside media">
                                            <div class="lpa-left media-body">
                                                <div class="lpa-title">
                                                    <h5><a href="{{ route('eventShow',$latest_event->id) }}">{!!  Str::limit($latest_event->title, 70, '...') !!}</a></h5>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endif
@endsection
