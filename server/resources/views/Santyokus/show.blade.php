@extends('layouts.app')

@section('title', '一覧画面')

@section('content') 
<div class="container">

    <h2>
        <b>商品名：{{ $santyoku->title }}</b>
    </h2>
    <p>
        <b>商品詳細：{{ $santyoku->description }}</b>
    </p><hr>
    <h3>
        <b>価格：¥{{ $santyoku->price }}</b>
    </h3>
    <p>
        <img src="{{ url($santyoku->image_url) }}">
    </p>
    
    {{-- <a href="/santyokus/{{ $santyoku->id }}/edit">編集する</a> --}}
    {{-- <a href="/santyokus">一覧に戻る</a> --}}
    <button type="submit" class="btn btn-secondary my-2" onclick="location.href='/santyokus/{{ $santyoku->id }}/edit'">編集する</button>
    <button type="button" class="btn btn-secondary my-2" onclick="location.href='/santyokus'">一覧に戻る</button>

    {{-- <form action="/santyokus/{{ $santyoku->id }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
    </form> --}}
</div>
@endsection