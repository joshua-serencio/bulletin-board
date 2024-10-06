@extends('layouts.app')

@section('content')
<h1>{{ $article->title }}</h1>
<p>{{ $article->content }}</p>
<p><small class="text-muted">Created by {{ $article->user->name }} on {{ $article->created_at }}</small></p>

<h2>Comments</h2>
@foreach ($article->comments as $comment)
    <div class="card mb-2">
        <div class="card-body">
            <p>{{ $comment->content }}</p>
            <p><small class="text-muted">Commented by {{ $comment->user->name }} on {{ $comment->created_at }}</small></p>
        </div>
    </div>
@endforeach

<form action="{{ route('comments.store', $article) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="content">Comment</label>
        <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add Comment</button>
</form>
@endsection
