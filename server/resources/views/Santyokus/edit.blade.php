@extends('layouts.app')

@section('title', '商品登録')

@section('content')
@if (count($errors) > 0)
    <div>
        <P>
            <b>{{ count($errors) }}件のエラーがあります。</b>
        </P>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<h1>商品更新フォーム</h1>
<!--更新先はitemsのidにしないと増える php artisan rote:listで確認①-->
<form action="/santyokus/{{ $santyoku->id }}" method="post">
    @csrf
    <!-- resourceの場合PUTを指定してあげないとエラーが起きる php artisan rote:listで確認② -->
    @method('PUT')
    <!-- idはそのまま -->
    <input type="hidden" name="id" value="{{ $santyoku->id }}">
    <p>
        商品名：<br>
        <input type=" text" name="title" value="{{ $santyoku->title }}">
    </p>
    <p>
        商品詳細：<br>
        <input type="text" name="description" value="{{ $santyoku->description }}">
    </p>
    <p>
        価格：<br>
        <input type="number" name="price" value="{{ $santyoku->price }}">
    </p>
    <p>
        商品画像URL：<br>
        <input type="text" name="image_url" value="{{ $santyoku->image_url }}">
    </p>
    <input type="submit" value="更新">
    <a href="/santyokus">一覧に戻る</a>
</form>
