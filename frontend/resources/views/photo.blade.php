@extends('layouts.master')
@section('title', 'Foto')
@section('css')
    <link rel="stylesheet" href="{{ config('constant.path') }}assets/js/plugins/magnific-popup/magnific-popup.css" />
@endsection
@section('content')

    <div class="container">
        <div class="cardS">
            <ul class="photo_cards">
                @foreach ($photos as $photo)
                <li>
                    <div  class="photo_card">
                        <img  src="{{ config('constant.path') . $photo->preview_img }}" class="photo_card__image" alt="" />
                        <!-- <svg class="photo_card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>      -->
                        <div class="photo_card__overlay">
                            <div class="photo_card__header">
                                <!-- <svg class="photo_card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                      -->
                            </div>
                            <div class="text-center">
                                <p class="photo_card__description">{!! $photo->description !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="popup-gallery">
                        @foreach ($photo->images as $image)
                            <a  href="{{ config('constant.path') . $image->image }}">
                                <i class="fa fa-search-plus mr-1"></i>
                            </a>
                        @endforeach
                    </div>
                </li>



                @endforeach
            </ul>
        </div>
    </div>



@endsection

@section('js')
{{--    <script src="{{ asset('assets/js/photo.js') }}"></script>--}}

                <script src="{{ config('constant.path') }}assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('.popup-gallery').magnificPopup({
                            delegate: 'a',
                            type: 'image',
                            tLoading: 'Loading image #%curr%...',
                            mainClass: 'mfp-img-mobile',
                            gallery: {
                                enabled: true,
                                navigateByImgClick: true,
                                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                            },
                            image: {
                                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                                titleSrc: function(item) {
                                    return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                                }
                            }
                        });
                    });
                </script>
@endsection
