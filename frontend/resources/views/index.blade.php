@extends('layouts.master')
@section('content')
    <section class="slider-home">
        <div class="bg-opacity">
            <div class="content">
                @if($about)
                    <h1>
                        {!!  Str::limit($about->description, 150, '...') !!}
                    </h1>
                @endif
                <a class="custom-btn" href="{{ route('about') }}"> Davamını oxu </a>
            </div>
        </div>
    </section>

    <section class="events-blog mt-5">
        <div class="container mt-4">
            <h2 class="font-italic text-center">Tədbirlər</h2>
             <div class="row main-row">
                @if($events)
                       @foreach ($events as $event)
                    <div class="col-lg-4 col-md-6">
                        <div class="card p-3">
                            <img src="{{ config('constant.path') . $event->img }}" alt="{{ $event->title }}" class="card-img-top shadow bg-white rounded">
                            <div class="card-body">
                                <h5 class="card-title">{{ $event->title }}</h5>
                                <p class="card-text">{!!  Str::limit($event->description, 150, '...') !!}</p>
                                <h6>{{ $event->created_at }}</h6>
                                <a href="{{ route('eventShow', $event->id) }}" class="buton">Ətraflı</a>

                            </div>
                        </div>
                    </div>
                @endforeach
                @endif
            </div>
    </div></section>

    <section class="heroes-blog">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h2 class="font-italic text-white">Xəbərlər</h2>
                </div>
            </div>
            <div class="row d-flex blogs">

                @if($news)
                    @foreach ($news as $new)

                <div class="col-lg-6 d-flex align-items-stretch mb-2">
                    <div class="blog-start d-flex">
                        <img src="{{ config('constant.path') . $new->img }}" class="img-fluid"
                             alt="{{ $new->title }}" />
                        <div class="text p-4 bg-light">
                            <h3 class="mb-3 heading">
                                <a href="#">{{ $new->title }}</a>
                            </h3>
                            <p class="text-justify">{!!  Str::limit($new->description, 150, '...') !!}</p>
                            <a href="{{ route('newsDetail',$new->id) }}" class="custom-btn active">
                                Ətraflı
                                <i id="icon" class="fas fa-long-arrow-alt-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                @endforeach
                @endif

            </div>
        </div>
    </section>

    <section class="home-cards">
        <div class="container">
            <ul class="cards">
                @if($activities)
                    <li class="card">
                    <div>
                        <div class="column">
                           <img class="icon" src="{{ config('constant.path') . $activities->img }}" alt="" />
                            <div class="column-text">
                                <h2>Fəaliyyət</h2>
                            </div>
                        </div>
                        <div class="card-content">
                           <p>{!!  Str::limit($activities->description, 160, '...') !!}</p>
                        </div>
                    </div>
                    <div class="card-link-wrapper justify-content-center">
                        <a href="{{ route('activity') }}" class="custom-btn active">Learn More</a>
                    </div>
                </li>
                @endif
                
                @if($creation)
                    <li class="card">
                    <div>
                        <div class="column">
                           <img class="icon" src="{{ config('constant.path') . $creation->img }}" alt="" />
                            <div class="column-text">
                                <h2>Yaranma</h2>
                            </div>
                        </div>
                        <div class="card-content">
                           <p>{!!  Str::limit($creation->description, 160, '...') !!}</p>
                        </div>
                    </div>
                    <div class="card-link-wrapper justify-content-center">
                        <a href="{{ route('creation') }}" class="custom-btn active">Learn More</a>
                    </div>
                </li>
                @endif

                <li class="card">
                    <div>
                        <div class="column">
                            <img class="icon" src="https://naxcivantravel.com/wp-content/uploads/2021/01/ordubad.jpg" alt="" />
                            <div class="column-text">
                                <h2>Tusi klubu</h2>
                            </div>
                        </div>
                        <div class="card-content">
                            <p>
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam."
                            </p>
                        </div>
                    </div>
                    <div class="card-link-wrapper justify-content-center">
                        <a href="" class="custom-btn active">Learn More</a>
                    </div>
                </li>

                <li class="card">
                    <div>
                        <div class="column">
                            <img class="icon" src="https://naxcivantravel.com/wp-content/uploads/2021/01/ordubad.jpg" alt="" />
                            <div class="column-text">
                                <h2>İanə etmək</h2>
                            </div>
                        </div>
                        <div class="card-content">
                            <p>
                                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam."
                            </p>
                        </div>
                    </div>
                    <div class="card-link-wrapper justify-content-center">
                        <a href="" class="custom-btn active">Learn More</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>

@endsection
