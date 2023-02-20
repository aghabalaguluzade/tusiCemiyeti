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
@section('content')

    @if(request()->routeIs('about'))
        @if($about)
            <div class="detail_body">
        <div class="container">
            <div class="second_detail_section">
                <div class="left_part">
                    <img style="border-radius: 10px;" src="{{ config('constant.path') . $about->img }}" alt="{{ $about->description }}">
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
        <div class="detail_body">
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
        <div class="detail_body">
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

@endsection
