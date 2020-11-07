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
<!--更新先はitemsのidにしないと増える php artisan rote:listで確認①-->
<div class="container">
<h1>商品更新フォーム</h1>
{{-- <form action="/santyokus/{{ $santyoku->id }}" method="post"> --}}
<form action="/santyokus/{{ $santyoku->id }}" method="post" enctype="multipart/form-data">
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
        カテゴリー：<br>
            <select name="category">
                <option value="果物">果物</option>
                <option value="野菜">野菜</option>
                <option value="米・穀物">米・穀物</option>
                <option value="魚介類">魚介類</option>
                <option value="肉">肉</option>
            </select>
    </p>
    <p>
        商品詳細：<br>
        <textarea name="description" id="" cols="20" rows="2">{{ $santyoku->description }}</textarea>
    </p>
    <p>
        価格：<br>
        <input type="number" name="price" value="{{ $santyoku->price }}">
    </p>
    <p>
        商品画像：<br>
        {{-- <input type="text" name="image_url" value="{{ $santyoku->image_url }}"> --}}
        <input type="file" name="image_url" value="{{ old('image_url') }}">
    </p>
    <input type="submit" value="更新" class="btn btn-secondary my-2">
    <a href="/santyokus" class="btn btn-secondary my-2">一覧に戻る</a>
</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <form action="/santyokus/{{ $santyoku->id }}" method="post">
        @csrf
        @method('DELETE')
        {{-- <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};"> --}}
        <button type="submit" class="btn btn-secondary my-2" onclick="if(!confirm('削除しますか？')){return false};">削除する</button>
    </form>
</div>
@endsection