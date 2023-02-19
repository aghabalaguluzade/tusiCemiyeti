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
                        <div class="col-inner">
                            <div class="author-meta">
                                <div class="box-image-inner image-cover">
                                    <img src="https://memorial.az/photos/2021/01/Asima-1612078402.jpg">
                                </div>
                                <div class="author-info">
                                    <div class="author-name">
                                        <p class="person-name">Asiman Aliyev</p>
                                    </div>
                                    <div class="author-status">
                                        <p class="person-title"> Şəhid Mayor </p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-wrapper">
                                <div class="quote-symbol">❛</div>
                                <div class="box-text-inner">
                                    <p>Asiman Əliyev 1987-ci il fevralın 1-də Ordubad rayonunu Düylün kəndində anadan olub.[1]
                                        1993-2001-ci illərdə Düylün kənd tam orta məktəbində, 2001-2004-cü illərdə isə Heydər Əliyev adına
                                        Hərbi Liseydə təhsil alıb. 2001-2004-cü illərdə Heydər Əliyev adına Azərbaycan Ali Hərbi Məktəbində
                                        (AAHM) "Motoatıcı Taqım Komandiri" ixtisası üzrə ali hərbi təhsil alıb. Ailəli idi. Üç övladı
                                        yadigar qaldı.</p>
                                </div>
                                <div class="quote-symbol">❜</div>
                            </div>
                        </div>
                    </div>
                    <div class="quote-column">
                        <div class="col-inner">
                            <div class="author-meta">
                                <div class="box-image-inner image-cover">
                                    <img
                                        src="https://upload.wikimedia.org/wikipedia/az/thumb/3/3d/A%C4%9Fababa_Abbasov.jpg/640px-A%C4%9Fababa_Abbasov.jpg">
                                </div>
                                <div class="author-info">
                                    <div class="author-name">
                                        <p class="person-name">Abbasov Ağababa Səfər</p>
                                    </div>
                                    <div class="author-status">
                                        <p class="person-title"> Əsgər </p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-wrapper">
                                <div class="quote-symbol">❛</div>
                                <div class="box-text-inner">
                                    <p>Uzunboyad, Şabran rayonu</p>
                                </div>
                                <div class="quote-symbol">❜</div>
                            </div>
                        </div>
                    </div>
                    <div class="quote-column ">
                        <div class="col-inner">
                            <div class="author-meta">
                                <div class="box-image-inner image-cover">
                                    <img src="https://upload.wikimedia.org/wikipedia/az/1/17/Abasov_Ayaz_Nizami_o%C4%9Flu.jpg">
                                </div>
                                <div class="author-info">
                                    <div class="author-name">
                                        <p class="person-name">Abbasov Ayaz</p>
                                    </div>
                                    <div class="author-status">
                                        <p class="person-title"> Əsgər </p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-wrapper">
                                <div class="quote-symbol">❛</div>
                                <div class="box-text-inner">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                        and scrambled it to make a type specimen book.</p>
                                </div>
                                <div class="quote-symbol">❜</div>
                            </div>
                        </div>
                    </div>
                    <div class="quote-column">
                        <div class="col-inner">
                            <div class="author-meta">
                                <div class="box-image-inner image-cover">
                                    <img
                                        src="data:image/jpeg;base64,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">
                                </div>
                                <div class="author-info">
                                    <div class="author-name">
                                        <p class="person-name">Abbasov Davud</p>
                                    </div>
                                    <div class="author-status">
                                        <p class="person-title"> Kiçik Gizir </p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-wrapper">
                                <div class="quote-symbol">❛</div>
                                <div class="box-text-inner">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                        and scrambled it to make a type specimen book.</p>
                                </div>
                                <div class="quote-symbol">❜</div>
                            </div>
                        </div>
                    </div>
                    <div class="quote-column">
                        <div class="col-inner">
                            <div class="author-meta">
                                <div class="box-image-inner image-cover">
                                    <img src="https://upload.wikimedia.org/wikipedia/az/8/80/Elvin_Abbasov_%28%C9%99sg%C9%99r%29.jpeg">
                                </div>
                                <div class="author-info">
                                    <div class="author-name">
                                        <p class="person-name">Abbasov Elvin</p>
                                    </div>
                                    <div class="author-status">
                                        <p class="person-title"> Əsgər </p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-wrapper">
                                <div class="quote-symbol">❛</div>
                                <div class="box-text-inner">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                        and scrambled it to make a type specimen book.</p>
                                </div>
                                <div class="quote-symbol">❜</div>
                            </div>
                        </div>
                    </div>
                    <div class="quote-column ">
                        <div class="col-inner">
                            <div class="author-meta">
                                <div class="box-image-inner image-cover">
                                    <img src="https://upload.wikimedia.org/wikipedia/az/e/e0/Ruslan_Abbasov.jpg">
                                </div>
                                <div class="author-info">
                                    <div class="author-name">
                                        <p class="person-name">Abbasov Ruslan Hikmət</p>
                                    </div>
                                    <div class="author-status">
                                        <p class="person-title"> Əsgər </p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-wrapper">
                                <div class="quote-symbol">❛</div>
                                <div class="box-text-inner">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                        and scrambled it to make a type specimen book.</p>
                                </div>
                                <div class="quote-symbol">❜</div>
                            </div>
                        </div>
                    </div>
                    <div class="quote-column">
                        <div class="col-inner">
                            <div class="author-meta">
                                <div class="box-image-inner image-cover">
                                    <img src="https://upload.wikimedia.org/wikipedia/az/3/37/Samir_Abasov.jpg">
                                </div>
                                <div class="author-info">
                                    <div class="author-name">
                                        <p class="person-name">Abasov Samir Adəm</p>
                                    </div>
                                    <div class="author-status">
                                        <p class="person-title"> Əsgər </p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-wrapper">
                                <div class="quote-symbol">❛</div>
                                <div class="box-text-inner">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                        and scrambled it to make a type specimen book.</p>
                                </div>
                                <div class="quote-symbol">❜</div>
                            </div>
                        </div>
                    </div>
                    <div class="quote-column">
                        <div class="col-inner">
                            <div class="author-meta">
                                <div class="box-image-inner image-cover">
                                    <img src="https://upload.wikimedia.org/wikipedia/az/3/37/Samir_Abasov.jpg">
                                </div>
                                <div class="author-info">
                                    <div class="author-name">
                                        <p class="person-name">Abasov Samir Adəm</p>
                                    </div>
                                    <div class="author-status">
                                        <p class="person-title"> Əsgər </p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-wrapper">
                                <div class="quote-symbol">❛</div>
                                <div class="box-text-inner">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                        and scrambled it to make a type specimen book.</p>
                                </div>
                                <div class="quote-symbol">❜</div>
                            </div>
                        </div>
                    </div>
                    <div class="quote-column">
                        <div class="col-inner">
                            <div class="author-meta">
                                <div class="box-image-inner image-cover">
                                    <img src="https://upload.wikimedia.org/wikipedia/az/8/80/Elvin_Abbasov_%28%C9%99sg%C9%99r%29.jpeg">
                                </div>
                                <div class="author-info">
                                    <div class="author-name">
                                        <p class="person-name">Abbasov Elvin</p>
                                    </div>
                                    <div class="author-status">
                                        <p class="person-title"> Əsgər </p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-wrapper">
                                <div class="quote-symbol">❛</div>
                                <div class="box-text-inner">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                                        and scrambled it to make a type specimen book.</p>
                                </div>
                                <div class="quote-symbol">❜</div>
                            </div>
                        </div>
                    </div>
                    <div class="quote-column">
                        <div class="col-inner">
                            <div class="author-meta">
                                <div class="box-image-inner image-cover">
                                    <img src="https://memorial.az/photos/2021/01/Asima-1612078402.jpg">
                                </div>
                                <div class="author-info">
                                    <div class="author-name">
                                        <p class="person-name">Asiman Aliyev</p>
                                    </div>
                                    <div class="author-status">
                                        <p class="person-title"> Şəhid Mayor </p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-wrapper">
                                <div class="quote-symbol">❛</div>
                                <div class="box-text-inner">
                                    <p>Asiman Əliyev 1987-ci il fevralın 1-də Ordubad rayonunu Düylün kəndində anadan olub.[1]
                                        1993-2001-ci illərdə Düylün kənd tam orta məktəbində, 2001-2004-cü illərdə isə Heydər Əliyev adına
                                        Hərbi Liseydə təhsil alıb. 2001-2004-cü illərdə Heydər Əliyev adına Azərbaycan Ali Hərbi Məktəbində
                                        (AAHM) "Motoatıcı Taqım Komandiri" ixtisası üzrə ali hərbi təhsil alıb. Ailəli idi. Üç övladı
                                        yadigar qaldı.</p>
                                </div>
                                <div class="quote-symbol">❜</div>
                            </div>
                        </div>
                    </div>
                    <div class="quote-column">
                        <div class="col-inner">
                            <div class="author-meta">
                                <div class="box-image-inner image-cover">
                                    <img src="https://memorial.az/photos/2021/01/Asima-1612078402.jpg">
                                </div>
                                <div class="author-info">
                                    <div class="author-name">
                                        <p class="person-name">Asiman Aliyev</p>
                                    </div>
                                    <div class="author-status">
                                        <p class="person-title"> Şəhid Mayor </p>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-wrapper">
                                <div class="quote-symbol">❛</div>
                                <div class="box-text-inner">
                                    <p>Asiman Əliyev 1987-ci il fevralın 1-də Ordubad rayonunu Düylün kəndində anadan olub.[1]
                                        1993-2001-ci illərdə Düylün kənd tam orta məktəbində, 2001-2004-cü illərdə isə Heydər Əliyev adına
                                        Hərbi Liseydə təhsil alıb. 2001-2004-cü illərdə Heydər Əliyev adına Azərbaycan Ali Hərbi Məktəbində
                                        (AAHM) "Motoatıcı Taqım Komandiri" ixtisası üzrə ali hərbi təhsil alıb. Ailəli idi. Üç övladı
                                        yadigar qaldı.</p>
                                </div>
                                <div class="quote-symbol">❜</div>
                            </div>
                        </div>
                    </div>
                </div>
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