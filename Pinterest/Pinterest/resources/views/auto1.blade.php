@extends('layout_1')
<html lang="ua">
@section('title')
    Autho
@endsection

@section('main_content')

    <div class="reg">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <h4>{{ $error }}</h4>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="/aut">
            @csrf
            <h1>Введіть свої дані для реєстрації: </h1>
            <br>

            <label>Ім'я:
                <input type="text" class="txt" name="name" id="name" placeholder="Your Name"> </label>
            <br><br>

            <label>Логін:
                <input type="text" class="txt" name="login" id="login" placeholder="login"></label>
            <br><br>

            <label>Пароль:
                <input type="password" class="txt" name="password" id="password" placeholder="password"></label>

            <br><br>            <br>

            <input type="submit" class="butts loca" name="SEND">
        </form>
    </div>

@endsection
