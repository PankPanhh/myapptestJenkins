@extends('layouts.app')

@section('content')
<h1 class="mb-4">Thêm sách mới</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
</div>
@endif

<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Tiêu đề</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Tác giả</label>
        <input type="text" name="author" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">NXB</label>
        <input type="text" name="publisher" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Năm xuất bản</label>
        <input type="number" name="published_year" class="form-control" min="1900" max="{{ date('Y') }}">
    </div>
    <div class="mb-3">
        <label class="form-label">Giá</label>
        <input type="number" name="price" class="form-control" step="0.01">
    </div>
    <div class="mb-3">
        <label class="form-label">Số lượng</label>
        <input type="number" name="quantity" class="form-control" min="0" value="0">
    </div>
    <div class="mb-3">
        <label class="form-label">Mô tả</label>
        <textarea name="description" class="form-control" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Lưu</button>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">Hủy</a>
</form>
@endsection
