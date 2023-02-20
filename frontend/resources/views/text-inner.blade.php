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
                        <div class="col-lg-12 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Tarixi</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="{{ config('constant.path') . $history->img }}" alt="">
                                </div>
                                <div class="article-content">
                                    <p>{!!  Str::limit($history->description, 160, '...') !!}</p>
                                </div>
                            </article>
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
                        <div class="col-lg-12 m-15px-tb">
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
                        <div class="col-lg-12 m-15px-tb">
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
                        <div class="col-lg-12 m-15px-tb">
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
                        <div class="col-lg-12 m-15px-tb">
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
                        <div class="col-lg-12 m-15px-tb">
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
                        <div class="col-lg-12 m-15px-tb">
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
                        <div class="col-lg-12 m-15px-tb">
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
                        <div class="col-lg-12 m-15px-tb">
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
                        <div class="col-lg-12 m-15px-tb">
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
                        <div class="col-lg-12 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Ümumi məlumat</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="{{ config('constant.path') . $general_information->img }}" alt="">
                                </div>
                                <div class="article-content">
                                    <p>{!!  Str::limit($general_information->description, 160, '...') !!}</p>
                                </div>
                            </article>
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
                        <div class="col-lg-12 m-15px-tb">
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
                    </div>
                </div>
            </div>
        </section>
        @endif
    @endif

@endsection