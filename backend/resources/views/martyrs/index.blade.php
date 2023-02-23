@extends('layouts.master')
@section('title', 'Şəhidlər Siyahısı')
@section('content')
     <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Şəhidlər Siyahısı</h3>
                              <a href="{{ route('martyrs.create') }}"><button class="btn btn-primary float-right">Əlavə et</button></a>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                            <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                              <div class="row">
                              <div class="col-sm-12 col-md-6">
                              <div class="dataTables_length" id="DataTables_Table_2_length">
                              </div></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table class="table table-responsive table-bordered table-striped table-vcenter js-dataTable-full-pagination dataTable no-footer" id="DataTables_Table_2" >
                                <thead>
                                    <tr role="row">
                                        <th class="text-center sorting_asc" tabindex="0" style="width: 20%;" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending">#</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" style="width: 20%;" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending">Şəkil</th>
                                        <th class="d-sm-table-cell sorting" style="width: 20%;" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending">Ad Soyad</th>
                                        <th class="d-sm-table-cell sorting" style="width: 20%;" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Access: activate to sort column ascending">Vəzifəsi</th>
                                        <th style="width: 20%;" class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Registered: activate to sort column ascending">Haqqında</th>
                                        <th style="width: 20%;" class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Registered: activate to sort column ascending">Əməliyyatlar</th>
                                   </tr>
                                </thead>
                                <tbody>

                                        @foreach ($martyrs as $martyr)
                                    
                                <tr class="odd">
                                        <td class="text-center sorting_1">{{ $loop->iteration }}</td>
                                        <td>
                                             <img src="{{ asset($martyr->img) }}" alt="{{ $martyr->name }}" style="width:100px;height:100px" />
                                        </td>
                                        <td class="font-w600">{{ $martyr->name }}</td>
                                        <td class="font-w600">{{ $martyr->job }}</td>
                                        <td class="w-50% font-w600">{!! Str::limit($martyr->description,'30') !!}</td>
                                        <td class="">
                                             <form action="{{ route('martyrs.destroy',$martyr->id)}}" method="POST" style="display:inline">
                                                  @method('DELETE')
                                                  @csrf
                                                  <button type="submit" class="btn btn-danger" onclick="return confirm('Silmək istədiyindən əminsən?')">Sil</button>
                                             </form>
                                             <a href="{{ route('martyrs.edit',$martyr->id) }}" class="btn btn-primary">Redaktə et</a>
                                        </td>
                                   </tr>

                                   @endforeach

                                   </tbody>
                            </table>
                        </div>
                    </div>
@endsection
@section('headcss')
@endsection
@section('scripts')
<!-- Page JS Plugins -->
        <script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/datatables/buttons/buttons.colVis.min.js') }}"></script>

        <!-- Page JS Code -->
        <script src="{{ asset('assets/js/pages/be_tables_datatables.min.js') }}"></script>
@endsection