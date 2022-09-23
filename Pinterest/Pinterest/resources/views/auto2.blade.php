
<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Authorisation;

use Illuminate\Http\Request;?>
<?php
$tname = $_POST['name'];
$tlogin = $_POST['login'];
$tpassword = $_POST['password'];
$temporary="true"
?>
@extends('layout_1')
<html lang="ua">
@section('title')
    Autho
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
    <div class="wh">
    @foreach($reviews as $el)
            @if(($el->flogin==$tlogin))
                {{$temporary="false"}}
                @break
@endif
    @endforeach
    </div>

    @if($temporary=="true")
        <?php          $review = new Authorisation();
            $review->flogin = $tlogin;
            $review->fpassword =$tpassword ;
            $review->name = $tname;
            $review->save();
      ?>
        <div>
            <h1><img src="/images/img.png" width="80">Успішна авторизація</h1> <br>
                        <h1><a class="sth" href="/user" style="color: #d90315;  display: flex;
              flex-direction: column;
              align-items: center;">Щоб перейти на основну сторінку натисніть тут....</a></h1>
        </div>

@else

        <div class="reg">
            <div class="alert alert-danger">
                <h4>Такий логін вже існує, будь ласка введіть інший</h4>
            </div>
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
@endif

@endsection
