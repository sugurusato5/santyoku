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
                カテゴリー：<br>
            <select name="category">
                <option value="果物">果物</option>
                <option value="野菜">野菜</option>
                <option value="米・穀物">米・穀物</option>
                <option value="魚介類">魚介類</option>
                <option value="肉">肉</option>
            </select>
                {{-- {{-- <input type="text"name="category" value="{{ old('title') }}"> --}}
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
                {{-- <input type="file" name="image_url" value="{{ old('image_url') }}"> --}}
            {{-- </form> --}}


<input type="file" accept='image/*' onchange="previewImage(this);" name="image_url" value="{{ old('image_url') }}">
<p>
Preview:<br>
<img id="preview" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" style="max-width:200px;">
</p>
<script>
function previewImage(obj)
{
	var fileReader = new FileReader();
	fileReader.onload = (function() {
		document.getElementById('preview').src = fileReader.result;
	});
	fileReader.readAsDataURL(obj.files[0]);
}
</script>

            </p>
            <p>
                <button type="submit" class="btn btn-secondary my-2">出品</button>
                <button type="button" class="btn btn-secondary my-2" onclick="location.href='/santyokus'">一覧に戻る</button>
            </p>
        </form>

    {{-- <div class="container">
        <form action="/santyokus" method="post" enctype="multipart/form-data">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="form-group">
                    <label for="name"><span class="label label-danger"></span> 商品名</label>
                    <input t="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="" autofocus required>
                </div>
                <div class="form-group">
                    <label for="email"><span class="label label-danger"></span>商品詳細</label>
                    <textarea name="description" id=""class="form-control" cols="20" rows="2">{{ old('body')}}</textarea>
                    {{-- <input type="email" id="email" name="email" class="form-control" placeholder="例：raffaello@jungleocean.com" required> --}}
                {{-- </div>
                <div class="form-group">
            <select name="category">
                <option value="果物">果物</option>
                <option value="野菜">野菜</option>
                <option value="米・穀物">米・穀物</option>
                <option value="魚介類">魚介類</option>
                <option value="肉">肉</option>
            </select>
                </div>
               商品画像：<br>
                <input type="file" name="image_url" value="{{ old('image_url') }}">
            </p>
            <p>
                <button type="submit" class="btn btn-secondary my-2">出品</button>
                <button type="button" class="btn btn-secondary my-2" onclick="location.href='/santyokus'">一覧に戻る</button>
                <a href="/santyokus">一覧に戻る</a>
            </p>
        </form> 
    </div>

    <hr>

    </div> --}}
@endsection 