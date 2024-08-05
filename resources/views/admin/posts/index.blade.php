
@extends('admin.layouts.master')
@section('content')

<div class="container">
    <div class="page-inner">
      <div class="page-header">
    <h1>Danh sách bài viết</h1>
    <body>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Ảnh</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Lượt xem</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Ngày Tạo</th>
                <th scope="col">Ngày đăng</th>
                <th scope="col">Chức năng</th>
              </tr>
            </thead>
            <tbody>
        @foreach ($allPosts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td><img src="{{ asset('storage/images/' .$post->image) }}" class="img-thumbnail" alt="" width="200" height="200"></td>
                <td>{{$post->category_id }}</td>
                <td>{{$post->view}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td>
                    <a href="{{route('admin.posts.edit', ['id'=>$post->id])}}"><button type="button" class="btn btn-warning">Sửa</button></a>
                    <form action="{{ route('admin.posts.destroy', ['id'=>$post->id]) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này không?')">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
            </tbody>
          </table>
        </div>
    </div>
</div>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
@endsection
