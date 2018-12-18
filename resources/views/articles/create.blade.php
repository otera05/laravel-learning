@extends('layout')

@section('content')
    <h1>Write a New Article</h1>

    <hr>

    {{-- エラーの表示を追加 --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! Form::open(['route' => 'articles.create']) !!}
        @include('articles.form', ['published_at' => date('Y-m-d'), 'submitButton' => 'Add Article'])
    {!! Form::close() !!}
@endsection
