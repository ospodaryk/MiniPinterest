
@extends('layout')
<html lang="ua">
@section('title')
    Admin
@endsection

@section('main_content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <h4>{{ $error }}</h4>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <h1>Завантажте свою фотографію!)</h1> <br>
        <form method="POST" action="/upload" enctype="multipart/form-data">
            @csrf
            <label>Введіть опис картинки : </label>
            <input type="text" style=" height: 70px; width: 420px; background: #EFEFEF;" name="title"
                   placeholder="Картинка">
            <br>
            <label>Завантажити файл: </label>
            <br>
            <input type="file" name="picc" accept=".png,.jpg,.jpeg">
            <br>
            <br>
            <input type="submit" class="butts loca" name="Upload">
        </form>
    </div>

@endsection
