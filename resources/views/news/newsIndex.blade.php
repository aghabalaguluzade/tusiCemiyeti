@extends('layouts.master')
@section('title', 'Xəbərlər Siyahısı')
@section('content')     
    <div class="content content-full">
        <a href="{{ route('news.create') }}"><button class="btn btn-primary float-right">Əlavə et</button></a>
                    <div class="row row-deck mt-5">

                        @if($news && $news != null)
                            @foreach ($news as $new)

                            <!-- Story -->
                        <div class="col-lg-4 js-appear-enabled animated fadeIn" data-toggle="appear" data-offset="50" data-class="animated fadeIn">
                            <a class="block block-rounded block-link-pop" href="{{ route('news.edit', $new->id) }}">
                                <img class="img-fluid" src="{{ asset($new->img) }}" alt="{{ $new->title }}" style="width:650px;height:250px;" />
                                <div class="block-content">
                                    <span class="float-right">
                                        @if($new->status == "1")
                                            <span class="badge badge-success">Aktiv</span>
                                        @else 
                                            <span class="badge badge-danger">Deaktiv</span>
                                        @endif
                                    </span>
                                    <h4 class="mb-1">{{ Str::limit($new->title, '20', '...') }}</h4>
                                    <p class="font-size-sm">
                                        <span class="text-primary">{{ $new->created_at }}</span>
                                    </p>
                                    <p>{!! Str::limit($new->description, '32', '...') !!}</p>                                    
                                <form action="{{ route('news.destroy',$new->id)}}" method="POST">
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