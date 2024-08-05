
@extends('admin.layouts.master')

@section('content')

<div class="container">
    <div class="page-inner">
      <div class="page-header">
<div class="card">
    <div class="card-header">
        Danh sách danh mục
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Ngày Tạo</th>
                <th scope="col">Ngày Cập Nhật</th>
                <th scope="col">Chức năng</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($allCategories as $category)
                <tr>
                    <th scope="row">{{ $category->id }}</th>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->updated_at }}</td>
                    <td>
                        <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
          </table>
    </div>
</div>
</div>
</div>
</div>
@endsection
