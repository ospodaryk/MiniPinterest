<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Authorisation;

use Illuminate\Http\Request;

?>
<?php
$tlogin = $_POST['siglogin'];
$tpassword = $_POST['sigpassword'];
$temporaryp = "false";
$temporaryl = "false";
$temporary = "false"
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
            @if(($el->flogin!==$tlogin))
                {{$temporaryl="false"}}
            @elseif ($el->fpassword!==$tpassword)

                {{$temporaryl="false"}}
            @else
              <?php $temporaryl="true";
              $temporaryp="true" ; $temporary="true"?>

<?php   $temporaryl="true"?>
            @endif
        @endforeach
    </div>

    @if($temporary==="true")
        <div>
            <h1><img src="/images/img.png" width="80">Успішна авторизація</h1> <br>
            <h1><a class="sth" href="/user" style="color: #d90315;  display: flex;
              flex-direction: column;
              align-items: center;">Щоб перейти на основну сторінку натисніть тут....</a></h1>
        </div>

    @else

        <div class="reg">

            <div class="alert alert-danger">
                <h4>Неправильний логін чи пароль!</h4>
            </div>
            <h1>Введіть свої дані</h1> <br>
            <form method="POST" action="/sig">
                @csrf
                <br>
                <label>Логін:
                    <input type="text" class="txt" name="siglogin" id="siglogin" placeholder="login"></label> <br>
                <br>

                <label>Пароль:
                    <input type="password" class="txt" name="sigpassword" placeholder="password"
                           id="sigpassword"></label>
                <br><br> <br>

                <input type="submit" class="butts loca" class="butts loca" name="SEND">
            </form>
        </div>
@endif

@endsection
