@extends('layouts.app')

@section('content')
<h1>Create Article</h1>
<form action="{{ route('articles.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Article Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="form-group">
        <label for="content">Article Content</label>
        <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Post</button>
</form>
@endsection
