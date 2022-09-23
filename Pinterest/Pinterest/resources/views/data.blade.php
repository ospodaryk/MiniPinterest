@extends('layout')

<html lang="ua">
@section('title')
    USER
@endsection
@section('main_content')
    <main role="main">
        <div>
            <h1>Усі зображення,що доступні для пошуку </h1>
        </div>
    </main>
    @foreach($reviews as $el)
        <div class="pw">
                <img src={{$el->path}} width="550">
        </div>
@endforeach
@endsection
