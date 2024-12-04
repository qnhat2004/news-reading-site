@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Article</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" id="title" name="title"
                                class="form-control @error('title') is-invalid @enderror" value="{{ $article->title }}"
                                required>
                            @error('title')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea id="content" name="content"
                                class="form-control @error('content') is-invalid @enderror" rows="5"
                                required>{{ $article->content }}</textarea>
                            @error('content')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select id="category" name="category_id"
                                class="form-control @error('category_id') is-invalid @enderror" required>
                                <?php  
                                    $categories = App\Models\Category::all(); 
                                ?>
                                <option value="{{ $article->category_id }}">{{ $article->category->name }}</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="image" class="form-label">Image URl</label>
                            <input type="text" id="image" name="image"
                                class="form-control @error('image') is-invalid @enderror" value="{{ $article->image }}"
                                required>
                            @error('image')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3"></div>
                        <button type="submit" class="btn btn-primary">Update Article</button>
                        <a href="{{ route('admin.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection