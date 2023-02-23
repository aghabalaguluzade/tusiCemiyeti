@extends('layouts.master')
@if(request()->routeIs('history'))
@section('title', 'Ordubad Tarixi')
@endif
@if(request()->routeIs('monuments'))
@section('title', 'Ordubad Abidələri')
@endif
@if(request()->routeIs('folklore'))
@section('title', 'Ordubad Folkloru')
@endif
@if(request()->routeIs('customs_traditions'))
@section('title', 'Ordubad Adət və Ənənələri')
@endif
@if(request()->routeIs('nature'))
@section('title', 'Ordubad Təbiəti')
@endif
@if(request()->routeIs('kitchen'))
@section('title', 'Ordubad Mətbəxi')
@endif
@if(request()->routeIs('flora'))
@section('title', 'Ordubad Florası')
@endif
@if(request()->routeIs('tourism'))
@section('title', 'Ordubad Turizmi')
@endif
@if(request()->routeIs('fauna'))
@section('title', 'Ordubad Faunası')
@endif
@if(request()->routeIs('hotel_restaurant'))
@section('title', 'Ordubad Otel-Restoran')
@endif
@if(request()->routeIs('general_information'))
@section('title', 'Ordubad Ümumi məlumat')
@endif
@if(request()->routeIs('production'))
@section('title', 'Ordubad İstehsal')
@endif
@section('content')


    @if(request()->routeIs('history'))
        @if($history)
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-8 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Tarixi</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="{{ config('constant.path') . $history->img }}" alt="">
                                </div>
                                <div class="article-content">
                                    <p>{!!  $history->description !!}</p>
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
                                                <h5><a href="{{route('general_information')}}"> {!!  Str::limit($general_information->description, 150, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('general_information')}}">
                                                    Ümumi məlumat
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('general_information')}}">
                                                <img src="{{ config('constant.path') . $general_information->img }}"
                                                     title="" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="{{route('customs_traditions')}}"> {!!  Str::limit($customs_traditions->description, 70, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('customs_traditions')}}">
                                                    Adət və Ənənələr
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('customs_traditions')}}">
                                                <img src="{{ config('constant.path') . $customs_traditions->img }}"
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

                            <div class="widget widget-latest-post">
                                <div class="widget-body">
                                    <h2  class="head_text mb-5"> Son Tədbirlər </h2>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endif





    @if(request()->routeIs('monuments'))
        @if($monuments)
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-8 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Abidələri</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="{{ config('constant.path') . $monuments->img }}" alt="">
                                </div>
                                <div class="article-content">
                                    <p>{!!  Str::limit($monuments->description, 160, '...') !!}</p>
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
                                                <h5><a href="{{route('general_information')}}"> {!!  Str::limit($general_information->description, 150, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('general_information')}}">
                                                    Ümumi məlumat
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('general_information')}}">
                                                <img src="{{ config('constant.path') . $general_information->img }}"
                                                     title="" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="{{route('customs_traditions')}}"> {!!  Str::limit($customs_traditions->description, 70, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('customs_traditions')}}">
                                                    Adət və Ənənələr
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('customs_traditions')}}">
                                                <img src="{{ config('constant.path') . $customs_traditions->img }}"
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

                            <div class="widget widget-latest-post">
                                <div class="widget-body">
                                    <h2  class="head_text mb-5"> Son Tədbirlər </h2>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endif






    @if(request()->routeIs('folklore'))
        @if($folklore)
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-8 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Folkloru</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="{{ config('constant.path') . $folklore->img }}" alt="">
                                </div>
                                <div class="article-content">
                                    <p>{!!  Str::limit($folklore->description, 160, '...') !!}</p>
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
                                                <h5><a href="{{route('general_information')}}"> {!!  Str::limit($general_information->description, 150, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('general_information')}}">
                                                    Ümumi məlumat
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('general_information')}}">
                                                <img src="{{ config('constant.path') . $general_information->img }}"
                                                     title="" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="{{route('customs_traditions')}}"> {!!  Str::limit($customs_traditions->description, 70, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('customs_traditions')}}">
                                                    Adət və Ənənələr
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('customs_traditions')}}">
                                                <img src="{{ config('constant.path') . $customs_traditions->img }}"
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

                            <div class="widget widget-latest-post">
                                <div class="widget-body">
                                    <h2  class="head_text mb-5"> Son Tədbirlər </h2>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endif





    @if(request()->routeIs('customs_traditions'))
        @if($customs_traditions)
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-8 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Adət və Ənənələri</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="{{ config('constant.path') . $customs_traditions->img }}" alt="">
                                </div>
                                <div class="article-content">
                                    <p>{!!  Str::limit($customs_traditions->description, 160, '...') !!}</p>
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
                                                <h5><a href="{{route('general_information')}}"> {!!  Str::limit($general_information->description, 150, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('general_information')}}">
                                                    Ümumi məlumat
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('general_information')}}">
                                                <img src="{{ config('constant.path') . $general_information->img }}"
                                                     title="" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="{{route('fauna')}}"> {!!  Str::limit($fauna->description, 70, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('fauna')}}">
                                                    Faunası
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('fauna')}}">
                                                <img src="{{ config('constant.path') . $fauna->img }}"
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

                            <div class="widget widget-latest-post">
                                <div class="widget-body">
                                    <h2  class="head_text mb-5"> Son Tədbirlər </h2>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endif




    @if(request()->routeIs('nature'))
        @if($nature)
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-8 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Təbiəti</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="{{ config('constant.path') . $nature->img }}" alt="">
                                </div>
                                <div class="article-content">
                                    <p>{!!  Str::limit($nature->description, 160, '...') !!}</p>
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
                                                <h5><a href="{{route('general_information')}}"> {!!  Str::limit($general_information->description, 150, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('general_information')}}">
                                                    Ümumi məlumat
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('general_information')}}">
                                                <img src="{{ config('constant.path') . $general_information->img }}"
                                                     title="" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="{{route('fauna')}}"> {!!  Str::limit($fauna->description, 70, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('fauna')}}">
                                                    Faunası
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('fauna')}}">
                                                <img src="{{ config('constant.path') . $fauna->img }}"
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

                            <div class="widget widget-latest-post">
                                <div class="widget-body">
                                    <h2  class="head_text mb-5"> Son Tədbirlər </h2>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endif




    @if(request()->routeIs('kitchen'))
        @if($kitchen)
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-8 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Mətbəxi</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="{{ config('constant.path') . $kitchen->img }}" alt="">
                                </div>
                                <div class="article-content">
                                    <p>{!!  Str::limit($kitchen->description, 160, '...') !!}</p>
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
                                                <h5><a href="{{route('general_information')}}"> {!!  Str::limit($general_information->description, 150, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('general_information')}}">
                                                    Ümumi məlumat
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('general_information')}}">
                                                <img src="{{ config('constant.path') . $general_information->img }}"
                                                     title="" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="{{route('fauna')}}"> {!!  Str::limit($fauna->description, 70, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('fauna')}}">
                                                    Faunası
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('fauna')}}">
                                                <img src="{{ config('constant.path') . $fauna->img }}"
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

                            <div class="widget widget-latest-post">
                                <div class="widget-body">
                                    <h2  class="head_text mb-5"> Son Tədbirlər </h2>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endif




    @if(request()->routeIs('flora'))
        @if($flora)
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-8 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Florası</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="{{ config('constant.path') . $flora->img }}" alt="">
                                </div>
                                <div class="article-content">
                                    <p>{!!  Str::limit($flora->description, 160, '...') !!}</p>
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
                                                <h5><a href="{{route('general_information')}}"> {!!  Str::limit($general_information->description, 150, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('general_information')}}">
                                                    Ümumi məlumat
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('general_information')}}">
                                                <img src="{{ config('constant.path') . $general_information->img }}"
                                                     title="" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="{{route('fauna')}}"> {!!  Str::limit($fauna->description, 70, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('fauna')}}">
                                                    Faunası
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('fauna')}}">
                                                <img src="{{ config('constant.path') . $fauna->img }}"
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

                            <div class="widget widget-latest-post">
                                <div class="widget-body">
                                    <h2  class="head_text mb-5"> Son Tədbirlər </h2>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endif



    @if(request()->routeIs('tourism'))
        @if($tourism)
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-8 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Turizmi</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="{{ config('constant.path') . $tourism->img }}" alt="">
                                </div>
                                <div class="article-content">
                                    <p>{!!  Str::limit($tourism->description, 160, '...') !!}</p>
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
                                                <h5><a href="{{route('general_information')}}"> {!!  Str::limit($general_information->description, 150, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('general_information')}}">
                                                    Ümumi məlumat
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('general_information')}}">
                                                <img src="{{ config('constant.path') . $general_information->img }}"
                                                     title="" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="{{route('fauna')}}"> {!!  Str::limit($fauna->description, 70, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('fauna')}}">
                                                    Faunası
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('fauna')}}">
                                                <img src="{{ config('constant.path') . $fauna->img }}"
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

                            <div class="widget widget-latest-post">
                                <div class="widget-body">
                                    <h2  class="head_text mb-5"> Son Tədbirlər </h2>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endif




    @if(request()->routeIs('fauna'))
        @if($fauna)
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-8 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Faunası</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="{{ config('constant.path') . $fauna->img }}" alt="">
                                </div>
                                <div class="article-content">
                                    <p>{!!  Str::limit($fauna->description, 160, '...') !!}</p>
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
                                                <h5><a href="{{route('general_information')}}"> {!!  Str::limit($general_information->description, 150, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('general_information')}}">
                                                    Ümumi məlumat
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('general_information')}}">
                                                <img src="{{ config('constant.path') . $general_information->img }}"
                                                     title="" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="{{route('fauna')}}"> {!!  Str::limit($fauna->description, 70, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('fauna')}}">
                                                    Faunası
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('fauna')}}">
                                                <img src="{{ config('constant.path') . $fauna->img }}"
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

                            <div class="widget widget-latest-post">
                                <div class="widget-body">
                                    <h2  class="head_text mb-5"> Son Tədbirlər </h2>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endif




    @if(request()->routeIs('hotel_restaurant'))
        @if($hotel_restaurant)
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-8 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Otel-Restoran</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="{{ config('constant.path') . $hotel_restaurant->img }}" alt="">
                                </div>
                                <div class="article-content">
                                    <p>{!!  Str::limit($hotel_restaurant->description, 160, '...') !!}</p>
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
                                                <h5><a href="{{route('general_information')}}"> {!!  Str::limit($general_information->description, 150, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('general_information')}}">
                                                    Ümumi məlumat
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('general_information')}}">
                                                <img src="{{ config('constant.path') . $general_information->img }}"
                                                     title="" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="{{route('fauna')}}"> {!!  Str::limit($fauna->description, 70, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('fauna')}}">
                                                    Faunası
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('fauna')}}">
                                                <img src="{{ config('constant.path') . $fauna->img }}"
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

                            <div class="widget widget-latest-post">
                                <div class="widget-body">
                                    <h2  class="head_text mb-5"> Son Tədbirlər </h2>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endif




    @if(request()->routeIs('general_information'))
        @if($general_information)
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-8 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2 class="head_text">Ordubad Ümumi məlumat</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="{{ config('constant.path') . $general_information->img }}" alt="">
                                </div>
                                <div class="article-content">
                                    <p>{!!  $general_information->description !!}</p>
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
                                                <h5><a href="{{route('history')}}"> {!!  Str::limit($history->description, 150, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('history')}}">
                                                    Tarixi
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('history')}}">
                                                <img src="{{ config('constant.path') . $history->img }}"
                                                     title="" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="{{route('customs_traditions')}}"> {!!  Str::limit($customs_traditions->description, 70, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('customs_traditions')}}">
                                                    Adət və Ənənələr
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('customs_traditions')}}">
                                                <img src="{{ config('constant.path') . $customs_traditions->img }}"
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

                            <div class="widget widget-latest-post">
                                <div class="widget-body">
                                    <h2  class="head_text mb-5"> Son Tədbirlər </h2>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endif




    @if(request()->routeIs('production'))
        @if($production)
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-8 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad İstehsal</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="{{ config('constant.path') . $production->img }}" alt="">
                                </div>
                                <div class="article-content">
                                    <p>{!!  Str::limit($production->description, 160, '...') !!}</p>
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
                                                <h5><a href="{{route('general_information')}}"> {!!  Str::limit($general_information->description, 150, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('general_information')}}">
                                                    Ümumi məlumat
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('general_information')}}">
                                                <img src="{{ config('constant.path') . $general_information->img }}"
                                                     title="" alt="" class="img-fluid">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="latest-post-aside media">
                                        <div class="lpa-left media-body">
                                            <div class="lpa-title">
                                                <h5><a href="{{route('fauna')}}"> {!!  Str::limit($fauna->description, 70, '...') !!} </a></h5>
                                            </div>
                                            <div class="lpa-meta">
                                                <a class="date" href="{{route('fauna')}}">
                                                    Faunası
                                                </a>
                                            </div>
                                        </div>
                                        <div class="lpa-right">
                                            <a href="{{route('fauna')}}">
                                                <img src="{{ config('constant.path') . $fauna->img }}"
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

                            <div class="widget widget-latest-post">
                                <div class="widget-body">
                                    <h2  class="head_text mb-5"> Son Tədbirlər </h2>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endif

@endsection
