@extends('layouts.master')
@section('title', 'Foto')
@section('content')
<section class="container">
        <h1 class="text-center mt-4" >Foto</h1>
      <div class="cardS">
        <ul class="photo_cards">

          @foreach ($photos as $photo)

          <li>
            <div class="photo_card">
              <img
                src="{{ config('constant.path') . $photo->preview_img }}"
                class="photo_card__image"
                alt="{{ $photo->title }}"
              />
              <svg class="photo_card__arc" xmlns="http://www.w3.org/2000/svg">
                <path />
              </svg>
              <div class="photo_card__overlay">
                <div class="photo_card__header">
                  <svg
                    class="photo_card__arc"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path />
                  </svg>
                </div>
                <p class="photo_card__description">
                  {{ $photo->description }}
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>


    @foreach ($photo->images as $image)
      <div id="lightbox" style="display: none">
        <img
          id="lightbox-img"
          src="{{ config('constant.path') . $image->image }}"
        />
        <button id="closeButton">X</button>
        <button id="prevButton">
          <i class="fa-sharp fa-solid fa-arrow-left"></i>
        </button>
        <button id="nextButton">
          <i class="fa-sharp fa-solid fa-arrow-right"></i>
        </button>
      </div>        
    @endforeach

    </section>

    @endforeach
@endsection
@section('js')
    <script src="{{ asset('assets/js/photo.js') }}"></script>
@endsection
