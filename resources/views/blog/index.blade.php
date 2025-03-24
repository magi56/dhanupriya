<!DOCTYPE html>
<html>
<head>
    <title>Blog List</title>
</head>
<body>
    <h1>All Blogs</h1>
    <a href="{{ route('blog.create') }}">Create New Blog</a>
    @foreach($blogs as $blog)
        <div>
            <img src="{{ asset('uploads/' . $blog->image) }}" width="200">
            <p>{{ $blog->paragraph }}</p>
        </div>
    @endforeach
</body>
</html>
