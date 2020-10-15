@extends('admin.layout.site')


@section('content3')

<div class="row">
    <div class="col-8">
        <div class="col-12">
            <h2>Postagens</h2>
        </div>
        @foreach ($posts as $post)
            <div class="col-12">
                @if ($post->thumb)
                    <img src=" {{ asset('storage/'.$post->thumb) }}" alt="" class="img-fluid" style="margin-botom: 20px; width:400px;">
                @else
                    <img src="{{ asset('img/sem_foto.png') }}" alt="" class="img-fluid" style="margin-bottom: 20px; width:400px;">    
                @endif
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->description }}</p>
                <a href="{{ route('site.single', ['slug' => $post->slug]) }}">Leia mais...</a>
            <hr>
            </div>
        @endforeach
        <div class="col-12">
            {!! $posts->links() !!}
        </div>
    </div>
    <div class="col-4">
        <div class="col-12">
            <h2>SideBar</h2>
            <hr>
        </div>
    </div>
</div>
@endsection