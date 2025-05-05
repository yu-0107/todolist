<!-- resources/views/todos/index.blade.php -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!DOCTYPE html>
<html>
<head><title>Todo List</title></head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">📋 Todo List</h1>
    <a href="{{ route('todos.create') }}" class="btn btn-primary mb-3">＋ 新增 Todo</a>

    @if ($todos->count())
        <div class="list-group">
            @foreach ($todos as $todo)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <span>{{ $todo->title }}</span>
                    <div>
                        <a href="{{ route('todos.edit', $todo) }}" class="btn btn-sm btn-warning">編輯</a>
                        <form method="POST" action="{{ route('todos.destroy', $todo) }}" class="d-inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('確定要刪除嗎？')">刪除</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-muted">目前沒有任何待辦事項。</p>
    @endif
</div>
</body>
</html>
