@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>News Management</h2>
        <a href="{{ route('admin.create') }}" class="btn btn-success mb-3">Add New Article</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Published Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->content }}</td>
                    <td>{{ $article->category->name ?? 'N/A' }}</td>
                    <td>{{ $article->published_at }}</td>
                    <td>
                        <a href="{{ route('admin.edit', $article->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('admin.destroy', $article->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $news->links() }}
    </div>
@endsection