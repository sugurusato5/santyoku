@extends('layouts.app')

@section('title', '一覧画面')

@section('content') 
<div class="container">

    <p>
        <b>商品名：{{ $santyoku->title }}</b>
    </p>
    <p>
        <b>商品詳細：{{ $santyoku->description }}</b>
    </p>
    <p>
        <b>価格：{{ $santyoku->price }}</b>
    </p>
    <p>
        <img src="{{ $santyoku->image_url }}">
    </p>
    
    <a href="/santyokus/{{ $santyoku->id }}/edit">編集する</a>
    <a href="/santyokus">一覧に戻る</a>
    <form action="/santyokus/{{ $santyoku->id }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
    </form>
</div>
@endsection