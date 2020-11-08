@extends('layouts.app')

@section('title', '一覧画面')

@section('content')

<div><h1>Company Name</h1></div>
<div><h2>お問い合わせ</h2> </div>
<div>
        <div>
        <h1>お問い合わせ 送信完了</h1>
        <p>
        お問い合わせありがとうございました。<br>
        内容を確認のうえ、回答させて頂きます。<br>
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

@endsection