<!-- resources/views/todos/edit.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!DOCTYPE html>
<html>
<head><title>編輯 Todo</title></head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">編輯 Todo</h1>

    <form method="POST" action="{{ route('todos.update', $todo) }}">
        @csrf @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">待辦事項內容</label>
            <input type="text" name="title" value="{{ $todo->title }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">更新</button>
        <a href="{{ route('todos.index') }}" class="btn btn-secondary">取消</a>
    </form>
</div>
</body>
</html>
