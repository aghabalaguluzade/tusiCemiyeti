@extends('layouts.master')
@if(request()->routeIs('history'))
@section('title', 'Ordubad Tarixi')
@endif
@if(request()->routeIs('monuments'))
@section('title', 'Ordubad Abidələri')
@endif
@if(request()->routeIs('folklore'))
@section('title', 'Ordubad Folkloru')
@endif
@if(request()->routeIs('customs_traditions'))
@section('title', 'Ordubad Adət və Ənənələri')
@endif
@if(request()->routeIs('nature'))
@section('title', 'Ordubad Təbiəti')
@endif
@if(request()->routeIs('kitchen'))
@section('title', 'Ordubad Mətbəxi')
@endif
@if(request()->routeIs('flora'))
@section('title', 'Ordubad Florası')
@endif
@if(request()->routeIs('tourism'))
@section('title', 'Ordubad Turizmi')
@endif
@if(request()->routeIs('fauna'))
@section('title', 'Ordubad Faunası')
@endif
@if(request()->routeIs('hotel_restaurant'))
@section('title', 'Ordubad Otel-Restoran')
@endif
@section('content')
    @if(request()->routeIs('history'))
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-12 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Tarixi</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="https://img.nuhcixan.az/news/2018/09/XarabaGilan6.jpg?v=MjAxOC0wOS0wMiAxNTozMDoxMw==" title="" alt="">
                                </div>
                             
                                <div class="article-content">
                                    <p>Xarabagilan, Kiran, Gilan və ya Giran – Ordubad şəhəri yaxınlığında orta əsrlərə aid
                                        şəhər xarabalığıdır. Abidə Ordubad şəhərindən 16-17 kilometr qərbdə,
                                        Naxçıvan-Ordubad avtomobil yolunun şimalında, Gilançayın sol sahilindədir. Böyük
                                        Azərbaycan alimləri Hinduşah Naxçıvani və Məhəmməd Naxçıvani bu şəhərdə doğulmuş,
                                        böyümüş və yaşamışlar.
        
                                        Tədqiqatlar nəticəsində müəyyən edilmişdir ki, Xarabagilan ərazisində şəhər
                                        mədəniyyəti ilk antik dövrdə V–IV əsrlərdə yaranmış, orta əsrlərdə isə bu şəhər
                                        Azərbaycanın mühüm ticarət və sənətkarlıq mərkəzlərindən biri olmuşdur.
                                        Tədqiqatçılar Xarabagilan abidəsinin monqolların Azərbaycana yürüşü zamanı
                                        dağıdılmış Kiran şəhərinin qalıqları olduğunu müəyyənləşdirmişlər.
        
                                        İbn əl-Əsir (XIII əsr), Yaqut Həməvi (XIII əsr), Zeynəddin Qəzvini (XIV əsr),
                                        Məhəmməd ibn Həmdullah Naxçıvani və başqalarının əsərlərində Gilanın Azərbaycanın
                                        qədim və əzəmətli şəhərlərindən biri olması haqqında məlumatlar vardır. Karvan yolu
                                        üstündə yerləşən şəhərdə sənətkarlıq, ticarət, əmtəə-pul əlaqələri geniş inkişaf
                                        etmişdi. Şəhərdə “Giran” adı ilə gümüş və mis sikkələr kəsilmişdir.
        
                                        XIII əsrdə ciddi dağıntılara məruz qalan şəhər hələ tam bərpa olunmamış, qısa müddət
                                        sonra – XIV əsrin sonlarında Əmir Teymur tərəfindən dağıdılmış, Səfəvilər
                                        sülaləsindən I Şah Abbasın hakimiyyəti dövründə isə tamamilə tənəzzülə uğramışdır.
                                        Şəhərin əhalisi Ordubad rayonunun Aşağı və Yuxarı Aza, Darkənd kəndlərinə köçmüşdür.
        
                                        Xarabagilan ərazisində ilk tədqiqatlar 1926-1929-cu illərdə aparılmışdır. 1976-cı
                                        ildən şəhər ərazisində başlanılmış arxeoloji tədqiqatlar isə fasilələrlə hələ də
                                        davam etdirilməkdədir. Şəhərin ərazisi 100 hektardan çoxdur. Abidənin qərb tərəfində
                                        e.ə. II-I minilliklərə aid yaşayış məskəni və nekropol aşkar edilmişdir.
        
                                        Xarabagilanın Narınqalası və məhəllələri qala divarları ilə əhatə olunmuşdur.
                                        Narınqalanın sahəsi 10 hektardan çoxdur. Qala divarları dördkünc və dairəvi
                                        bürclərlə möhkəmləndirilmişdir. Daş, çiy və bişmiş kərpicdən yaşayış evləri,
                                        karvansaralar, türbələr, məscid, habelə sənətkarlıq ocaqları və sair tikinti
                                        qalıqları aşkar edilmiş, çoxlu maddi-mədəniyyət nümunələri – şirli və şirsiz qablar,
                                        şüşə və metal məmulatı, sikkələr, o cümlədən Roma qızıl pulları və sair tapılmışdır.
                                        Tapıntılar arasında XII-XIV əsrlərə aid gil qab və memarlıq abidələrinin qalıqları
                                        üzərində ərəb əlifbasının kufi və nəsx xəttləri ilə yazılara da rast gəlinib.
        
                                        Xarabagilan ərazisində aparılan arxeoloji tədqiqatlar zamanı şəhərin qala divarının
                                        cənub – şərqində, divarın xarici tərəfində II-III əsrlərə aid edilən bir qəbirdən
                                        qədim arami yazısı ilə yazılmış mətn aşkarlanıb.
        
                                        Arami yazısı Ərəbistan yarımadasında yaşamış və e.ə. II minilliyin sonlarında Ön
                                        Asiyaya yayılaraq, Suriya və Şimali Mesopotamiya ərazisində kiçik dövlətlər yaratmış
                                        sami mənşəli tayfalardan olan aramilərin əlifbası olub, e.ə. I minilliyin
                                        əvvəllərində Finikiya əlifbası əsasında yaradılmışdır.
        
                                        Xarabagilan ərazisindəki qəbirdən aşkar edilmiş təkqulplu saxsı qabın üzərindəki
                                        arami yazısı qara rənglə həkk edilmişdir və dualardan ibarətdir.
        
                                        Bütün bunlar onu göstərir ki, Xaraba Gilan zamanında yetərincə inkişaf etmiş bir
                                        şəhər, hətta mədəniyyət mərkəzi olub. Yaxın Şərqin və dünyanın bir sıra ölkələri ilə
                                        sıx iqtisadi, ticarət əlaqələrində olmuş və öz mədəniyyətini formalaşdırmaqla
                                        yanaşı, onların da mədəniyyətindən istifadədə tolerantlıq nümayiş etdirmişdir.</p>
                                </div>
                            </article>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
    @endif



    @if(request()->routeIs('monuments'))
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-12 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Abidələri</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="https://img.nuhcixan.az/news/2018/09/XarabaGilan6.jpg?v=MjAxOC0wOS0wMiAxNTozMDoxMw==" title="" alt="">
                                </div>
                             
                                <div class="article-content">
                                    <p>Xarabagilan, Kiran, Gilan və ya Giran – Ordubad şəhəri yaxınlığında orta əsrlərə aid
                                        şəhər xarabalığıdır. Abidə Ordubad şəhərindən 16-17 kilometr qərbdə,
                                        Naxçıvan-Ordubad avtomobil yolunun şimalında, Gilançayın sol sahilindədir. Böyük
                                        Azərbaycan alimləri Hinduşah Naxçıvani və Məhəmməd Naxçıvani bu şəhərdə doğulmuş,
                                        böyümüş və yaşamışlar.
        
                                        Tədqiqatlar nəticəsində müəyyən edilmişdir ki, Xarabagilan ərazisində şəhər
                                        mədəniyyəti ilk antik dövrdə V–IV əsrlərdə yaranmış, orta əsrlərdə isə bu şəhər
                                        Azərbaycanın mühüm ticarət və sənətkarlıq mərkəzlərindən biri olmuşdur.
                                        Tədqiqatçılar Xarabagilan abidəsinin monqolların Azərbaycana yürüşü zamanı
                                        dağıdılmış Kiran şəhərinin qalıqları olduğunu müəyyənləşdirmişlər.
        
                                        İbn əl-Əsir (XIII əsr), Yaqut Həməvi (XIII əsr), Zeynəddin Qəzvini (XIV əsr),
                                        Məhəmməd ibn Həmdullah Naxçıvani və başqalarının əsərlərində Gilanın Azərbaycanın
                                        qədim və əzəmətli şəhərlərindən biri olması haqqında məlumatlar vardır. Karvan yolu
                                        üstündə yerləşən şəhərdə sənətkarlıq, ticarət, əmtəə-pul əlaqələri geniş inkişaf
                                        etmişdi. Şəhərdə “Giran” adı ilə gümüş və mis sikkələr kəsilmişdir.
        
                                        XIII əsrdə ciddi dağıntılara məruz qalan şəhər hələ tam bərpa olunmamış, qısa müddət
                                        sonra – XIV əsrin sonlarında Əmir Teymur tərəfindən dağıdılmış, Səfəvilər
                                        sülaləsindən I Şah Abbasın hakimiyyəti dövründə isə tamamilə tənəzzülə uğramışdır.
                                        Şəhərin əhalisi Ordubad rayonunun Aşağı və Yuxarı Aza, Darkənd kəndlərinə köçmüşdür.
        
                                        Xarabagilan ərazisində ilk tədqiqatlar 1926-1929-cu illərdə aparılmışdır. 1976-cı
                                        ildən şəhər ərazisində başlanılmış arxeoloji tədqiqatlar isə fasilələrlə hələ də
                                        davam etdirilməkdədir. Şəhərin ərazisi 100 hektardan çoxdur. Abidənin qərb tərəfində
                                        e.ə. II-I minilliklərə aid yaşayış məskəni və nekropol aşkar edilmişdir.
        
                                        Xarabagilanın Narınqalası və məhəllələri qala divarları ilə əhatə olunmuşdur.
                                        Narınqalanın sahəsi 10 hektardan çoxdur. Qala divarları dördkünc və dairəvi
                                        bürclərlə möhkəmləndirilmişdir. Daş, çiy və bişmiş kərpicdən yaşayış evləri,
                                        karvansaralar, türbələr, məscid, habelə sənətkarlıq ocaqları və sair tikinti
                                        qalıqları aşkar edilmiş, çoxlu maddi-mədəniyyət nümunələri – şirli və şirsiz qablar,
                                        şüşə və metal məmulatı, sikkələr, o cümlədən Roma qızıl pulları və sair tapılmışdır.
                                        Tapıntılar arasında XII-XIV əsrlərə aid gil qab və memarlıq abidələrinin qalıqları
                                        üzərində ərəb əlifbasının kufi və nəsx xəttləri ilə yazılara da rast gəlinib.
        
                                        Xarabagilan ərazisində aparılan arxeoloji tədqiqatlar zamanı şəhərin qala divarının
                                        cənub – şərqində, divarın xarici tərəfində II-III əsrlərə aid edilən bir qəbirdən
                                        qədim arami yazısı ilə yazılmış mətn aşkarlanıb.
        
                                        Arami yazısı Ərəbistan yarımadasında yaşamış və e.ə. II minilliyin sonlarında Ön
                                        Asiyaya yayılaraq, Suriya və Şimali Mesopotamiya ərazisində kiçik dövlətlər yaratmış
                                        sami mənşəli tayfalardan olan aramilərin əlifbası olub, e.ə. I minilliyin
                                        əvvəllərində Finikiya əlifbası əsasında yaradılmışdır.
        
                                        Xarabagilan ərazisindəki qəbirdən aşkar edilmiş təkqulplu saxsı qabın üzərindəki
                                        arami yazısı qara rənglə həkk edilmişdir və dualardan ibarətdir.
        
                                        Bütün bunlar onu göstərir ki, Xaraba Gilan zamanında yetərincə inkişaf etmiş bir
                                        şəhər, hətta mədəniyyət mərkəzi olub. Yaxın Şərqin və dünyanın bir sıra ölkələri ilə
                                        sıx iqtisadi, ticarət əlaqələrində olmuş və öz mədəniyyətini formalaşdırmaqla
                                        yanaşı, onların da mədəniyyətindən istifadədə tolerantlıq nümayiş etdirmişdir.</p>
                                </div>
                            </article>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
    @endif



    @if(request()->routeIs('folklore'))
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-12 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Folkloru</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="https://img.nuhcixan.az/news/2018/09/XarabaGilan6.jpg?v=MjAxOC0wOS0wMiAxNTozMDoxMw==" title="" alt="">
                                </div>
                             
                                <div class="article-content">
                                    <p>Xarabagilan, Kiran, Gilan və ya Giran – Ordubad şəhəri yaxınlığında orta əsrlərə aid
                                        şəhər xarabalığıdır. Abidə Ordubad şəhərindən 16-17 kilometr qərbdə,
                                        Naxçıvan-Ordubad avtomobil yolunun şimalında, Gilançayın sol sahilindədir. Böyük
                                        Azərbaycan alimləri Hinduşah Naxçıvani və Məhəmməd Naxçıvani bu şəhərdə doğulmuş,
                                        böyümüş və yaşamışlar.
        
                                        Tədqiqatlar nəticəsində müəyyən edilmişdir ki, Xarabagilan ərazisində şəhər
                                        mədəniyyəti ilk antik dövrdə V–IV əsrlərdə yaranmış, orta əsrlərdə isə bu şəhər
                                        Azərbaycanın mühüm ticarət və sənətkarlıq mərkəzlərindən biri olmuşdur.
                                        Tədqiqatçılar Xarabagilan abidəsinin monqolların Azərbaycana yürüşü zamanı
                                        dağıdılmış Kiran şəhərinin qalıqları olduğunu müəyyənləşdirmişlər.
        
                                        İbn əl-Əsir (XIII əsr), Yaqut Həməvi (XIII əsr), Zeynəddin Qəzvini (XIV əsr),
                                        Məhəmməd ibn Həmdullah Naxçıvani və başqalarının əsərlərində Gilanın Azərbaycanın
                                        qədim və əzəmətli şəhərlərindən biri olması haqqında məlumatlar vardır. Karvan yolu
                                        üstündə yerləşən şəhərdə sənətkarlıq, ticarət, əmtəə-pul əlaqələri geniş inkişaf
                                        etmişdi. Şəhərdə “Giran” adı ilə gümüş və mis sikkələr kəsilmişdir.
        
                                        XIII əsrdə ciddi dağıntılara məruz qalan şəhər hələ tam bərpa olunmamış, qısa müddət
                                        sonra – XIV əsrin sonlarında Əmir Teymur tərəfindən dağıdılmış, Səfəvilər
                                        sülaləsindən I Şah Abbasın hakimiyyəti dövründə isə tamamilə tənəzzülə uğramışdır.
                                        Şəhərin əhalisi Ordubad rayonunun Aşağı və Yuxarı Aza, Darkənd kəndlərinə köçmüşdür.
        
                                        Xarabagilan ərazisində ilk tədqiqatlar 1926-1929-cu illərdə aparılmışdır. 1976-cı
                                        ildən şəhər ərazisində başlanılmış arxeoloji tədqiqatlar isə fasilələrlə hələ də
                                        davam etdirilməkdədir. Şəhərin ərazisi 100 hektardan çoxdur. Abidənin qərb tərəfində
                                        e.ə. II-I minilliklərə aid yaşayış məskəni və nekropol aşkar edilmişdir.
        
                                        Xarabagilanın Narınqalası və məhəllələri qala divarları ilə əhatə olunmuşdur.
                                        Narınqalanın sahəsi 10 hektardan çoxdur. Qala divarları dördkünc və dairəvi
                                        bürclərlə möhkəmləndirilmişdir. Daş, çiy və bişmiş kərpicdən yaşayış evləri,
                                        karvansaralar, türbələr, məscid, habelə sənətkarlıq ocaqları və sair tikinti
                                        qalıqları aşkar edilmiş, çoxlu maddi-mədəniyyət nümunələri – şirli və şirsiz qablar,
                                        şüşə və metal məmulatı, sikkələr, o cümlədən Roma qızıl pulları və sair tapılmışdır.
                                        Tapıntılar arasında XII-XIV əsrlərə aid gil qab və memarlıq abidələrinin qalıqları
                                        üzərində ərəb əlifbasının kufi və nəsx xəttləri ilə yazılara da rast gəlinib.
        
                                        Xarabagilan ərazisində aparılan arxeoloji tədqiqatlar zamanı şəhərin qala divarının
                                        cənub – şərqində, divarın xarici tərəfində II-III əsrlərə aid edilən bir qəbirdən
                                        qədim arami yazısı ilə yazılmış mətn aşkarlanıb.
        
                                        Arami yazısı Ərəbistan yarımadasında yaşamış və e.ə. II minilliyin sonlarında Ön
                                        Asiyaya yayılaraq, Suriya və Şimali Mesopotamiya ərazisində kiçik dövlətlər yaratmış
                                        sami mənşəli tayfalardan olan aramilərin əlifbası olub, e.ə. I minilliyin
                                        əvvəllərində Finikiya əlifbası əsasında yaradılmışdır.
        
                                        Xarabagilan ərazisindəki qəbirdən aşkar edilmiş təkqulplu saxsı qabın üzərindəki
                                        arami yazısı qara rənglə həkk edilmişdir və dualardan ibarətdir.
        
                                        Bütün bunlar onu göstərir ki, Xaraba Gilan zamanında yetərincə inkişaf etmiş bir
                                        şəhər, hətta mədəniyyət mərkəzi olub. Yaxın Şərqin və dünyanın bir sıra ölkələri ilə
                                        sıx iqtisadi, ticarət əlaqələrində olmuş və öz mədəniyyətini formalaşdırmaqla
                                        yanaşı, onların da mədəniyyətindən istifadədə tolerantlıq nümayiş etdirmişdir.</p>
                                </div>
                            </article>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
    @endif



    @if(request()->routeIs('customs_traditions'))
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-12 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Adət və Ənənələri</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="https://img.nuhcixan.az/news/2018/09/XarabaGilan6.jpg?v=MjAxOC0wOS0wMiAxNTozMDoxMw==" title="" alt="">
                                </div>
                             
                                <div class="article-content">
                                    <p>Xarabagilan, Kiran, Gilan və ya Giran – Ordubad şəhəri yaxınlığında orta əsrlərə aid
                                        şəhər xarabalığıdır. Abidə Ordubad şəhərindən 16-17 kilometr qərbdə,
                                        Naxçıvan-Ordubad avtomobil yolunun şimalında, Gilançayın sol sahilindədir. Böyük
                                        Azərbaycan alimləri Hinduşah Naxçıvani və Məhəmməd Naxçıvani bu şəhərdə doğulmuş,
                                        böyümüş və yaşamışlar.
        
                                        Tədqiqatlar nəticəsində müəyyən edilmişdir ki, Xarabagilan ərazisində şəhər
                                        mədəniyyəti ilk antik dövrdə V–IV əsrlərdə yaranmış, orta əsrlərdə isə bu şəhər
                                        Azərbaycanın mühüm ticarət və sənətkarlıq mərkəzlərindən biri olmuşdur.
                                        Tədqiqatçılar Xarabagilan abidəsinin monqolların Azərbaycana yürüşü zamanı
                                        dağıdılmış Kiran şəhərinin qalıqları olduğunu müəyyənləşdirmişlər.
        
                                        İbn əl-Əsir (XIII əsr), Yaqut Həməvi (XIII əsr), Zeynəddin Qəzvini (XIV əsr),
                                        Məhəmməd ibn Həmdullah Naxçıvani və başqalarının əsərlərində Gilanın Azərbaycanın
                                        qədim və əzəmətli şəhərlərindən biri olması haqqında məlumatlar vardır. Karvan yolu
                                        üstündə yerləşən şəhərdə sənətkarlıq, ticarət, əmtəə-pul əlaqələri geniş inkişaf
                                        etmişdi. Şəhərdə “Giran” adı ilə gümüş və mis sikkələr kəsilmişdir.
        
                                        XIII əsrdə ciddi dağıntılara məruz qalan şəhər hələ tam bərpa olunmamış, qısa müddət
                                        sonra – XIV əsrin sonlarında Əmir Teymur tərəfindən dağıdılmış, Səfəvilər
                                        sülaləsindən I Şah Abbasın hakimiyyəti dövründə isə tamamilə tənəzzülə uğramışdır.
                                        Şəhərin əhalisi Ordubad rayonunun Aşağı və Yuxarı Aza, Darkənd kəndlərinə köçmüşdür.
        
                                        Xarabagilan ərazisində ilk tədqiqatlar 1926-1929-cu illərdə aparılmışdır. 1976-cı
                                        ildən şəhər ərazisində başlanılmış arxeoloji tədqiqatlar isə fasilələrlə hələ də
                                        davam etdirilməkdədir. Şəhərin ərazisi 100 hektardan çoxdur. Abidənin qərb tərəfində
                                        e.ə. II-I minilliklərə aid yaşayış məskəni və nekropol aşkar edilmişdir.
        
                                        Xarabagilanın Narınqalası və məhəllələri qala divarları ilə əhatə olunmuşdur.
                                        Narınqalanın sahəsi 10 hektardan çoxdur. Qala divarları dördkünc və dairəvi
                                        bürclərlə möhkəmləndirilmişdir. Daş, çiy və bişmiş kərpicdən yaşayış evləri,
                                        karvansaralar, türbələr, məscid, habelə sənətkarlıq ocaqları və sair tikinti
                                        qalıqları aşkar edilmiş, çoxlu maddi-mədəniyyət nümunələri – şirli və şirsiz qablar,
                                        şüşə və metal məmulatı, sikkələr, o cümlədən Roma qızıl pulları və sair tapılmışdır.
                                        Tapıntılar arasında XII-XIV əsrlərə aid gil qab və memarlıq abidələrinin qalıqları
                                        üzərində ərəb əlifbasının kufi və nəsx xəttləri ilə yazılara da rast gəlinib.
        
                                        Xarabagilan ərazisində aparılan arxeoloji tədqiqatlar zamanı şəhərin qala divarının
                                        cənub – şərqində, divarın xarici tərəfində II-III əsrlərə aid edilən bir qəbirdən
                                        qədim arami yazısı ilə yazılmış mətn aşkarlanıb.
        
                                        Arami yazısı Ərəbistan yarımadasında yaşamış və e.ə. II minilliyin sonlarında Ön
                                        Asiyaya yayılaraq, Suriya və Şimali Mesopotamiya ərazisində kiçik dövlətlər yaratmış
                                        sami mənşəli tayfalardan olan aramilərin əlifbası olub, e.ə. I minilliyin
                                        əvvəllərində Finikiya əlifbası əsasında yaradılmışdır.
        
                                        Xarabagilan ərazisindəki qəbirdən aşkar edilmiş təkqulplu saxsı qabın üzərindəki
                                        arami yazısı qara rənglə həkk edilmişdir və dualardan ibarətdir.
        
                                        Bütün bunlar onu göstərir ki, Xaraba Gilan zamanında yetərincə inkişaf etmiş bir
                                        şəhər, hətta mədəniyyət mərkəzi olub. Yaxın Şərqin və dünyanın bir sıra ölkələri ilə
                                        sıx iqtisadi, ticarət əlaqələrində olmuş və öz mədəniyyətini formalaşdırmaqla
                                        yanaşı, onların da mədəniyyətindən istifadədə tolerantlıq nümayiş etdirmişdir.</p>
                                </div>
                            </article>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
    @endif


    

    @if(request()->routeIs('nature'))
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-12 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Təbiəti</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="https://img.nuhcixan.az/news/2018/09/XarabaGilan6.jpg?v=MjAxOC0wOS0wMiAxNTozMDoxMw==" title="" alt="">
                                </div>
                             
                                <div class="article-content">
                                    <p>Xarabagilan, Kiran, Gilan və ya Giran – Ordubad şəhəri yaxınlığında orta əsrlərə aid
                                        şəhər xarabalığıdır. Abidə Ordubad şəhərindən 16-17 kilometr qərbdə,
                                        Naxçıvan-Ordubad avtomobil yolunun şimalında, Gilançayın sol sahilindədir. Böyük
                                        Azərbaycan alimləri Hinduşah Naxçıvani və Məhəmməd Naxçıvani bu şəhərdə doğulmuş,
                                        böyümüş və yaşamışlar.
        
                                        Tədqiqatlar nəticəsində müəyyən edilmişdir ki, Xarabagilan ərazisində şəhər
                                        mədəniyyəti ilk antik dövrdə V–IV əsrlərdə yaranmış, orta əsrlərdə isə bu şəhər
                                        Azərbaycanın mühüm ticarət və sənətkarlıq mərkəzlərindən biri olmuşdur.
                                        Tədqiqatçılar Xarabagilan abidəsinin monqolların Azərbaycana yürüşü zamanı
                                        dağıdılmış Kiran şəhərinin qalıqları olduğunu müəyyənləşdirmişlər.
        
                                        İbn əl-Əsir (XIII əsr), Yaqut Həməvi (XIII əsr), Zeynəddin Qəzvini (XIV əsr),
                                        Məhəmməd ibn Həmdullah Naxçıvani və başqalarının əsərlərində Gilanın Azərbaycanın
                                        qədim və əzəmətli şəhərlərindən biri olması haqqında məlumatlar vardır. Karvan yolu
                                        üstündə yerləşən şəhərdə sənətkarlıq, ticarət, əmtəə-pul əlaqələri geniş inkişaf
                                        etmişdi. Şəhərdə “Giran” adı ilə gümüş və mis sikkələr kəsilmişdir.
        
                                        XIII əsrdə ciddi dağıntılara məruz qalan şəhər hələ tam bərpa olunmamış, qısa müddət
                                        sonra – XIV əsrin sonlarında Əmir Teymur tərəfindən dağıdılmış, Səfəvilər
                                        sülaləsindən I Şah Abbasın hakimiyyəti dövründə isə tamamilə tənəzzülə uğramışdır.
                                        Şəhərin əhalisi Ordubad rayonunun Aşağı və Yuxarı Aza, Darkənd kəndlərinə köçmüşdür.
        
                                        Xarabagilan ərazisində ilk tədqiqatlar 1926-1929-cu illərdə aparılmışdır. 1976-cı
                                        ildən şəhər ərazisində başlanılmış arxeoloji tədqiqatlar isə fasilələrlə hələ də
                                        davam etdirilməkdədir. Şəhərin ərazisi 100 hektardan çoxdur. Abidənin qərb tərəfində
                                        e.ə. II-I minilliklərə aid yaşayış məskəni və nekropol aşkar edilmişdir.
        
                                        Xarabagilanın Narınqalası və məhəllələri qala divarları ilə əhatə olunmuşdur.
                                        Narınqalanın sahəsi 10 hektardan çoxdur. Qala divarları dördkünc və dairəvi
                                        bürclərlə möhkəmləndirilmişdir. Daş, çiy və bişmiş kərpicdən yaşayış evləri,
                                        karvansaralar, türbələr, məscid, habelə sənətkarlıq ocaqları və sair tikinti
                                        qalıqları aşkar edilmiş, çoxlu maddi-mədəniyyət nümunələri – şirli və şirsiz qablar,
                                        şüşə və metal məmulatı, sikkələr, o cümlədən Roma qızıl pulları və sair tapılmışdır.
                                        Tapıntılar arasında XII-XIV əsrlərə aid gil qab və memarlıq abidələrinin qalıqları
                                        üzərində ərəb əlifbasının kufi və nəsx xəttləri ilə yazılara da rast gəlinib.
        
                                        Xarabagilan ərazisində aparılan arxeoloji tədqiqatlar zamanı şəhərin qala divarının
                                        cənub – şərqində, divarın xarici tərəfində II-III əsrlərə aid edilən bir qəbirdən
                                        qədim arami yazısı ilə yazılmış mətn aşkarlanıb.
        
                                        Arami yazısı Ərəbistan yarımadasında yaşamış və e.ə. II minilliyin sonlarında Ön
                                        Asiyaya yayılaraq, Suriya və Şimali Mesopotamiya ərazisində kiçik dövlətlər yaratmış
                                        sami mənşəli tayfalardan olan aramilərin əlifbası olub, e.ə. I minilliyin
                                        əvvəllərində Finikiya əlifbası əsasında yaradılmışdır.
        
                                        Xarabagilan ərazisindəki qəbirdən aşkar edilmiş təkqulplu saxsı qabın üzərindəki
                                        arami yazısı qara rənglə həkk edilmişdir və dualardan ibarətdir.
        
                                        Bütün bunlar onu göstərir ki, Xaraba Gilan zamanında yetərincə inkişaf etmiş bir
                                        şəhər, hətta mədəniyyət mərkəzi olub. Yaxın Şərqin və dünyanın bir sıra ölkələri ilə
                                        sıx iqtisadi, ticarət əlaqələrində olmuş və öz mədəniyyətini formalaşdırmaqla
                                        yanaşı, onların da mədəniyyətindən istifadədə tolerantlıq nümayiş etdirmişdir.</p>
                                </div>
                            </article>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
    @endif



    
    @if(request()->routeIs('kitchen'))
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-12 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Mətbəxi</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="https://img.nuhcixan.az/news/2018/09/XarabaGilan6.jpg?v=MjAxOC0wOS0wMiAxNTozMDoxMw==" title="" alt="">
                                </div>
                             
                                <div class="article-content">
                                    <p>Xarabagilan, Kiran, Gilan və ya Giran – Ordubad şəhəri yaxınlığında orta əsrlərə aid
                                        şəhər xarabalığıdır. Abidə Ordubad şəhərindən 16-17 kilometr qərbdə,
                                        Naxçıvan-Ordubad avtomobil yolunun şimalında, Gilançayın sol sahilindədir. Böyük
                                        Azərbaycan alimləri Hinduşah Naxçıvani və Məhəmməd Naxçıvani bu şəhərdə doğulmuş,
                                        böyümüş və yaşamışlar.
        
                                        Tədqiqatlar nəticəsində müəyyən edilmişdir ki, Xarabagilan ərazisində şəhər
                                        mədəniyyəti ilk antik dövrdə V–IV əsrlərdə yaranmış, orta əsrlərdə isə bu şəhər
                                        Azərbaycanın mühüm ticarət və sənətkarlıq mərkəzlərindən biri olmuşdur.
                                        Tədqiqatçılar Xarabagilan abidəsinin monqolların Azərbaycana yürüşü zamanı
                                        dağıdılmış Kiran şəhərinin qalıqları olduğunu müəyyənləşdirmişlər.
        
                                        İbn əl-Əsir (XIII əsr), Yaqut Həməvi (XIII əsr), Zeynəddin Qəzvini (XIV əsr),
                                        Məhəmməd ibn Həmdullah Naxçıvani və başqalarının əsərlərində Gilanın Azərbaycanın
                                        qədim və əzəmətli şəhərlərindən biri olması haqqında məlumatlar vardır. Karvan yolu
                                        üstündə yerləşən şəhərdə sənətkarlıq, ticarət, əmtəə-pul əlaqələri geniş inkişaf
                                        etmişdi. Şəhərdə “Giran” adı ilə gümüş və mis sikkələr kəsilmişdir.
        
                                        XIII əsrdə ciddi dağıntılara məruz qalan şəhər hələ tam bərpa olunmamış, qısa müddət
                                        sonra – XIV əsrin sonlarında Əmir Teymur tərəfindən dağıdılmış, Səfəvilər
                                        sülaləsindən I Şah Abbasın hakimiyyəti dövründə isə tamamilə tənəzzülə uğramışdır.
                                        Şəhərin əhalisi Ordubad rayonunun Aşağı və Yuxarı Aza, Darkənd kəndlərinə köçmüşdür.
        
                                        Xarabagilan ərazisində ilk tədqiqatlar 1926-1929-cu illərdə aparılmışdır. 1976-cı
                                        ildən şəhər ərazisində başlanılmış arxeoloji tədqiqatlar isə fasilələrlə hələ də
                                        davam etdirilməkdədir. Şəhərin ərazisi 100 hektardan çoxdur. Abidənin qərb tərəfində
                                        e.ə. II-I minilliklərə aid yaşayış məskəni və nekropol aşkar edilmişdir.
        
                                        Xarabagilanın Narınqalası və məhəllələri qala divarları ilə əhatə olunmuşdur.
                                        Narınqalanın sahəsi 10 hektardan çoxdur. Qala divarları dördkünc və dairəvi
                                        bürclərlə möhkəmləndirilmişdir. Daş, çiy və bişmiş kərpicdən yaşayış evləri,
                                        karvansaralar, türbələr, məscid, habelə sənətkarlıq ocaqları və sair tikinti
                                        qalıqları aşkar edilmiş, çoxlu maddi-mədəniyyət nümunələri – şirli və şirsiz qablar,
                                        şüşə və metal məmulatı, sikkələr, o cümlədən Roma qızıl pulları və sair tapılmışdır.
                                        Tapıntılar arasında XII-XIV əsrlərə aid gil qab və memarlıq abidələrinin qalıqları
                                        üzərində ərəb əlifbasının kufi və nəsx xəttləri ilə yazılara da rast gəlinib.
        
                                        Xarabagilan ərazisində aparılan arxeoloji tədqiqatlar zamanı şəhərin qala divarının
                                        cənub – şərqində, divarın xarici tərəfində II-III əsrlərə aid edilən bir qəbirdən
                                        qədim arami yazısı ilə yazılmış mətn aşkarlanıb.
        
                                        Arami yazısı Ərəbistan yarımadasında yaşamış və e.ə. II minilliyin sonlarında Ön
                                        Asiyaya yayılaraq, Suriya və Şimali Mesopotamiya ərazisində kiçik dövlətlər yaratmış
                                        sami mənşəli tayfalardan olan aramilərin əlifbası olub, e.ə. I minilliyin
                                        əvvəllərində Finikiya əlifbası əsasında yaradılmışdır.
        
                                        Xarabagilan ərazisindəki qəbirdən aşkar edilmiş təkqulplu saxsı qabın üzərindəki
                                        arami yazısı qara rənglə həkk edilmişdir və dualardan ibarətdir.
        
                                        Bütün bunlar onu göstərir ki, Xaraba Gilan zamanında yetərincə inkişaf etmiş bir
                                        şəhər, hətta mədəniyyət mərkəzi olub. Yaxın Şərqin və dünyanın bir sıra ölkələri ilə
                                        sıx iqtisadi, ticarət əlaqələrində olmuş və öz mədəniyyətini formalaşdırmaqla
                                        yanaşı, onların da mədəniyyətindən istifadədə tolerantlıq nümayiş etdirmişdir.</p>
                                </div>
                            </article>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
    @endif




    @if(request()->routeIs('flora'))
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-12 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Florası</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="https://img.nuhcixan.az/news/2018/09/XarabaGilan6.jpg?v=MjAxOC0wOS0wMiAxNTozMDoxMw==" title="" alt="">
                                </div>
                             
                                <div class="article-content">
                                    <p>Xarabagilan, Kiran, Gilan və ya Giran – Ordubad şəhəri yaxınlığında orta əsrlərə aid
                                        şəhər xarabalığıdır. Abidə Ordubad şəhərindən 16-17 kilometr qərbdə,
                                        Naxçıvan-Ordubad avtomobil yolunun şimalında, Gilançayın sol sahilindədir. Böyük
                                        Azərbaycan alimləri Hinduşah Naxçıvani və Məhəmməd Naxçıvani bu şəhərdə doğulmuş,
                                        böyümüş və yaşamışlar.
        
                                        Tədqiqatlar nəticəsində müəyyən edilmişdir ki, Xarabagilan ərazisində şəhər
                                        mədəniyyəti ilk antik dövrdə V–IV əsrlərdə yaranmış, orta əsrlərdə isə bu şəhər
                                        Azərbaycanın mühüm ticarət və sənətkarlıq mərkəzlərindən biri olmuşdur.
                                        Tədqiqatçılar Xarabagilan abidəsinin monqolların Azərbaycana yürüşü zamanı
                                        dağıdılmış Kiran şəhərinin qalıqları olduğunu müəyyənləşdirmişlər.
        
                                        İbn əl-Əsir (XIII əsr), Yaqut Həməvi (XIII əsr), Zeynəddin Qəzvini (XIV əsr),
                                        Məhəmməd ibn Həmdullah Naxçıvani və başqalarının əsərlərində Gilanın Azərbaycanın
                                        qədim və əzəmətli şəhərlərindən biri olması haqqında məlumatlar vardır. Karvan yolu
                                        üstündə yerləşən şəhərdə sənətkarlıq, ticarət, əmtəə-pul əlaqələri geniş inkişaf
                                        etmişdi. Şəhərdə “Giran” adı ilə gümüş və mis sikkələr kəsilmişdir.
        
                                        XIII əsrdə ciddi dağıntılara məruz qalan şəhər hələ tam bərpa olunmamış, qısa müddət
                                        sonra – XIV əsrin sonlarında Əmir Teymur tərəfindən dağıdılmış, Səfəvilər
                                        sülaləsindən I Şah Abbasın hakimiyyəti dövründə isə tamamilə tənəzzülə uğramışdır.
                                        Şəhərin əhalisi Ordubad rayonunun Aşağı və Yuxarı Aza, Darkənd kəndlərinə köçmüşdür.
        
                                        Xarabagilan ərazisində ilk tədqiqatlar 1926-1929-cu illərdə aparılmışdır. 1976-cı
                                        ildən şəhər ərazisində başlanılmış arxeoloji tədqiqatlar isə fasilələrlə hələ də
                                        davam etdirilməkdədir. Şəhərin ərazisi 100 hektardan çoxdur. Abidənin qərb tərəfində
                                        e.ə. II-I minilliklərə aid yaşayış məskəni və nekropol aşkar edilmişdir.
        
                                        Xarabagilanın Narınqalası və məhəllələri qala divarları ilə əhatə olunmuşdur.
                                        Narınqalanın sahəsi 10 hektardan çoxdur. Qala divarları dördkünc və dairəvi
                                        bürclərlə möhkəmləndirilmişdir. Daş, çiy və bişmiş kərpicdən yaşayış evləri,
                                        karvansaralar, türbələr, məscid, habelə sənətkarlıq ocaqları və sair tikinti
                                        qalıqları aşkar edilmiş, çoxlu maddi-mədəniyyət nümunələri – şirli və şirsiz qablar,
                                        şüşə və metal məmulatı, sikkələr, o cümlədən Roma qızıl pulları və sair tapılmışdır.
                                        Tapıntılar arasında XII-XIV əsrlərə aid gil qab və memarlıq abidələrinin qalıqları
                                        üzərində ərəb əlifbasının kufi və nəsx xəttləri ilə yazılara da rast gəlinib.
        
                                        Xarabagilan ərazisində aparılan arxeoloji tədqiqatlar zamanı şəhərin qala divarının
                                        cənub – şərqində, divarın xarici tərəfində II-III əsrlərə aid edilən bir qəbirdən
                                        qədim arami yazısı ilə yazılmış mətn aşkarlanıb.
        
                                        Arami yazısı Ərəbistan yarımadasında yaşamış və e.ə. II minilliyin sonlarında Ön
                                        Asiyaya yayılaraq, Suriya və Şimali Mesopotamiya ərazisində kiçik dövlətlər yaratmış
                                        sami mənşəli tayfalardan olan aramilərin əlifbası olub, e.ə. I minilliyin
                                        əvvəllərində Finikiya əlifbası əsasında yaradılmışdır.
        
                                        Xarabagilan ərazisindəki qəbirdən aşkar edilmiş təkqulplu saxsı qabın üzərindəki
                                        arami yazısı qara rənglə həkk edilmişdir və dualardan ibarətdir.
        
                                        Bütün bunlar onu göstərir ki, Xaraba Gilan zamanında yetərincə inkişaf etmiş bir
                                        şəhər, hətta mədəniyyət mərkəzi olub. Yaxın Şərqin və dünyanın bir sıra ölkələri ilə
                                        sıx iqtisadi, ticarət əlaqələrində olmuş və öz mədəniyyətini formalaşdırmaqla
                                        yanaşı, onların da mədəniyyətindən istifadədə tolerantlıq nümayiş etdirmişdir.</p>
                                </div>
                            </article>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
    @endif



    @if(request()->routeIs('flora'))
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-12 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Florası</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="https://img.nuhcixan.az/news/2018/09/XarabaGilan6.jpg?v=MjAxOC0wOS0wMiAxNTozMDoxMw==" title="" alt="">
                                </div>
                             
                                <div class="article-content">
                                    <p>Xarabagilan, Kiran, Gilan və ya Giran – Ordubad şəhəri yaxınlığında orta əsrlərə aid
                                        şəhər xarabalığıdır. Abidə Ordubad şəhərindən 16-17 kilometr qərbdə,
                                        Naxçıvan-Ordubad avtomobil yolunun şimalında, Gilançayın sol sahilindədir. Böyük
                                        Azərbaycan alimləri Hinduşah Naxçıvani və Məhəmməd Naxçıvani bu şəhərdə doğulmuş,
                                        böyümüş və yaşamışlar.
        
                                        Tədqiqatlar nəticəsində müəyyən edilmişdir ki, Xarabagilan ərazisində şəhər
                                        mədəniyyəti ilk antik dövrdə V–IV əsrlərdə yaranmış, orta əsrlərdə isə bu şəhər
                                        Azərbaycanın mühüm ticarət və sənətkarlıq mərkəzlərindən biri olmuşdur.
                                        Tədqiqatçılar Xarabagilan abidəsinin monqolların Azərbaycana yürüşü zamanı
                                        dağıdılmış Kiran şəhərinin qalıqları olduğunu müəyyənləşdirmişlər.
        
                                        İbn əl-Əsir (XIII əsr), Yaqut Həməvi (XIII əsr), Zeynəddin Qəzvini (XIV əsr),
                                        Məhəmməd ibn Həmdullah Naxçıvani və başqalarının əsərlərində Gilanın Azərbaycanın
                                        qədim və əzəmətli şəhərlərindən biri olması haqqında məlumatlar vardır. Karvan yolu
                                        üstündə yerləşən şəhərdə sənətkarlıq, ticarət, əmtəə-pul əlaqələri geniş inkişaf
                                        etmişdi. Şəhərdə “Giran” adı ilə gümüş və mis sikkələr kəsilmişdir.
        
                                        XIII əsrdə ciddi dağıntılara məruz qalan şəhər hələ tam bərpa olunmamış, qısa müddət
                                        sonra – XIV əsrin sonlarında Əmir Teymur tərəfindən dağıdılmış, Səfəvilər
                                        sülaləsindən I Şah Abbasın hakimiyyəti dövründə isə tamamilə tənəzzülə uğramışdır.
                                        Şəhərin əhalisi Ordubad rayonunun Aşağı və Yuxarı Aza, Darkənd kəndlərinə köçmüşdür.
        
                                        Xarabagilan ərazisində ilk tədqiqatlar 1926-1929-cu illərdə aparılmışdır. 1976-cı
                                        ildən şəhər ərazisində başlanılmış arxeoloji tədqiqatlar isə fasilələrlə hələ də
                                        davam etdirilməkdədir. Şəhərin ərazisi 100 hektardan çoxdur. Abidənin qərb tərəfində
                                        e.ə. II-I minilliklərə aid yaşayış məskəni və nekropol aşkar edilmişdir.
        
                                        Xarabagilanın Narınqalası və məhəllələri qala divarları ilə əhatə olunmuşdur.
                                        Narınqalanın sahəsi 10 hektardan çoxdur. Qala divarları dördkünc və dairəvi
                                        bürclərlə möhkəmləndirilmişdir. Daş, çiy və bişmiş kərpicdən yaşayış evləri,
                                        karvansaralar, türbələr, məscid, habelə sənətkarlıq ocaqları və sair tikinti
                                        qalıqları aşkar edilmiş, çoxlu maddi-mədəniyyət nümunələri – şirli və şirsiz qablar,
                                        şüşə və metal məmulatı, sikkələr, o cümlədən Roma qızıl pulları və sair tapılmışdır.
                                        Tapıntılar arasında XII-XIV əsrlərə aid gil qab və memarlıq abidələrinin qalıqları
                                        üzərində ərəb əlifbasının kufi və nəsx xəttləri ilə yazılara da rast gəlinib.
        
                                        Xarabagilan ərazisində aparılan arxeoloji tədqiqatlar zamanı şəhərin qala divarının
                                        cənub – şərqində, divarın xarici tərəfində II-III əsrlərə aid edilən bir qəbirdən
                                        qədim arami yazısı ilə yazılmış mətn aşkarlanıb.
        
                                        Arami yazısı Ərəbistan yarımadasında yaşamış və e.ə. II minilliyin sonlarında Ön
                                        Asiyaya yayılaraq, Suriya və Şimali Mesopotamiya ərazisində kiçik dövlətlər yaratmış
                                        sami mənşəli tayfalardan olan aramilərin əlifbası olub, e.ə. I minilliyin
                                        əvvəllərində Finikiya əlifbası əsasında yaradılmışdır.
        
                                        Xarabagilan ərazisindəki qəbirdən aşkar edilmiş təkqulplu saxsı qabın üzərindəki
                                        arami yazısı qara rənglə həkk edilmişdir və dualardan ibarətdir.
        
                                        Bütün bunlar onu göstərir ki, Xaraba Gilan zamanında yetərincə inkişaf etmiş bir
                                        şəhər, hətta mədəniyyət mərkəzi olub. Yaxın Şərqin və dünyanın bir sıra ölkələri ilə
                                        sıx iqtisadi, ticarət əlaqələrində olmuş və öz mədəniyyətini formalaşdırmaqla
                                        yanaşı, onların da mədəniyyətindən istifadədə tolerantlıq nümayiş etdirmişdir.</p>
                                </div>
                            </article>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
    @endif


    
    @if(request()->routeIs('tourism'))
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-12 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Turizmi</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="https://img.nuhcixan.az/news/2018/09/XarabaGilan6.jpg?v=MjAxOC0wOS0wMiAxNTozMDoxMw==" title="" alt="">
                                </div>
                             
                                <div class="article-content">
                                    <p>Xarabagilan, Kiran, Gilan və ya Giran – Ordubad şəhəri yaxınlığında orta əsrlərə aid
                                        şəhər xarabalığıdır. Abidə Ordubad şəhərindən 16-17 kilometr qərbdə,
                                        Naxçıvan-Ordubad avtomobil yolunun şimalında, Gilançayın sol sahilindədir. Böyük
                                        Azərbaycan alimləri Hinduşah Naxçıvani və Məhəmməd Naxçıvani bu şəhərdə doğulmuş,
                                        böyümüş və yaşamışlar.
        
                                        Tədqiqatlar nəticəsində müəyyən edilmişdir ki, Xarabagilan ərazisində şəhər
                                        mədəniyyəti ilk antik dövrdə V–IV əsrlərdə yaranmış, orta əsrlərdə isə bu şəhər
                                        Azərbaycanın mühüm ticarət və sənətkarlıq mərkəzlərindən biri olmuşdur.
                                        Tədqiqatçılar Xarabagilan abidəsinin monqolların Azərbaycana yürüşü zamanı
                                        dağıdılmış Kiran şəhərinin qalıqları olduğunu müəyyənləşdirmişlər.
        
                                        İbn əl-Əsir (XIII əsr), Yaqut Həməvi (XIII əsr), Zeynəddin Qəzvini (XIV əsr),
                                        Məhəmməd ibn Həmdullah Naxçıvani və başqalarının əsərlərində Gilanın Azərbaycanın
                                        qədim və əzəmətli şəhərlərindən biri olması haqqında məlumatlar vardır. Karvan yolu
                                        üstündə yerləşən şəhərdə sənətkarlıq, ticarət, əmtəə-pul əlaqələri geniş inkişaf
                                        etmişdi. Şəhərdə “Giran” adı ilə gümüş və mis sikkələr kəsilmişdir.
        
                                        XIII əsrdə ciddi dağıntılara məruz qalan şəhər hələ tam bərpa olunmamış, qısa müddət
                                        sonra – XIV əsrin sonlarında Əmir Teymur tərəfindən dağıdılmış, Səfəvilər
                                        sülaləsindən I Şah Abbasın hakimiyyəti dövründə isə tamamilə tənəzzülə uğramışdır.
                                        Şəhərin əhalisi Ordubad rayonunun Aşağı və Yuxarı Aza, Darkənd kəndlərinə köçmüşdür.
        
                                        Xarabagilan ərazisində ilk tədqiqatlar 1926-1929-cu illərdə aparılmışdır. 1976-cı
                                        ildən şəhər ərazisində başlanılmış arxeoloji tədqiqatlar isə fasilələrlə hələ də
                                        davam etdirilməkdədir. Şəhərin ərazisi 100 hektardan çoxdur. Abidənin qərb tərəfində
                                        e.ə. II-I minilliklərə aid yaşayış məskəni və nekropol aşkar edilmişdir.
        
                                        Xarabagilanın Narınqalası və məhəllələri qala divarları ilə əhatə olunmuşdur.
                                        Narınqalanın sahəsi 10 hektardan çoxdur. Qala divarları dördkünc və dairəvi
                                        bürclərlə möhkəmləndirilmişdir. Daş, çiy və bişmiş kərpicdən yaşayış evləri,
                                        karvansaralar, türbələr, məscid, habelə sənətkarlıq ocaqları və sair tikinti
                                        qalıqları aşkar edilmiş, çoxlu maddi-mədəniyyət nümunələri – şirli və şirsiz qablar,
                                        şüşə və metal məmulatı, sikkələr, o cümlədən Roma qızıl pulları və sair tapılmışdır.
                                        Tapıntılar arasında XII-XIV əsrlərə aid gil qab və memarlıq abidələrinin qalıqları
                                        üzərində ərəb əlifbasının kufi və nəsx xəttləri ilə yazılara da rast gəlinib.
        
                                        Xarabagilan ərazisində aparılan arxeoloji tədqiqatlar zamanı şəhərin qala divarının
                                        cənub – şərqində, divarın xarici tərəfində II-III əsrlərə aid edilən bir qəbirdən
                                        qədim arami yazısı ilə yazılmış mətn aşkarlanıb.
        
                                        Arami yazısı Ərəbistan yarımadasında yaşamış və e.ə. II minilliyin sonlarında Ön
                                        Asiyaya yayılaraq, Suriya və Şimali Mesopotamiya ərazisində kiçik dövlətlər yaratmış
                                        sami mənşəli tayfalardan olan aramilərin əlifbası olub, e.ə. I minilliyin
                                        əvvəllərində Finikiya əlifbası əsasında yaradılmışdır.
        
                                        Xarabagilan ərazisindəki qəbirdən aşkar edilmiş təkqulplu saxsı qabın üzərindəki
                                        arami yazısı qara rənglə həkk edilmişdir və dualardan ibarətdir.
        
                                        Bütün bunlar onu göstərir ki, Xaraba Gilan zamanında yetərincə inkişaf etmiş bir
                                        şəhər, hətta mədəniyyət mərkəzi olub. Yaxın Şərqin və dünyanın bir sıra ölkələri ilə
                                        sıx iqtisadi, ticarət əlaqələrində olmuş və öz mədəniyyətini formalaşdırmaqla
                                        yanaşı, onların da mədəniyyətindən istifadədə tolerantlıq nümayiş etdirmişdir.</p>
                                </div>
                            </article>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
    @endif



    @if(request()->routeIs('fauna'))
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-12 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Faunası</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="https://img.nuhcixan.az/news/2018/09/XarabaGilan6.jpg?v=MjAxOC0wOS0wMiAxNTozMDoxMw==" title="" alt="">
                                </div>
                             
                                <div class="article-content">
                                    <p>Xarabagilan, Kiran, Gilan və ya Giran – Ordubad şəhəri yaxınlığında orta əsrlərə aid
                                        şəhər xarabalığıdır. Abidə Ordubad şəhərindən 16-17 kilometr qərbdə,
                                        Naxçıvan-Ordubad avtomobil yolunun şimalında, Gilançayın sol sahilindədir. Böyük
                                        Azərbaycan alimləri Hinduşah Naxçıvani və Məhəmməd Naxçıvani bu şəhərdə doğulmuş,
                                        böyümüş və yaşamışlar.
        
                                        Tədqiqatlar nəticəsində müəyyən edilmişdir ki, Xarabagilan ərazisində şəhər
                                        mədəniyyəti ilk antik dövrdə V–IV əsrlərdə yaranmış, orta əsrlərdə isə bu şəhər
                                        Azərbaycanın mühüm ticarət və sənətkarlıq mərkəzlərindən biri olmuşdur.
                                        Tədqiqatçılar Xarabagilan abidəsinin monqolların Azərbaycana yürüşü zamanı
                                        dağıdılmış Kiran şəhərinin qalıqları olduğunu müəyyənləşdirmişlər.
        
                                        İbn əl-Əsir (XIII əsr), Yaqut Həməvi (XIII əsr), Zeynəddin Qəzvini (XIV əsr),
                                        Məhəmməd ibn Həmdullah Naxçıvani və başqalarının əsərlərində Gilanın Azərbaycanın
                                        qədim və əzəmətli şəhərlərindən biri olması haqqında məlumatlar vardır. Karvan yolu
                                        üstündə yerləşən şəhərdə sənətkarlıq, ticarət, əmtəə-pul əlaqələri geniş inkişaf
                                        etmişdi. Şəhərdə “Giran” adı ilə gümüş və mis sikkələr kəsilmişdir.
        
                                        XIII əsrdə ciddi dağıntılara məruz qalan şəhər hələ tam bərpa olunmamış, qısa müddət
                                        sonra – XIV əsrin sonlarında Əmir Teymur tərəfindən dağıdılmış, Səfəvilər
                                        sülaləsindən I Şah Abbasın hakimiyyəti dövründə isə tamamilə tənəzzülə uğramışdır.
                                        Şəhərin əhalisi Ordubad rayonunun Aşağı və Yuxarı Aza, Darkənd kəndlərinə köçmüşdür.
        
                                        Xarabagilan ərazisində ilk tədqiqatlar 1926-1929-cu illərdə aparılmışdır. 1976-cı
                                        ildən şəhər ərazisində başlanılmış arxeoloji tədqiqatlar isə fasilələrlə hələ də
                                        davam etdirilməkdədir. Şəhərin ərazisi 100 hektardan çoxdur. Abidənin qərb tərəfində
                                        e.ə. II-I minilliklərə aid yaşayış məskəni və nekropol aşkar edilmişdir.
        
                                        Xarabagilanın Narınqalası və məhəllələri qala divarları ilə əhatə olunmuşdur.
                                        Narınqalanın sahəsi 10 hektardan çoxdur. Qala divarları dördkünc və dairəvi
                                        bürclərlə möhkəmləndirilmişdir. Daş, çiy və bişmiş kərpicdən yaşayış evləri,
                                        karvansaralar, türbələr, məscid, habelə sənətkarlıq ocaqları və sair tikinti
                                        qalıqları aşkar edilmiş, çoxlu maddi-mədəniyyət nümunələri – şirli və şirsiz qablar,
                                        şüşə və metal məmulatı, sikkələr, o cümlədən Roma qızıl pulları və sair tapılmışdır.
                                        Tapıntılar arasında XII-XIV əsrlərə aid gil qab və memarlıq abidələrinin qalıqları
                                        üzərində ərəb əlifbasının kufi və nəsx xəttləri ilə yazılara da rast gəlinib.
        
                                        Xarabagilan ərazisində aparılan arxeoloji tədqiqatlar zamanı şəhərin qala divarının
                                        cənub – şərqində, divarın xarici tərəfində II-III əsrlərə aid edilən bir qəbirdən
                                        qədim arami yazısı ilə yazılmış mətn aşkarlanıb.
        
                                        Arami yazısı Ərəbistan yarımadasında yaşamış və e.ə. II minilliyin sonlarında Ön
                                        Asiyaya yayılaraq, Suriya və Şimali Mesopotamiya ərazisində kiçik dövlətlər yaratmış
                                        sami mənşəli tayfalardan olan aramilərin əlifbası olub, e.ə. I minilliyin
                                        əvvəllərində Finikiya əlifbası əsasında yaradılmışdır.
        
                                        Xarabagilan ərazisindəki qəbirdən aşkar edilmiş təkqulplu saxsı qabın üzərindəki
                                        arami yazısı qara rənglə həkk edilmişdir və dualardan ibarətdir.
        
                                        Bütün bunlar onu göstərir ki, Xaraba Gilan zamanında yetərincə inkişaf etmiş bir
                                        şəhər, hətta mədəniyyət mərkəzi olub. Yaxın Şərqin və dünyanın bir sıra ölkələri ilə
                                        sıx iqtisadi, ticarət əlaqələrində olmuş və öz mədəniyyətini formalaşdırmaqla
                                        yanaşı, onların da mədəniyyətindən istifadədə tolerantlıq nümayiş etdirmişdir.</p>
                                </div>
                            </article>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
    @endif

    

    @if(request()->routeIs('hotel_restaurant'))
        <section class="detail-blog">
            <div class="blog-single ">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-lg-12 m-15px-tb">
                            <article class="article">
                                <div class="article-title">
                                    <h2>Ordubad Otel-Restoran</h2>
                                </div>
                                <div class="article-img">
                                    <img class="img-fluid" src="https://img.nuhcixan.az/news/2018/09/XarabaGilan6.jpg?v=MjAxOC0wOS0wMiAxNTozMDoxMw==" title="" alt="">
                                </div>
                             
                                <div class="article-content">
                                    <p>Xarabagilan, Kiran, Gilan və ya Giran – Ordubad şəhəri yaxınlığında orta əsrlərə aid
                                        şəhər xarabalığıdır. Abidə Ordubad şəhərindən 16-17 kilometr qərbdə,
                                        Naxçıvan-Ordubad avtomobil yolunun şimalında, Gilançayın sol sahilindədir. Böyük
                                        Azərbaycan alimləri Hinduşah Naxçıvani və Məhəmməd Naxçıvani bu şəhərdə doğulmuş,
                                        böyümüş və yaşamışlar.
        
                                        Tədqiqatlar nəticəsində müəyyən edilmişdir ki, Xarabagilan ərazisində şəhər
                                        mədəniyyəti ilk antik dövrdə V–IV əsrlərdə yaranmış, orta əsrlərdə isə bu şəhər
                                        Azərbaycanın mühüm ticarət və sənətkarlıq mərkəzlərindən biri olmuşdur.
                                        Tədqiqatçılar Xarabagilan abidəsinin monqolların Azərbaycana yürüşü zamanı
                                        dağıdılmış Kiran şəhərinin qalıqları olduğunu müəyyənləşdirmişlər.
        
                                        İbn əl-Əsir (XIII əsr), Yaqut Həməvi (XIII əsr), Zeynəddin Qəzvini (XIV əsr),
                                        Məhəmməd ibn Həmdullah Naxçıvani və başqalarının əsərlərində Gilanın Azərbaycanın
                                        qədim və əzəmətli şəhərlərindən biri olması haqqında məlumatlar vardır. Karvan yolu
                                        üstündə yerləşən şəhərdə sənətkarlıq, ticarət, əmtəə-pul əlaqələri geniş inkişaf
                                        etmişdi. Şəhərdə “Giran” adı ilə gümüş və mis sikkələr kəsilmişdir.
        
                                        XIII əsrdə ciddi dağıntılara məruz qalan şəhər hələ tam bərpa olunmamış, qısa müddət
                                        sonra – XIV əsrin sonlarında Əmir Teymur tərəfindən dağıdılmış, Səfəvilər
                                        sülaləsindən I Şah Abbasın hakimiyyəti dövründə isə tamamilə tənəzzülə uğramışdır.
                                        Şəhərin əhalisi Ordubad rayonunun Aşağı və Yuxarı Aza, Darkənd kəndlərinə köçmüşdür.
        
                                        Xarabagilan ərazisində ilk tədqiqatlar 1926-1929-cu illərdə aparılmışdır. 1976-cı
                                        ildən şəhər ərazisində başlanılmış arxeoloji tədqiqatlar isə fasilələrlə hələ də
                                        davam etdirilməkdədir. Şəhərin ərazisi 100 hektardan çoxdur. Abidənin qərb tərəfində
                                        e.ə. II-I minilliklərə aid yaşayış məskəni və nekropol aşkar edilmişdir.
        
                                        Xarabagilanın Narınqalası və məhəllələri qala divarları ilə əhatə olunmuşdur.
                                        Narınqalanın sahəsi 10 hektardan çoxdur. Qala divarları dördkünc və dairəvi
                                        bürclərlə möhkəmləndirilmişdir. Daş, çiy və bişmiş kərpicdən yaşayış evləri,
                                        karvansaralar, türbələr, məscid, habelə sənətkarlıq ocaqları və sair tikinti
                                        qalıqları aşkar edilmiş, çoxlu maddi-mədəniyyət nümunələri – şirli və şirsiz qablar,
                                        şüşə və metal məmulatı, sikkələr, o cümlədən Roma qızıl pulları və sair tapılmışdır.
                                        Tapıntılar arasında XII-XIV əsrlərə aid gil qab və memarlıq abidələrinin qalıqları
                                        üzərində ərəb əlifbasının kufi və nəsx xəttləri ilə yazılara da rast gəlinib.
        
                                        Xarabagilan ərazisində aparılan arxeoloji tədqiqatlar zamanı şəhərin qala divarının
                                        cənub – şərqində, divarın xarici tərəfində II-III əsrlərə aid edilən bir qəbirdən
                                        qədim arami yazısı ilə yazılmış mətn aşkarlanıb.
        
                                        Arami yazısı Ərəbistan yarımadasında yaşamış və e.ə. II minilliyin sonlarında Ön
                                        Asiyaya yayılaraq, Suriya və Şimali Mesopotamiya ərazisində kiçik dövlətlər yaratmış
                                        sami mənşəli tayfalardan olan aramilərin əlifbası olub, e.ə. I minilliyin
                                        əvvəllərində Finikiya əlifbası əsasında yaradılmışdır.
        
                                        Xarabagilan ərazisindəki qəbirdən aşkar edilmiş təkqulplu saxsı qabın üzərindəki
                                        arami yazısı qara rənglə həkk edilmişdir və dualardan ibarətdir.
        
                                        Bütün bunlar onu göstərir ki, Xaraba Gilan zamanında yetərincə inkişaf etmiş bir
                                        şəhər, hətta mədəniyyət mərkəzi olub. Yaxın Şərqin və dünyanın bir sıra ölkələri ilə
                                        sıx iqtisadi, ticarət əlaqələrində olmuş və öz mədəniyyətini formalaşdırmaqla
                                        yanaşı, onların da mədəniyyətindən istifadədə tolerantlıq nümayiş etdirmişdir.</p>
                                </div>
                            </article>
                        </div>
                      
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
