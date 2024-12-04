@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>{{ $news->title }}</h3></div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{ $news->image }}" class="img-fluid mb-4" alt="{{ $news->title }}">
                        </div>
                        <div class="col-md-6">
                            <p>{{ $news->content }}</p>
                        </div>
                        <div class="text-muted">
                            Đăng ngày: {{ $news->created_at->format('d/m/Y') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
