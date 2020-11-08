@extends('layouts.app')

@section('title', '一覧画面')

@section('content')

<div class="container" align="center">

    <div><h1>Thank you for your order</h1></div>
    <div><h2></h2> </div>
    <div>
        <div>
            <img src="{{ url($santyoku->image_url) }}" alt="">
    <h2>
        <b>商品名：{{ $santyoku->title }}</b>
    </h2>
    <p align="left">
        <b>商品詳細：{{ $santyoku->description }}</b>
    </p>
    <h3 style="color: #008000;"><hr>
        <b>価格：¥{{ $santyoku->price }}</b>
    </h3>
            <h1>購入完了</h1>
            <p>
                ありがとうございます。<br>
                2~3日後に発送します。<br>
                しばらくお待ちください。
            </p>
            <form action="/santyokus/{{ $santyoku->id }}" method="post">
                @csrf
                @method('DELETE')
                {{-- <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};"> --}}
                <button type="submit" class="btn btn-secondary my-2" onclick="history.back()">商品一覧に戻る</button>
            </form>
        </div>
    </div>
</div>
    
    @endsection