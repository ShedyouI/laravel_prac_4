<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Редактирование заявки</title>
</head>
<body>
    <h1>Редактирование заявки</h1>

    <a href="{{ route('reports.index') }}">Назад к списку</a>

    <form method="POST" action="{{ route('reports.update', $report->id) }}">
        @csrf
        @method('PUT')

        <p>
            <label>Номер автомобиля:</label><br>
            <input type="text" name="number" value="{{ $report->number }}" required>
        </p>

        <p>
            <label>Описание заявки:</label><br>
            <textarea name="description" rows="5" cols="40" required>{{ $report->description }}</textarea>
        </p>

        <p>
            <input type="submit" value="Сохранить">
        </p>
    </form>
</body>
</html>