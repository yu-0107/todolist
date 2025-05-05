<!-- resources/views/todos/create.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!DOCTYPE html>
<html>
<head><title>新增 Todo</title></head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">新增 Todo</h1>

    <form method="POST" action="{{ route('todos.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">待辦事項內容</label>
            <input type="text" name="title" class="form-control" required placeholder="請輸入內容">
        </div>
        <button type="submit" class="btn btn-success">儲存</button>
        <a href="{{ route('todos.index') }}" class="btn btn-secondary">返回列表</a>
    </form>
</div>
</body>
</html>
