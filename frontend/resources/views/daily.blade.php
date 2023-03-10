@extends('layouts.master')
@section('title', 'Gündəlik')
@section('content')
    <section>
        <div class="container mt-4">
            <h3 class="font-italic text-center my-5">Gündəlik</h3>
            <div class="row main-row">

                @foreach ($dailyAll as $day)

                    <div class="col-6">
                        <div class="card mb-3" style="max-width: 100%;">
                            <div class="row g-0">
                                @if($day->img)
                                    <div class="col-md-4">
                                        <img src="{{ config('constant.path') . $day->img }}" class="img-fluid rounded-start custom_img_card" alt="...">
                                    </div>
                                @endif
                                    <div class="{{  $day->img === null ? 'col-md-12' : 'col-md-8' }}">
                                        <div class="card-body custom_card">
                                            <h5 class="card-title"> {{$day->title}} </h5>
                                            <p class="card-text">{!! $day->description !!}</p>
                                            <p class="card-text"><small class="text-muted"> {{ $day->created_at }}</small></p>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>


                @endforeach
            </div>
        </div>
    </section>
    @endsection
