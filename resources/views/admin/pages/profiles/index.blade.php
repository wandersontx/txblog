@extends('admin.layout.app')


@section('content')
    <form action="{{ route('profile.update') }}" method="post">
        @csrf
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="user[name]" class="form-control" value="{{ $user->name ?? '' }}">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="user[email]" class="form-control" value="{{ $user->email ?? '' }}">
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="user[password]" class="form-control" placeholder="Se digitar atualizar senha, favor digttar uma nova senha">
        </div>
        <div class="form-group">
            <label>Sobre</label>
            <textarea name="profile[about]" id="" cols="30" rows="10" class="form-control"> {{ $user->profile->about ?? '' }}</textarea>
        </div>
        <div class="form-group">
            <label>Facebook</label>
            <input type="url" name="profile[facebook_link]" class="form-control" value="{{ $user->profile->facebook_link ?? '' }}">
        </div>
        <div class="form-group">
            <label>Instagram</label>
            <input type="url" name="profile[instagram_link]" class="form-control" value="{{ $user->profile->instagram_link ?? '' }}">
        </div>
        <div class="form-group">
            <label>Site</label>
            <input type="url" name="profile[site_link]" class="form-control" value="{{ $user->profile->site_link ?? '' }}">
        </div>
        <div class="form-group">
            <button class="btn btn-block btn-success">Atualizar meu perfil</button>
        </div>
    </form>
@endsection