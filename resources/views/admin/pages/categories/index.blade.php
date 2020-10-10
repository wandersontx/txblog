@extends('admin.layout.app')

@section('title','categorias')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <a href="{{ route('categories.create') }} " class="btn btn-primary float-right mb-1">Criar categoria</a>
            {{-- <a href="{{ route('posts.create')}} --}}
            <h2>Categoria</h2>
            <div class="clearfix"></div>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Criado em</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>
                        {{ $category->name }}
                    </td>
                    <td>
                        {{ date('d/m/Y', strtotime($category->created_at)) }}
                    </td>
                    <td>
                        <a href="{{ route('categories.show', ['category' => $category->id]) }}" class="btn btn-info" >Detalhes</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Nada encontrado!</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {!! $categories->links() !!}
@endsection