<header class="respons tablet">
    <div class="container">
        <nav>
            <div class="row">
                <div class="col-1">
                    <a href="/">
                        <img src="{{asset('assets/img/logo.png')}}" class="logo" alt="logo" />
                    </a>
                </div>
                <div class="col-11">
                    <div class="nav-top">
                        <div class="header_text">
                            <h1 class="animate_text">
                                <span>“Ordubad</span>
                                <span>Azərbaycanın </span>
                                <span> incisidir.”</span>
                            </h1>
                        </div>
                        <form action="{{ route('search') }}" method="GET" class="search-form">
                            <input type="search" class="search-input" name="search" placeholder="Axtar... "/>
                            <svg class="search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <circle cx="11.7666" cy="11.7666" r="8.98856" stroke="#929292" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"/>
                                <path d="M18.0183 18.4852L21.5423 22.0001" stroke="#929292" stroke-width="2"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>

                            <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                        </form>
                        <div class="email-area">
                            <i class="fa-solid fa-envelope-open-text"></i>
                            <span> email@gmail.com </span>
                        </div>
                        <div class="languge-choose">
                            <ul>
                                <li>EN</li>
                                <li>RU</li>
                            </ul>
                        </div>
                    </div>
                    <div class="nav-bottom">
                        <ul>
                            <li>
                                <a href="{{ route('about') }}">Haqqımızda</a>
                                <i class="fa-solid fa-chevron-down"></i>
                                <div class="sub-menu">
                                    <ul>
                                        <li>
                                            <a href="{{ route('about') }}">Haqqımızda </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('structure') }}">Struktur </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('view') }}">Baxışımız </a>
                                        </li>
{{--                                        <li>--}}
{{--                                            <a href="">Tusi intellektual klubu </a>--}}
{{--                                        </li>--}}
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href=""> Fəaliyyət </a>
                                <i class="fa-solid fa-chevron-down"></i>
                                <div class="sub-menu">
                                    <ul>
                                        <li>
                                            <a href="{{ route('activity') }}">Fəaliyyət </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('charitable') }}">Xeyriyyəçilik </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('enlightenment') }}">Maarifçilik </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('news') }}">Xəbərlər </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('event-blog') }}">Tədbirlər </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#"> Ordubad </a>
                                <i class="fa-solid fa-chevron-down"></i>
                                <div class="sub-menu">
                                    <div class="d-flex">
                                        <ul>
                                            <li>
                                                <a href="{{ route('general_information') }}">Ümumi məlumat </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('history') }}">Tarixi </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('monuments') }}">Abidələri</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('customs_traditions') }}">Adət və Ənənələr</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('folklore') }}">Folkloru </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('nature') }}">Təbiəti</a>
                                            </li>

                                        </ul>
                                        <ul>
                                            <li>
                                                <a href="{{ route('flora') }}">Florası </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('fauna') }}">Faunası</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('tourism') }}">Turizmi</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('hotel_restaurant') }}">Otel-Restoran</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('production') }}">İstehsal</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('kitchen') }}">Mətbəxi</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#"> Fəxrlərimiz </a>
                                <i class="fa-solid fa-chevron-down"></i>
                                <div class="sub-menu">
                                    <ul>
                                        <li>
                                            <a href="{{ route('famous-men') }}">Tanınmış şəxslər </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#"> Qürurlarımız </a>
                                <i class="fa-solid fa-chevron-down"></i>
                                <div class="sub-menu">
                                    <ul>
                                        <li>
                                            <a href="{{ route('heroes') }}"> Ordubad Şəhidləri </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#"> Qalareya </a>
                                <i class="fa-solid fa-chevron-down"></i>
                                <div class="sub-menu">
                                    <ul>
                                        <li>
                                            <a href="{{ route('photo') }}">Foto </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('videos') }}">Video </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}"> Əlaqə </a>
                            </li>
                            <li>
                                <a href="{{ route('members') }}">Üzv ol</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
