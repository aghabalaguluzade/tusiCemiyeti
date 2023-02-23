@extends('layouts.master')
@section('title', $new->name)
@section('content')
    <section class="detail-fam">
        <div class="container mt-5">
            <div class="detail-fam-blog">
                <div class="fam-img">
                    <img src="{{ config('constant.path') . $new->img }}" alt="{{$new->name}}" title="{{$new->name}}" class="img-fluid">
                    <h2 class="fam-name head_text"> {{$new->name}} </h2>
                    <span class="fam-position"> {{$new->job}} </span>
                    <p class="fam-text head_text">
                        {!! $new->description !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
