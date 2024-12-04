@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>{{ $news->title }}</h3></div>

                <div class="card-body">
                    <img src="{{ $news->image }}" class="img-fluid mb-4" alt="{{ $news->title }}">
                    <p>{{ $news->content }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
