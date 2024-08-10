@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @foreach ($articles as $article)
        <h3><a href="{{ route('articles.show', $article->id) }}">{{$article->name}}</a></h3>
        <div>{{Str::limit($article->body, 200)}}</div>
        <a href="{{ route('articles.destroy', $article->id) }}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Удалить</a>
    @endforeach

    {{ $articles->links() }}
@endsection
