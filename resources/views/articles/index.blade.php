@extends('layout')

@section('content')
    <h1>
        Articles
        @auth
            {{-- ログインしているときだけ表示 --}}
            <a href="{{ route('articles.create') }}" class="btn btn-primary float-right">新規作成</a>
        @endauth
    </h1>
    <hr>

    @foreach ($articles as $article)
        <article>
            <h2>
                <a href="{{ route('articles.show', ['id' => $article->id]) }}">
                    {{ $article->title }}
                </a>
            </h2>
        </article>
    @endforeach
@endsection
