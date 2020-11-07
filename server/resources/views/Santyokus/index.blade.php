@extends('layouts.app')

@section('title', '一覧画面')

@section('content')
  <section class="jumbotron text-center">
    <div class="container">
      <h1>Album example</h1>
      <p class="lead text-muted">sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <p>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p>
    </div>
  </section>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                @foreach ($santyokus as $santyoku)
                        {{-- {{var($santyokus['items'])}} --}}
                    {{dd($santyokus)}}
                    @include('layouts.santyoku', compact('santyoku'))
                    @endforeach
                    </div>
                </div>
            </div>
            
            @endsection
