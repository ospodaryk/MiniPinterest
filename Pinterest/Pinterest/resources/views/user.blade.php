@extends('layout')

<html lang="ua">
@section('title')
    USER
@endsection
@section('main_content')
    <main role="main">
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
            <h1>Здійсніть пошук!)</h1>
            <form method="post" action="/searrrch">
                @csrf
                <br>
                <input type="text" class="inst" name="searchtext" placeholder="Знайти">
                <br>
                <input type="submit" class="butts loca" name="submit" style="align-content: center" value="Шукати">
            </form>

        </div>
    </main>

@endsection
