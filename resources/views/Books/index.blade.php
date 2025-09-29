@extends('layouts.app')

@section('content')
<h1 class="mb-4">Danh sách sách</h1>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Thêm sách mới</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tiêu đề</th>
            <th>Tác giả</th>
            <th>NXB</th>
            <th>Năm XB</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Mô tả</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @forelse($books as $book)
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author ?? '-' }}</td>
            <td>{{ $book->publisher ?? '-' }}</td>
            <td>{{ $book->published_year ?? '-' }}</td>
            <td>{{ $book->price ?? '-' }}</td>
            <td>{{ $book->quantity }}</td>
            <td>{{ $book->description ?? '-' }}</td>
            <td>
                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-warning">Sửa</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Bạn có chắc muốn xóa không?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="9">Chưa có sách nào.</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
