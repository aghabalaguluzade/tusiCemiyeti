@extends('layouts.master')
@section('title', 'Video')
@section('content')
    <section id="video">
        <div class="container">
            
            @if($videos)
                
                @foreach ($videos as $video)
                    <div class="video_a-box">
                <div class="video_img-container">
                    <div class="video_img-inner">
                        <div class="video_inner-skew">
                            <img src="{{ config('constant.path') . $video->preview_img }}" />
                        </div>
                    </div>
                </div>
                <div class="video_text-container">
                    <div class="video_icon">
                        <i class="fa-solid fa-play"></i>
                    </div>
                    <h3>{{ $video->title }}</h3>
                    <div>
                        
                    </div>
                </div>
            </div>
            <div class="video_popup">
                <div class="video_blur"></div>
                <div class="video_body">
                    <div class="video_close">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <iframe width="560" height="315" src="{{ $video->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                </div>
    
            </div>
                @endforeach

            @endif
    
    
        </div>
    </section>
@endsection
@section('js')
    <script src="{{ asset('assets/js/video.js') }}"></script>
@endsection