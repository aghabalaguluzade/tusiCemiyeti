@extends('layouts.master')
@section('title', 'Şəhidlər')
@section('content')
<section class="slider-home tel">
    <div class="slider-body">
        <h1 class="slider-body-h1"> Ordubad Şəhidləri </h1>
        <div class="bg"></div>
        <div class="wrapper" id="wrapper">
            <div class="quote-row">
                @foreach ($heroes as $hero)
                    @if ( $loop->index == 1 )   <div class="quote-column col-active show">
                        <div class="col-inner">
                            <div class="author-meta">
                                <div class="box-image-inner image-cover">
                                    <img src="{{ config('constant.path') . $hero->img }}" alt="{{ $hero->name }}" title="{{ $hero->name }}" />
                                </div>
                                <div class="author-info">
                                    <div class="author-name">
                                        <p class="person-name">{{$hero->name}}</p>
                                    </div>
                                    <div class="author-status">
                                        <p class="person-title"> {{ $hero->job  }} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-wrapper">
                                <div class="quote-symbol">❛</div>
                                <div class="box-text-inner">
                                    <p>{!! $hero->description !!} </p>
                                </div>
                                <div class="quote-symbol">❜</div>
                            </div>
                        </div>
                    </div> @endif
                <div class="quote-column">
                    <div class="col-inner">
                        <div class="author-meta">
                            <div class="box-image-inner image-cover">
                                <img src="{{ config('constant.path') . $hero->img }}" alt="{{ $hero->name }}" title="{{ $hero->name }}" />
                            </div>
                            <div class="author-info">
                                <div class="author-name">
                                    <p class="person-name">{{$hero->name}}</p>
                                </div>
                                <div class="author-status">
                                    <p class="person-title"> {{ $hero->job  }} </p>
                                </div>
                            </div>
                        </div>
                        <div class="quote-wrapper">
                            <div class="quote-symbol">❛</div>
                            <div class="box-text-inner">
                                <p>{!! $hero->description !!} </p>
                            </div>
                            <div class="quote-symbol">❜</div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>



  <section class="hereos_table">
        <div class="container">
            <div class="row row--top-40">
                <div class="col-md-12 text-center pb-5">
                    <a href="https://az.wikipedia.org/wiki/%C4%B0kinci_Qaraba%C4%9F_m%C3%BCharib%C9%99si_%C5%9F%C9%99hidl%C9%99rinin_siyah%C4%B1s%C4%B1" target="_blank" class="row__title text-decoration-none">İkinci Qarabağ müharibəsi şəhidlərinin tam siyahısı</a>
                </div>
            </div>
            <div class="row row--top-20 custom_table">
                <h2 class="text-center"> Ordubad Şəhidləri </h2>
                <div class="col-md-12">
                    <div class="table-container">
                        <table class="table">
                            <thead class="table__thead">
                            <tr>
                                <th class="table__th">Soyad, Ad, Ata Adı</th>
                                <th class="table__th">Qoşun növü</th>
                                <th class="table__th">Doğum tarixi</th>
                                <th class="table__th">Vəfat tarixi</th>
                                <th class="table__th">Vəfat yeri</th>
                                <th class="table__th">Təltifləri</th>
                            </tr>
                            </thead>
                            <tbody class="table__tbody">
                            @if($heroes)
                                @foreach ($heroes as $hero)
                            <tr class="table-row table-row--chris">
                                <td class="table-row__td">
                                    <div class="table-row__img">
                                        <img src="{{ config('constant.path') . $hero->img }}" alt="{{ $hero->name }}" title="{{$hero->name}}" />
                                    </div>
                                    <div class="table-row__info">
                                        <p class="table-row__name"> {{$hero->name}} </p>
                                        <span class="table-row__small">{{$hero->job}}</span>
                                    </div>
                                </td>
                                <td data-column="Təltifləri" class="table-row__td">
                                    <div class="">
                                        <p class="table-row__policy"> {!! $hero->description !!} </p>
                                    </div>
                                </td>
                            </tr>
                                @endforeach
                            @else

                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')

    <script src="{{ asset('assets/js/slider.js') }}"></script>
@endsection
