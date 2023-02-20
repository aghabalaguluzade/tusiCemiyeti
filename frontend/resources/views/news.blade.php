@extends('layouts.master')
@section('title', 'Xəbərlər')
@section('content')
    <section class="heroes-blog">
        <div class="container">
          <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
              <h2 class="font-italic text-white">Xəbərlər</h2>
            </div>
          </div>
          <div class="row d-flex blogs">

            @foreach ($news as $new)

            <div class="col-lg-6 d-flex align-items-stretch mb-2">
              <div class="blog-start d-flex">
                <img src="{{ config('constant.path') . $new->img }}" class="img-fluid" alt="{{ $new->title }}">
                <div class="text p-4 bg-light">
                  <h3 class="mb-3 heading">
                    <a href="#">{{ $new->title }}</a>
                  </h3>
                  <p class="text-justify">{!!  Str::limit($new->description, 160, '...') !!}</p>
                  <a href="{{ route('newsDetail',$new->id) }}" class="custom-btn active">
                    Ətraflı
                    <i id="icon" class="fas fa-long-arrow-alt-right"></i>
                  </a>
                </div>
              </div>
            </div>

            @endforeach

          </div>
        </div>
      </section>
@endsection
