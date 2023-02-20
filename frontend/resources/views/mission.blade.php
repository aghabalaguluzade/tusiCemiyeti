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
                        <div class="col-lg-12 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Xeyriyyəçilik</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="{{ config('constant.path') . $charitable->img }}" title="" alt="">
                                </div>
                             
                                <div class="article-content">
                                    <p>{!! $charitable->description !!}</p>
                                </div>
                            </article>
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
                        <div class="col-lg-12 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Maarifçilik</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="{{ config('constant.path') . $enlightenment->img }}" title="" alt="">
                                </div>
                             
                                <div class="article-content">
                                    <p>{!! $enlightenment->description !!}</p>
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
