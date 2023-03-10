@extends('layouts.master')
@if(request()->routeIs('about'))
@section('title', 'Haqqımızda')
@endif
@if(request()->routeIs('structure'))
@section('title', 'Struktur')
@endif
@if(request()->routeIs('view'))
@section('title', 'Baxışımız')
@endif
@if(request()->routeIs('prospect'))
    @section('title', 'Prespektivimiz')
@endif
@if(request()->routeIs('tusi'))
    @section('title', 'Umumi Məlumat')
@endif
@section('content')

    @if(request()->routeIs('about'))
        @if($about)
            <div class="detail_body about">
                <h1> Tusi Cəmiyyəti haqqında </h1>
        <div class="container">
            <div class="second_detail_section">
                <div class="left_part">
                    <img style="border-radius: 10px;" src="{{ config('constant.path') . $about->img }}" title="Tusi Cəmiyyəti" alt="tusi-cemiyyeti">
                </div>
                <div class="right_part">
                    <p>{!! $about->description !!}</p>
                </div>
            </div>
        </div>
    </div>
        @endif
    @endif



    @if(request()->routeIs('structure'))
        @if($structure)
        <div class="detail_body about">
            <h1> Struktur </h1>
        <div class="container">
            <div class="second_detail_section">
                <div class="left_part">
                    <img style="border-radius: 10px;" src="{{ config('constant.path') . $structure->img }}" alt="{{ $structure->description }}">
                </div>
                <div class="right_part">
                    <p>{!! $structure->description !!}</p>
                </div>
            </div>
        </div>
    </div>
        @endif
    @endif



    @if(request()->routeIs('view'))
        @if($view)
        <div class="detail_body about">
            <h1> Baxışımız </h1>
        <div class="container">
            <div class="second_detail_section">
                <div class="left_part">
                    <img style="border-radius: 10px;" src="{{ config('constant.path') . $view->img }}" alt="{{ $view->description }}">
                </div>
                <div class="right_part">
                    <p>{!! $view->description !!}</p>
                </div>
            </div>
        </div>
    </div>
        @endif
    @endif

    @if(request()->routeIs('prospect'))
        @if($view)
            <div class="detail_body about">
                <h1> Prespektivimiz </h1>
                <div class="container">
                    <div class="second_detail_section">
                        <div class="left_part">
                            <img style="border-radius: 10px;" src="{{ config('constant.path') . $prospect->img }}" alt="{{ $prospect->description }}">
                        </div>
                        <div class="right_part">
                            <p>{!! $prospect->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif

    @if(request()->routeIs('tusi'))
        @if($view)
            <div class="detail_body about">
                <h1> Umumi Məlumat </h1>
                <div class="container">
                    <div class="second_detail_section">
                        <div class="left_part">
                            <img style="border-radius: 10px;" src="{{ config('constant.path') . $tusi->img }}" alt="{{ $tusi->description }}">
                        </div>
                        <div class="right_part">
                            <p>{!! $tusi->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endif

@endsection
