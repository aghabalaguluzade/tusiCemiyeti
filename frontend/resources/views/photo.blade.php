@extends('layouts.master')
@section('title', 'Foto')
@section('content')

    <div class="container">
        <div class="cardS">
            <ul class="photo_cards">
                <p style="display: none"> {{$carousel= '' }} </p>
                @foreach ($photos as $photo)
                    <p style="display: none"> {{$carousel= $photo->images }} </p>
                <li>
                    <div  class="photo_card">
                        <img  src="{{ config('constant.path') . $photo->preview_img }}" class="photo_card__image" alt="" />
                        <!-- <svg class="photo_card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>      -->
                        <div class="photo_card__overlay">
                            <div class="photo_card__header">
                                <!-- <svg class="photo_card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                      -->
                            </div>
                            <p class="photo_card__description">{!! $photo->description !!}</p>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div id="lightbox" style="display:none;">
            <div class="blur">
                <button id="closeButton">X</button>

                <div class="sliderS">
                    <div class="photo_wrapper">
                        <div class="photo_slider right">

                            <div class="arrow left">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.359 292.359">
                                    <path d="M222.979 5.424C219.364 1.807 215.08 0 210.132 0c-4.949 0-9.233 1.807-12.848 5.424L69.378 133.331c-3.615 3.617-5.424 7.898-5.424 12.847s1.809 9.233 5.424 12.847l127.906 127.907c3.614 3.617 7.898 5.428 12.848 5.428 4.948 0 9.232-1.811 12.847-5.428 3.617-3.614 5.427-7.898 5.427-12.847V18.271c-.001-4.949-1.81-9.229-5.427-12.847z" fill="#FFFFFF"/>
                                </svg>
                            </div>

                            <div class="container-images">
                                @foreach($carousel as $image)
                                <img class="active" src="{{ config('constant.path') . $image->image }}">
                                @endforeach
                            </div>

                            <div class="arrow right">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.359 292.359">
                                    <path d="M222.979 5.424C219.364 1.807 215.08 0 210.132 0c-4.949 0-9.233 1.807-12.848 5.424L69.378 133.331c-3.615 3.617-5.424 7.898-5.424 12.847s1.809 9.233 5.424 12.847l127.906 127.907c3.614 3.617 7.898 5.428 12.848 5.428 4.948 0 9.232-1.811 12.847-5.428 3.617-3.614 5.427-7.898 5.427-12.847V18.271c-.001-4.949-1.81-9.229-5.427-12.847z" fill="#FFFFFF"/>
                                </svg>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

@endsection

@section('js')
    <script src="{{ asset('assets/js/photo.js') }}"></script>
@endsection
