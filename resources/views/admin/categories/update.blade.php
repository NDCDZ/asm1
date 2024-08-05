@extends('admin.layouts.master')

@section('content')

<div class="container">
    <div class="page-inner">
      <div class="page-header">
            <div class="card">
                <div class="card-header">
                    Chỉnh sửa danh mục
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.categories.update', ['id'=>$category->id]  ) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Tên danh mục</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" placeholder="Nhập tên danh mục">
                        </div>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
