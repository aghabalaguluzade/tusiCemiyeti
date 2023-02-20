@extends('layouts.master')
@section('title', 'Tanınmış şəxslər')
@section('content')
    <section class="famous-blog">
            <h2 class="font-italic pt-5">Tanınmış şəxslər</h2>
             <div class="container mt-5">
                <div class="row">
                    
                    @if($famousMen)
                        @foreach ($famousMen as $famous)
                            <div class="col-md-6">
                        <div class="blog row">
                            <div class="col-md-4 blog-img">
                                <img class="img-fluid" alt="{{ $famous->name }}" src="{{ config('constant.path') . $famous->img }}" />
                            </div>
                            <div class="col-md-8 blog-detail">
                                <h5 class="title">{{ $famous->name }}</h5>
                                <h5 class="position">{{ $famous->job }}</h5>
                                <p class="mail">{!! Str::limit($famous->description, 120, '...') !!}</p>
                            </div>
                        </div>
                    </div>
                        @endforeach
                    @endif

                </div>
             </div>
        </section>
@endsection