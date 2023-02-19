@extends('layouts.master')
@section('title', 'Tədbirlərin Siyahısı')
@section('content')     
    <div class="content content-full">
        <a href="{{ route('events.create') }}"><button class="btn btn-primary float-right">Əlavə et</button></a>
                    <div class="row row-deck mt-5">

                        @if($events && $events != null)
                            @foreach ($events as $event)

                            <!-- Story -->
                        <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                            <a class="block block-rounded block-link-pop" href="{{ route('events.edit', $event->id) }}">
                                <img class="img-fluid" src="{{ asset($event->img) }}" alt="{{ $event->title }}" style="width:650px;height:250px;" />
                                <div class="block-content">
                                    <h4 class="mb-1">{{ Str::limit($event->title, '20', '...') }}</h4>
                                    <p class="font-size-sm">
                                        <span class="text-primary">{{ $event->created_at }}</span>
                                    </p>
                                    <p>{!! Str::limit($event->description, '32', '...') !!}</p>                                    
                                <form action="{{ route('events.destroy',$event->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger float-right mb-2" onclick="return confirm('Silmək istədiyindən əminsən?')"><i class="fa fa-trash"></i></button>
                                </form>
                                </div>
                            </a>
                        </div>
                        
                        <!-- END Story -->
                        @endforeach
                        
                        @endif  
                    </div>

                </div>
@endsection