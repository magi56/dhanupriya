<!DOCTYPE html>
<html>
<head>
    <title>Create Blog</title>
</head>
<body>
    <h1>Create New Blog</h1>
    <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Upload Image:</label>
        <input type="file" name="image" required>
        <br>
        <label>Paragraph:</label>
        <textarea name="paragraph" required></textarea>
        <br>
        <button type="submit">Post Blog</button>
    </form>
</body>
</html>
