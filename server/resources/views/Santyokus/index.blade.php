@extends('layouts.app')

@section('title', '一覧画面')

@section('content')

  {{-- <section class="jumbotron text-center"> --}}
  <section>
    <div class="container">
      {{-- <h1>JavaScriptで横スクロールのスライドショーを実装する方法</h1> --}}
{{-- <div id="slick01">
<div><img src="storage/santyoku_image/1.jpg" alt="アイキャッチ画像01"></div>
<div><img src="storage/santyoku_image/2.jpg" alt="アイキャッチ画像02"></div>
<div><img src="storage/santyoku_image/3.jpg" alt="アイキャッチ画像03"></div>
<div><img src="storage/santyoku_image/4.jpg" alt="アイキャッチ画像04"></div>
</div> --}}
<div class="i"><h1 align="center" >OnlineGreenGrocer</h1></div>
<ul class="slides">
	<li class=""><img class="" src="storage/santyoku_image/1.jpg" /></li>
	<li class=""><img class="" src="storage/santyoku_image/2.jpg" /></li>
	<li class=""><img class="" src="storage/santyoku_image/3.jpg" /></li>
	<li class=""><img class="" src="storage/santyoku_image/4.jpg" /></li>
</ul>
      {{-- <img  class="max" src="storage/santyoku_image/1.jpg" alt=""> --}}
      {{-- <img  class="max" src="storage/santyoku_image/rand(1,4).jpg" alt=""> --}}
      {{-- <p class="lead text-muted">sweet, but not too short so folks don’t simply skip over it entirely.</p> --}}
      {{-- <p>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p> --}}
    </div>
  </section>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                @foreach ($santyokus as $santyoku)
                    @include('layouts.santyoku', compact('santyoku'))
                    @endforeach
                  </div>
                  {{ $santyokus->links() }}
                </div>
            </div>
@endsection
