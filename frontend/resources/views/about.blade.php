@extends('layouts.master')
@section('title', 'Haqqımızda')
@section('content')
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

@endsection
