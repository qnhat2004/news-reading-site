@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h4>Edit Article</h4>
    <form action="{{ route('news.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $product->title) }}" required>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" class="form-control" value="{{ old('price', $product->price) }}" required>
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"
                required>{{ old('description', $product->description) }}</textarea>
        </div>
        <div class="form-group">
            <label>Category</label>
            <textarea name="category" class="form-control" required>{{ old('category', $product->category) }}</textarea>
        </div>
        <div class="form-group">
            <label>Image Source</label><br>
            <input type="radio" name="image_option" value="url" onclick="showImageInput('url')" {{ old('image_option', 'url') == 'url' ? 'checked' : '' }}> URL Image
            <input type="radio" name="image_option" value="upload" onclick="showImageInput('upload')" {{ old('image_option') == 'upload' ? 'checked' : '' }}> Upload Image
        </div>
        <div class="form-group" id="image_url_input"
            style="display: '{{ old('image_option', 'url') == 'url' ? 'block' : 'none' }}';">
            <label>Image URL</label>
            <input type="url" name="image_url" class="form-control" value="{{ old('image_url', $product->image) }}">
        </div>
        <div class="form-group" id="image_file_input"
            style="display: '{{ old('image_option') == 'upload' ? 'block' : 'none' }}';">
            <label>Upload Image</label>
            <input type="file" name="image_file" class="form-control">
        </div>
        <div class="form-group">
            <label>Rating rate</label>
            <input name="rating_rate" type="number" step="0.1" class="form-control"
                value="{{ old('rating_rate', $product->rating_rate) }}" required>
        </div>
        <div class="form-group">
            <label>Rating count</label>
            <input name="rating_count" type="number" step="0.1" class="form-control"
                value="{{ old('rating_count', $product->rating_count) }}" required>
        </div>
        <div class="mt-3">
            <input type="submit" class="btn btn-success" value="Save">
        </div>
    </form>
</div>
@endsection