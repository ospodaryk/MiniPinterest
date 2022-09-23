@extends('layout_1')
<html lang="ua">
@section('title')
    Autho
@endsection

@section('main_content')

    <div  class="reg">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <h4>{{ $error }}</h4>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1>Введіть свої дані</h1> <br>
        <form method="POST" action="/sig">
            @csrf
            <br>
            <label>Логін:
                <input type="text" class="txt" name="siglogin" id="siglogin" placeholder="login"></label>            <br>
            <br>

            <label>Пароль:
                <input type="password" class="txt" name="sigpassword" placeholder="password" id="sigpassword"></label>
            <br><br>            <br>

            <input type="submit" class="butts loca" class="butts loca" name="SEND">
        </form>
    </div>

@endsection
