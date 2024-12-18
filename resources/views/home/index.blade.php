@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1 class="mb-4">Tin Tức Mới Nhất</h1>

        @foreach($news as $item)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $item->image }}" class="card-img-top" alt="{{ $item->title }}" style="height: 400px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: x-large;">{{ $item->title }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($item->content, 100) }}</p>
                        <a href="{{ route('news.detail', $item->id) }}" class="btn btn-primary">Xem chi tiết</a>
                    </div>
                <div class="card-footer text-muted">
                    Đăng ngày: {{ $item->created_at->format('d/m/Y') }}
                </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
