@extends('layouts.app')

@section('content')
<h1 class="mb-4">Sửa sách</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
</div>
@endif

<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Tiêu đề</label>
        <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Tác giả</label>
        <input type="text" name="author" class="form-control" value="{{ $book->author }}">
    </div>
    <div class="mb-3">
        <label class="form-label">NXB</label>
        <input type="text" name="publisher" class="form-control" value="{{ $book->publisher }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Năm xuất bản</label>
        <input type="number" name="published_year" class="form-control" min="1900" max="{{ date('Y') }}" value="{{ $book->published_year }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Giá</label>
        <input type="number" name="price" class="form-control" step="0.01" value="{{ $book->price }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Số lượng</label>
        <input type="number" name="quantity" class="form-control" min="0" value="{{ $book->quantity }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Mô tả</label>
        <textarea name="description" class="form-control" rows="3">{{ $book->description }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Cập nhật</button>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Hủy</a>
</form>
@endsection
