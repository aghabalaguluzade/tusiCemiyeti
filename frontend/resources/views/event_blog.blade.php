@extends('layouts.master')
@section('title', 'Tədbirlər')
@section('content')
    <section class="events-blog mt-5">
            <div class="container mt-4">
                <h3 class="font-italic text-center">Tədbirlər</h3>
                  <div class="row main-row">

                  @foreach ($data as $d)

                    <div class="col-lg-4 col-md-6">
                        <div class="card p-3">
                            <img src="{{ config('constant.path') . $d->img }}" alt="{{ $d->title }}"  class="card-img-top shadow bg-white rounded">
                            <div class="card-body">
                                <h5 class="card-title">{!!  Str::limit($d->title, 50, '...') !!}</h5>
                                <p class="card-text">{!! Str::limit($d->description,150,'...') !!}</p>
                                <h6>{{ $d->created_at }} </h6>
                            </div>
                            <div class="btn-div">
                            <a href="{{ route('eventShow', $d->id) }}" class="buton">Ətraflı</a>

</div>

                            </div>
                        </div>


                    @endforeach
                  </div>
                </div>
        </section>
@endsection
