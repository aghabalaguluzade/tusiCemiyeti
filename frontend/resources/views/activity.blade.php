@extends('layouts.master')
@if(request()->routeIs('activity'))
@section('title', 'Fəaliyyət')
@endif
@if(request()->routeIs('creation'))
@section('title', 'Yaranma')
@endif
@section('content')
    
    @if($activity)
        @if(request()->routeIs('activity'))
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-12 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Fəaliyyət</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="{{ config('constant.path') . $activity->img }}" alt="{{ $activity->description }}" />
                                </div>
                                <div class="article-content">
                                    <p>{!! $activity->description !!}</p>
                                </div>
                            </article>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
    @endif
    @endif



    @if($creation)
        @if(request()->routeIs('creation'))
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-12 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Yaranma</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="{{ config('constant.path') . $creation->img }}" alt="{{ $creation->description }}" />
                                </div>
                             
                                <div class="article-content">
                                    <p>{!! $creation->description !!}</p>
                                </div>
                            </article>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
    @endif
    @endif
    
@endsection
