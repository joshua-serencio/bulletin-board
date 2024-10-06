@extends('layouts.app')

@section('content')
<h1>Articles</h1>
@foreach ($articles as $article)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $article->title }}</h5>
            <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
            <p class="card-text"><small class="text-muted">Created by {{ $article->user->name }} on {{ $article->created_at }}</small></p>
            <a href="{{ route('articles.show', $article) }}" class="btn btn-primary">View Article</a>
            <form action="{{ route('articles.destroy', $article) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endforeach
@endsection
