@extends('admin.layouts.master')
@section('content')

<div class="container">
    <div class="page-inner">
      <div class="page-header">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Nhập thông tin bài viết</h2>
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
                <form action="{{ route('admin.posts.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Tiêu đề</label>
                        <input type="text" class="form-control" id="title" placeholder="Nhập tiêu đề" name="title">
                    </div>
                    <div class="form-group">
                        <label for="image">Ảnh</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                    <div class="form-group">
                        <label for="category">Danh mục</label>
                        <select class="form-select" aria-label="Default select example" name="category_id">
                            <option selected>Chọn 1 danh mục</option>
                            @foreach ($allCategory as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Mô tả</label>
                        <textarea class="form-control" id="description" rows="3" placeholder="Nhập mô tả" name="content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
</div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>

    </html>
@endsection
