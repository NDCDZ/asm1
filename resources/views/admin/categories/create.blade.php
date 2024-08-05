<!-- resources/views/admin/categories/create.blade.php -->
@extends('admin.layouts.master')

@section('content')

<div class="container">
    <div class="page-inner">
      <div class="page-header">
        <div class="card">
            <div class="card-header">
                Thêm danh mục mới
            </div>
            <div class="card-body">
                <form action="{{ route('admin.categories.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Tên danh mục</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nhập tên danh mục">
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
