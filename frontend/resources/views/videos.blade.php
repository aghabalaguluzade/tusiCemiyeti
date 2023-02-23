@extends('layouts.master')
@section('title', 'Video')
@section('css')
    <link rel="stylesheet" href="{{ config('constant.path') }}assets/js/plugins/magnific-popup/magnific-popup.css" />
@endsection
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
                    <a class="img-lightbox video popup-youtube" href="{{ $video->url }}">
                    <div class="video_icon">
                        <i class="fa-solid fa-play"></i>
                    </div>
                    </a>
                    <h3>{{ $video->title }}</h3>
                    <div>

                    </div>
                </div>
            </div>            
                @endforeach
            @endif
        </div>
    </section>
@endsection
@section('js')
        <script src="{{ config('constant.path') }}assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script>
            $(document).ready(function(){
    $('.popup-youtube').magnificPopup({
     type: 'iframe' 
    });
  });
        </script>
@endsection
