@extends('layouts.master')
@section('title', 'Video')
@section('content')
    <section id="video">
        <div class="container">
            <div class="video_a-box">
                <div class="video_img-container">
                    <div class="video_img-inner">
                        <div class="video_inner-skew">
                            <img src="https://images.unsplash.com/photo-1584791097929-aa825fe8e1e1?ixlib=rb-1.2.1&amp;q=85&amp;fm=jpg&amp;crop=entropy&amp;cs=srgb&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ">
                        </div>
                    </div>
                </div>
                <div class="video_text-container">
                    <div class="video_icon">
                        <i class="fa-solid fa-play"></i>
                    </div>
                    <h3>LOREM</h3>
                    <div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, consequatur.
                    </div>
                </div>
            </div>
            <div class="video_a-box">
                <div class="video_img-container">
                    <div class="video_img-inner">
                        <div class="video_inner-skew">
                            <img src="https://images.unsplash.com/photo-1584791097929-aa825fe8e1e1?ixlib=rb-1.2.1&amp;q=85&amp;fm=jpg&amp;crop=entropy&amp;cs=srgb&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ">
                        </div>
                    </div>
                </div>
                <div class="video_text-container">
                    <div class="video_icon">
                        <i class="fa-solid fa-play"></i>
                    </div>
                    <h3>LOREM</h3>
                    <div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, praesentium.
                    </div>
                </div>
            </div>
            <div class="video_a-box">
                <div class="video_img-container">
                    <div class="video_img-inner">
                        <div class="video_inner-skew">
                            <img src="https://images.unsplash.com/photo-1584791097929-aa825fe8e1e1?ixlib=rb-1.2.1&amp;q=85&amp;fm=jpg&amp;crop=entropy&amp;cs=srgb&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ">
                        </div>
                    </div>
                </div>
                <div class="video_text-container">
                    <div class="video_icon">
                        <i class="fa-solid fa-play"></i>
                    </div>
                    <h3>LOREM</h3>
                    <div>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores, minima.
                    </div>
                </div>
            </div>
            <div class="video_a-box">
                <div class="video_img-container">
                    <div class="video_img-inner">
                        <div class="video_inner-skew">
                            <img src="https://images.unsplash.com/photo-1584791097929-aa825fe8e1e1?ixlib=rb-1.2.1&amp;q=85&amp;fm=jpg&amp;crop=entropy&amp;cs=srgb&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ">
                        </div>
                    </div>
                </div>
                <div class="video_text-container">
                    <div class="video_icon">
                        <i class="fa-solid fa-play"></i>
                    </div>
                    <h3>LOREM</h3>
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, necessitatibus!
                    </div>
                </div>
            </div>
            <div class="video_a-box">
                <div class="video_img-container">
                    <div class="video_img-inner">
                        <div class="video_inner-skew">
                            <img src="https://images.unsplash.com/photo-1584791097929-aa825fe8e1e1?ixlib=rb-1.2.1&amp;q=85&amp;fm=jpg&amp;crop=entropy&amp;cs=srgb&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ">
                        </div>
                    </div>
                </div>
                <div class="video_text-container">
                    <div class="video_icon">
                        <i class="fa-solid fa-play"></i>
                    </div>
                    <h3>LOREM</h3>
                    <div>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis, asperiores.
                    </div>
                </div>
            </div>
            <div class="video_a-box">
                <div class="video_img-container">
                    <div class="video_img-inner">
                        <div class="video_inner-skew">
                            <img src="https://images.unsplash.com/photo-1584791097929-aa825fe8e1e1?ixlib=rb-1.2.1&amp;q=85&amp;fm=jpg&amp;crop=entropy&amp;cs=srgb&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ">
                        </div>
                    </div>
                </div>
                <div class="video_text-container">
                    <div class="video_icon">
                        <i class="fa-solid fa-play"></i>
                    </div>
                    <h3>LOREM</h3>
                    <div>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatem, quaerat!
                    </div>
                </div>
            </div>
            <div class="video_popup">
                <div class="video_blur"></div>
                <div class="video_body">
                    <div class="video_close">
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/CPQRmXDKhiU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                </div>
    
            </div>
    
    
        </div>
    </section>
@endsection
@section('js')
    <script src="{{ asset('assets/js/video.js') }}"></script>
@endsection