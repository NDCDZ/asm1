@extends('admin.layouts.master')

@section('content')

<div class="container">
    <div class="page-inner">
      <div class="page-header">
<div class="card">
    <div class="card-header">
        Chỉnh sửa bài viết
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="card-body">
        <form action="{{ route('admin.posts.update', ['id' => $post->id]) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Tiêu đề</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}" placeholder="Nhập tiêu đề">
            </div>
            <div class="form-group">
                <label for="image">Ảnh</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if ($post->image)
                    <img src="{{ asset('storage/images/' . $post->image) }}" alt="Current Image" width="100">
                @endif
            </div>
            <div class="form-group">
                <label for="category">Danh mục</label>
                <select class="form-select" aria-label="Default select example" name="category_id">
                    @foreach ($allCategory as $category)
                        <option value="{{ $category->id }}" {{ $category->id == old('category_id', $post->category_id) ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="description">Mô tả</label>
                <textarea class="form-control" id="description" rows="3" name="content" placeholder="Nhập mô tả">{{ old('content', $post->content) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</div>
</div>
</div>
</div>

@endsection
