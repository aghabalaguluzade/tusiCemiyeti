@extends('layouts.master')
@section('title', 'Bizimlə Əlaqə')
@section('content')
     <div class="content">
                    <!-- Elements -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Bizimlə Əlaqə</h3>
                        </div>
                        <div class="block-content">
                        @include('settings.errors')
                            <form action="{{ route('contactUsPost') }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              @method('put')
                                <div class="row push">
                                    <div class="col-lg-12 col-xl-12 overflow-hidden">
                                    <div class="form-group">
                                            <label for="js-ckeditor5-classic">E-Poçt</label>
                                            <input type="email" class="form-control" name="email" />
                                        </div>
                                        <div class="form-group">
                                            <label for="js-ckeditor5-classic">Telefon</label>
                                            <input type="tel" class="form-control" name="phone" />
                                        </div>
                                        <div class="form-group">
                                            <label for="js-ckeditor5-classic">Ünvan</label>
                                             <textarea class="form-control" name="location" rows="4" placeholder="Ünvanı daxil et..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-md btn-success">Əlavə et</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Elements -->
                </div>
@endsection