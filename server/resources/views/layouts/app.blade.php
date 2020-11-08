<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>産直 - @yield('title')</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">
        <link href="{{ asset('css/album.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
        <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    </head>
    <body>
        @include('layouts.header')
        @yield('content')
        <script>
//スライド用のliタグを全て取得
var slides = document.getElementsByClassName('slides')[0].getElementsByTagName('li');

//スライド表示用の関数を呼び出す（引数はスライドの切り替え時間）
viewSlide(2000);

function viewSlide(msec, slide_no = -1)
{
	//現在のスライドを消す
	if (slides[slide_no]) {
		slides[slide_no].style.display = 'none';
	}
	//スライド番号をカウントアップ
	slide_no++;
	if (slides[slide_no]) {
		//次のスライドを表示
		slides[slide_no].style.display = 'block';
	} else {
		//次のスライドがなければ最初のスライドを表示
		slides[0].style.display = 'block';
		slide_no = 0;
	}
	setTimeout(function(){viewSlide(msec, slide_no);}, msec);
}
</script>
    </body>
</html>