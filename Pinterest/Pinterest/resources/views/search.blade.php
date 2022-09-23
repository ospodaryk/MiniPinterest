@extends('layout')
<html lang="ua">
@section('title')
    USER
@endsection
<?php
$temporary = $_POST['searchtext'];
?>
@section('main_content')
    <main role="main">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            <form method="post" action="/searrrch">
                @csrf
                <input class="inst" type="text" name="searchtext" placeholder="Знайти">
                <br>
                <input class="butts loca" type="submit" name="submit" value="Шукати">

            </form>
            <h1>Результат пошуку " <?php echo $temporary; ?> " </h1>
        </div>
    </main>
    @foreach($reviews as $el)
        <div class="pw">
            @if(strpos($el->title, $temporary) !== false)
                <img src={{$el->path}} width="550">
            @endif
        </div>
@endforeach
@endsection
