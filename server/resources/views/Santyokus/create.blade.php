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
<div class="container">
    <h1>商品登録フォーム</h1>

        <form action="/santyokus" method="post" enctype="multipart/form-data">
            @csrf
            <p>
                商品名：<br>
                <input type="text" name="title" value="{{ old('title') }}">
            </p>
            <p>
                商品詳細：<br>
                <textarea name="description" id="" cols="20" rows="2">{{ old('body')}}</textarea>
            </p>
            <p>
                価格：<br>
                <input type="number" name="price" value="{{ old('price') }}">
            </p>
            <p>
                商品画像：<br>
                <input type="file" name="image_url" value="{{ old('image_url') }}">
            </p>
            <p>
                <button type="submit" class="btn btn-secondary my-2">出品</button>
                <a href="/santyokus">一覧に戻る</a>
            </p>
        </form>
    </div>
@endsection