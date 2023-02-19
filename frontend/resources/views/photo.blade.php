@extends('layouts.master')
@section('title', 'Foto')
@section('content')
<section class="container">
        <h1 class="text-center mt-4" >Foto</h1>
      <div class="cardS">
        <ul class="photo_cards">
          <li>
            <div class="photo_card">
              <img
                src="{{ asset('assets/img/about.jpeg') }}"
                class="photo_card__image"
                alt=""
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
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Asperiores, blanditiis?
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="photo_card">
              <img
                src="{{ asset('assets/img/about.jpeg') }}"
                class="photo_card__image"
                alt=""
              />
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
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Asperiores, blanditiis?
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="photo_card">
              <img
                src="{{ asset('assets/img/about.jpeg') }}"
                class="photo_card__image"
                alt=""
              />
              <div class="photo_card__overlay">
                <div class="photo_card__header">
                  <span>hello world</span>
                  <svg
                    class="photo_card__arc"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path />
                  </svg>
                </div>
                <p class="photo_card__description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Asperiores, blanditiis?
                </p>
              </div>
            </div>
          </li>
          <li>
            <div class="photo_card">
              <img
                src="{{ asset('assets/img/about.jpeg') }}"
                class="photo_card__image"
                alt=""
              />
              <div class="photo_card__overlay">
                <div class="photo_card__header">
                  <span>hello world</span>
                  <svg
                    class="photo_card__arc"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path />
                  </svg>
                </div>
                <p class="photo_card__description">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Asperiores, blanditiis?
                </p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div id="lightbox" style="display: none">
        <img
          id="lightbox-img"
          src="{{ asset('assets/img/about.jpeg') }}"
        />
        <button id="closeButton">X</button>
        <button id="prevButton">
          <i class="fa-sharp fa-solid fa-arrow-left"></i>
        </button>
        <button id="nextButton">
          <i class="fa-sharp fa-solid fa-arrow-right"></i>
        </button>
      </div>
    </section>
@endsection
@section('js')
    <script src="{{ asset('assets/js/photo.js') }}"></script>
@endsection
