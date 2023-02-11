@extends('layouts.master');
@section('title', 'Fotolara Baxış')
@section('content')
     <div class="content">
                    <!-- Simple Gallery -->
                    <h2 class="content-heading">Fotolar</h2>
                    <div class="row items-push js-gallery img-fluid-100 js-gallery-enabled">

                         @foreach ($photo->images as $image)
                    
                        <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                                   <img src="{{ asset($image->image) }}" alt="{{ $photo->title }}" class="img-fluid img-link img-link-zoom-in img-thumb img-lightbox" style="width:370px;height:245" />
                         </div>
                    
                    
                         @endforeach
                    
                    </div>
                    
                    <div class="form-group d-flex justify-content-between">
                         <a href="{{ route('photos.index') }}" class="btn btn-md btn-primary">Geri</a>
                    </div>
                    <!-- END Simple Gallery -->
                </div>
@endsection