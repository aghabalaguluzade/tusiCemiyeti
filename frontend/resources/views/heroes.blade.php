@extends('layouts.master')
@section('title', 'Şəhidlər')
@section('content')
    <section class="slider-home respons">
        <div class="slider-body">
            <h1 class="slider-body-h1"> Qürurlarımız </h1>
            <div class="bg"></div>
            <div class="wrapper" id="wrapper">
                <div class="quote-row">
                        
                        <div class="quote-column col-active show">
                        
                        @if($heroes)
                    @foreach ($heroes as $hero)
                        
                        <div class="col-inner">
                            <div class="author-meta">
                                <div class="box-image-inner image-cover">
                                    <img src="{{ config('constant.path') . $hero->img }}" alt="{{ $hero->name }}" />
                                </div>
                                <div class="author-info">
                                    <div class="author-name">
                                        <p class="person-name">{{ $hero->name }}</p>
                                    </div>
                                    <div class="author-status">
                                        <p class="person-title">{{ $hero->job }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-wrapper">
                                <div class="quote-symbol">❛</div>
                                <div class="box-text-inner">
                                    <p>{!! $hero->description !!}</p>
                                </div>
                                <div class="quote-symbol">❜</div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
                @else
                    
                @endif
                
            </div>
        </div>
    </section>

    <section class="hereos_table">
        <div class="container">
            <div class="row row--top-40">
                <div class="col-md-12">
                    <h2 class="row__title">İkinci Qarabağ müharibəsi şəhidlərinin siyahısı</h2>
                </div>
            </div>
            <div class="row row--top-20">
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
                            <tr class="table-row table-row--chris">
                                <td class="table-row__td">
                                    <div class="table-row__img">
                                        <img src="" />
                                    </div>
                                    <div class="table-row__info">
                                        <p class="table-row__name">Aliyev Asiman Vaqif</p>
                                        <span class="table-row__small">Mayor</span>
                                    </div>
                                </td>
                                <td data-column="Policy" class="table-row__td">
                                    <div class="">
                                        <p class="table-row__policy">Quru qoşunları</p>
                                    </div>
                                </td>
                                <td data-column="Policy status" class="table-row__td">
                                    <p class="table-row__p-status status--green status">01.02.1987</p>
                                </td>
                                <td data-column="Destination" class="table-row__td">
                                    7 noyabr 2020
                                </td>
                                <td  data-column="Status" class="table-row__td">
                                    <p class="table-row__status status--green status">Xocavənd</p>
                                </td>
                                <td data-column="Progress" class="table-row__td">
                                    <p class="table-row__progress status--blue status">Medallar</p>
                                </td>
                                </td>
                            </tr>
                            <tr class="table-row table-row--chris">
                                <td class="table-row__td">
                                    <div class="table-row__img"></div>
                                    <div class="table-row__info">
                                        <p class="table-row__name">Aliyev Asiman Vaqif</p>
                                        <span class="table-row__small">Mayor</span>
                                    </div>
                                </td>
                                <td data-column="Policy" class="table-row__td">
                                    <div class="">
                                        <p class="table-row__policy">Quru qoşunları</p>
                                    </div>
                                </td>
                                <td data-column="Policy status" class="table-row__td">
                                    <p class="table-row__p-status status--green status">01.02.1987</p>
                                </td>
                                <td data-column="Destination" class="table-row__td">
                                    7 noyabr 2020
                                </td>
                                <td  data-column="Status" class="table-row__td">
                                    <p class="table-row__status status--green status">Xocavənd</p>
                                </td>
                                <td data-column="Progress" class="table-row__td">
                                    <p class="table-row__progress status--blue status">Medallar</p>
                                </td>
                                </td>
                            </tr>
                            <tr class="table-row table-row--chris">
                                <td class="table-row__td">
                                    <div class="table-row__img"></div>
                                    <div class="table-row__info">
                                        <p class="table-row__name">Aliyev Asiman Vaqif</p>
                                        <span class="table-row__small">Mayor</span>
                                    </div>
                                </td>
                                <td data-column="Policy" class="table-row__td">
                                    <div class="">
                                        <p class="table-row__policy">Quru qoşunları</p>
                                    </div>
                                </td>
                                <td data-column="Policy status" class="table-row__td">
                                    <p class="table-row__p-status status--green status">01.02.1987</p>
                                </td>
                                <td data-column="Destination" class="table-row__td">
                                    7 noyabr 2020
                                </td>
                                <td  data-column="Status" class="table-row__td">
                                    <p class="table-row__status status--green status">Xocavənd</p>
                                </td>
                                <td data-column="Progress" class="table-row__td">
                                    <p class="table-row__progress status--blue status">Medallar</p>
                                </td>
                                </td>
                            </tr>
                            <tr class="table-row table-row--chris">
                                <td class="table-row__td">
                                    <div class="table-row__img"></div>
                                    <div class="table-row__info">
                                        <p class="table-row__name">Aliyev Asiman Vaqif</p>
                                        <span class="table-row__small">Mayor</span>
                                    </div>
                                </td>
                                <td data-column="Policy" class="table-row__td">
                                    <div class="">
                                        <p class="table-row__policy">Quru qoşunları</p>
                                    </div>
                                </td>
                                <td data-column="Policy status" class="table-row__td">
                                    <p class="table-row__p-status status--green status">01.02.1987</p>
                                </td>
                                <td data-column="Destination" class="table-row__td">
                                    7 noyabr 2020
                                </td>
                                <td  data-column="Status" class="table-row__td">
                                    <p class="table-row__status status--green status">Xocavənd</p>
                                </td>
                                <td data-column="Progress" class="table-row__td">
                                    <p class="table-row__progress status--blue status">Medallar</p>
                                </td>
                                </td>
                            </tr>
                            <tr class="table-row table-row--chris">
                                <td class="table-row__td">
                                    <div class="table-row__img"></div>
                                    <div class="table-row__info">
                                        <p class="table-row__name">Aliyev Asiman Vaqif</p>
                                        <span class="table-row__small">Mayor</span>
                                    </div>
                                </td>
                                <td data-column="Policy" class="table-row__td">
                                    <div class="">
                                        <p class="table-row__policy">Quru qoşunları</p>
                                    </div>
                                </td>
                                <td data-column="Policy status" class="table-row__td">
                                    <p class="table-row__p-status status--green status">01.02.1987</p>
                                </td>
                                <td data-column="Destination" class="table-row__td">
                                    7 noyabr 2020
                                </td>
                                <td  data-column="Status" class="table-row__td">
                                    <p class="table-row__status status--green status">Xocavənd</p>
                                </td>
                                <td data-column="Progress" class="table-row__td">
                                    <p class="table-row__progress status--blue status">Medallar</p>
                                </td>
                                </td>
                            </tr>

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