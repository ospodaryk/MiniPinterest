@extends('layout')
<html lang="ua">


@section('title')
    MainPage
@endsection

@section('main_content')
    <main role="main">
        <div class="block">
            <h1>Необхідно авторизуватися</h1> <br>
            <h2>Оберіть ваш статус</h2>
            <br><br>
            <a class="btnnew" href="/upload">Адміністратор</a>
            <a class="btnnew " href="/user">Користувач</a><br>
            <br><br><br>
            <a class="btnnew " href="/data">База Даних</a>
        </div>
    </main>

@endsection
