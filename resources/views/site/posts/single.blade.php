@extends('admin.layout.site')

@section('content3')

    <div class="row">
        <div class="col-8">
            <div class="col-12">
                <h2>{{ $post->title }}</h2>
                <hr>
            </div>
            <div class="col-12">
                @if ($post->thumb)
                    <img src="{{ asset('storage/'. $post->thumb) }}" alt="" class="img-fluid" style="margin-bottom: 20px;">
                @else
                    <img src="{{ asset('img/sem_foto.png') }}" alt="" class="img-fluid" style="margin-bottom:20px;">    
                @endif
                <p> {!! $post->content !!} </p>
            </div>
            @include('site.includes.comments')
        </div>
        <div class="col-4">
            <div class="col-12">
                <h2>Sidebar</h2>
                <hr>
            </div>
        </div>
    </div> 
@endsection

