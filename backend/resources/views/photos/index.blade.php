@extends('layouts.master')
@section('title', 'Fotoların Siyahısı')
@section('content')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Fotoların Siyahısı</h3>
            <a href="{{ route('photos.create') }}">
                <button class="btn btn-primary float-right">Əlavə et</button>
            </a>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="DataTables_Table_2_length">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table
                            class="table table-responsive table-bordered table-striped table-vcenter js-dataTable-full-pagination dataTable no-footer"
                            id="DataTables_Table_2">
                            <thead>
                            <tr role="row">
                                <th class="text-center sorting_asc" tabindex="0" style="width: 10%;"
                                    aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-sort="ascending"
                                    aria-label="#: activate to sort column descending">#
                                </th>
                                <th class="d-sm-table-cell sorting" style="width: 15%;" tabindex="0"
                                    aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                                    aria-label="Email: activate to sort column ascending">Önizləmə şəkili
                                </th>
                                <th class="d-sm-table-cell sorting" style="width: 20%;" tabindex="0"
                                    aria-controls="DataTables_Table_2" rowspan="1" colspan="1"
                                    aria-label="Access: activate to sort column ascending">Başlıq
                                </th>
                                <th style="width: 35%;" class="sorting" tabindex="0" aria-controls="DataTables_Table_2"
                                    rowspan="1" colspan="1" aria-label="Registered: activate to sort column ascending">
                                    Haqqında
                                </th>
                                <th style="width: 20%;" class="sorting" tabindex="0" aria-controls="DataTables_Table_2"
                                    rowspan="1" colspan="1" aria-label="Registered: activate to sort column ascending">
                                    Əməliyyatlar
                                </th>
                            </tr>
                            </thead>
                            <tbody>


                            @foreach ($photos as $photo)


                                <tr class="odd">
                                    <td class="text-center sorting_1">{{ $loop->iteration }}</td>
                                    <td>


                                        <div class="row items-push js-gallery">
                                            <div class="col-md-12 col-lg-12 col-xl-12 animated fadeIn">
                                                <div class="options-container fx-item-zoom-in fx-overlay-zoom-out">
                                                    <img class="img-fluid options-item"
                                                         src="{{ asset($photo->preview_img) }}"
                                                         alt="{{ $photo->title }}" style="height:100px"/>

                                                    @foreach ($photo->images as $image)
                                                        <div class="options-overlay bg-black-75">
                                                            <div class="options-overlay-content">
                                                                <a class="btn btn-sm btn-primary img-lightbox"
                                                                   href="{{ asset($image->image) }}">
                                                                    <i class="fa fa-search-plus mr-1"></i> Bax
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>


                                    </td>
                                    <td class="font-w600">{{ $photo->title }}</td>
                                    <td class="w-50% font-w600">{!! Str::limit($photo->description,'30') !!}</td>
                                    <td>
                                        <form action="{{ route('photos.destroy',$photo->id)}}" method="POST"
                                              style="display:inline">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Silmək istədiyindən əminsən?')">Sil
                                            </button>
                                        </form>
                                        <a href="{{ route('photos.edit',$photo->id) }}" class="btn btn-primary btn-sm">Redaktə
                                            et</a>
                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                @endsection
                @section('headcss')
                    <link rel="stylesheet" href="{{ asset('assets/js/plugins/magnific-popup/magnific-popup.css') }}"/>
            @endsection
            @section('scripts')
                <!-- Page JS Plugins -->
                    <script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
                    <script src="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
                    <script
                        src="{{ asset('assets/js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
                    <script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.print.min.js') }}"></script>
                    <script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>
                    <script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>
                    <script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.colVis.min.js') }}"></script>

                    <!-- Page JS Code -->
                    <script src="{{ asset('assets/js/pages/be_tables_datatables.min.js') }}"></script>
                    <!-- Page JS Plugins -->
                    <script src="{{ asset('assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

                    <!-- Page JS Helpers (Magnific Popup Plugin) -->
                    <script>jQuery(function () {
                            Dashmix.helpers('magnific-popup');
                        });</script>
@endsection
