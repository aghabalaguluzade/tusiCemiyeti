<nav id="sidebar" aria-label="Main Navigation">
                <!-- Side Header -->
                <div class="bg-header-dark">
                    <div class="content-header bg-white-10">
                        <!-- Logo -->
                        <a class="font-w600 text-white tracking-wide" href="{{ route('adminPanel') }}">
                            <span class="smini-hidden">
                                tusi<span class="opacity-75">Cemiyyeti</span>
                            </span>
                        </a>
                        <!-- END Logo -->

                        <!-- Options -->
                        <div>
                            <!-- Toggle Sidebar Style -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                            <a class="js-class-toggle text-white-75" data-target="#sidebar-style-toggler" data-class="fa-toggle-off fa-toggle-on" onclick="Dashmix.layout('sidebar_style_toggle');Dashmix.layout('header_style_toggle');" href="javascript:void(0)">
                                <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                            </a>
                            <!-- END Toggle Sidebar Style -->

                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                                <i class="fa fa-times-circle"></i>
                            </a>
                            <!-- END Close Sidebar -->
                        </div>
                        <!-- END Options -->
                    </div>
                </div>
                <!-- END Side Header -->

                <!-- Sidebar Scrolling -->
                <div class="js-sidebar-scroll">
                    <!-- Side Navigation -->
                    <div class="content-side">
                        <ul class="nav-main">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('adminPanel') }}">
                                    <i class="nav-main-link-icon fa fa-location-arrow"></i>
                                    <span class="nav-main-link-name">Ana S??hif??</span>
                                </a>
                            </li>

                            {{-- Activities --}}

                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-border-all"></i>
                                    <span class="nav-main-link-name">F??aliyy??t</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('activities.index') }}">
                                            <span class="nav-main-link-name">F??aliyy??t</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('creations.index') }}">
                                            <span class="nav-main-link-name">Yaranma</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{-- Blog --}}

                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-border-all"></i>
                                    <span class="nav-main-link-name">Bloq</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('news.index') }}">
                                            <span class="nav-main-link-name">X??b??rl??r</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('events.index') }}">
                                            <span class="nav-main-link-name">T??dbirl??r</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-border-all"></i>
                                    <span class="nav-main-link-name">Gundelik</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('daily.index') }}">
                                            <span class="nav-main-link-name">Gundelik Siyahi</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{-- F??xrl??rimiz --}}

                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-border-all"></i>
                                    <span class="nav-main-link-name">F??xirl??rimiz</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('famous_people.index') }}">
                                            <span class="nav-main-link-name">Tan??nm???? ????xsl??r</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{-- Q??rurlar??m??z --}}

                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-border-all"></i>
                                    <span class="nav-main-link-name">Q??rurlar??m??z</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('martyrs.index') }}">
                                            <span class="nav-main-link-name">????hidl??r</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            {{-- Missiyam??z --}}

                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-border-all"></i>
                                    <span class="nav-main-link-name">Missiyam??z</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('charitables.index') }}">
                                            <span class="nav-main-link-name">Xeyriyy????ik</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('enlightenments.index') }}">
                                            <span class="nav-main-link-name">Maarif??ilik</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            {{-- Gallery --}}

                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-border-all"></i>
                                    <span class="nav-main-link-name">Qalereya</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('photos.index') }}">
                                            <span class="nav-main-link-name">Foto</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('videos.index') }}">
                                            <span class="nav-main-link-name">Video</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            {{-- Ordubad --}}

                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-border-all"></i>
                                    <span class="nav-main-link-name">Ordubad</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('general_information.index') }}">
                                            <span class="nav-main-link-name">??mumi m??lumat</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('history.index') }}">
                                            <span class="nav-main-link-name">Tarixi</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('customs_traditions.index') }}">
                                            <span class="nav-main-link-name">Ad??t v?? ??n??n??l??ri</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('monuments.index') }}">
                                            <span class="nav-main-link-name">Abid??l??ri</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('folklores.index') }}">
                                            <span class="nav-main-link-name">Folkloru</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('natures.index') }}">
                                            <span class="nav-main-link-name">T??bi??ti</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('kitchens.index') }}">
                                            <span class="nav-main-link-name">M??tb??xi</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('productions.index') }}">
                                            <span class="nav-main-link-name">??stehsal</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('floras.index') }}">
                                            <span class="nav-main-link-name">Floras??</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('tourisms.index') }}">
                                            <span class="nav-main-link-name">Turizmi</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('faunas.index') }}">
                                            <span class="nav-main-link-name">Faunas??</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('hotel_restaurants.index') }}">
                                            <span class="nav-main-link-name">Otel-Restoran</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            {{-- Haqq??nda --}}


                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-border-all"></i>
                                    <span class="nav-main-link-name">Haqq??nda</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('AboutIndex') }}">
                                            <span class="nav-main-link-name">Haqq??nda</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('structures.index') }}">
                                            <span class="nav-main-link-name">Struktur</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('views.index') }}">
                                            <span class="nav-main-link-name">Bax??????m??z</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('prospect.index') }}">
                                            <span class="nav-main-link-name">Prespektivimiz</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-border-all"></i>
                                    <span class="nav-main-link-name">Tusi Klubu</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('tusi.index') }}">
                                            <span class="nav-main-link-name">M??lumat</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            {{-- Biziml?? ??laq?? --}}

                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('contactUsIndex') }}" aria-haspopup="true" aria-expanded="false" href="{{ route('AboutIndex') }}">
                                    <span class="nav-main-link-name">Biziml?? ??laq??</span>
                                </a>
                            </li>


                            {{-- ??laq?? --}}

                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('contacts.index') }}" aria-haspopup="true" aria-expanded="false" href="{{ route('AboutIndex') }}">
                                    <span class="nav-main-link-name">??laq??</span>
                                    @if($contactsCount)
                                    <span class="nav-main-link-badge badge badge-pill badge-danger">{{ $contactsCount }}</span>
                                    @endif
                                </a>
                            </li>


                            {{-- ??zv ol --}}

                            <li class="nav-main-item">
                                <a class="nav-main-link" href="{{ route('memberIndex') }}" aria-haspopup="true" aria-expanded="false" href="{{ route('AboutIndex') }}">
                                    <span class="nav-main-link-name">??zv ol</span>
                                    @if($membersCount > 0)
                                    <span class="nav-main-link-badge badge badge-pill badge-danger">{{ $membersCount }}</span>
                                    @endif
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- END Sidebar Scrolling -->
            </nav>
