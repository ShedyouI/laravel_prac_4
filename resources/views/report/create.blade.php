<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Создание заявки</title>
</head>
<body>
    <h1>Создание заявки</h1>

    <a href="{{ route('reports.index') }}">Назад к списку</a>

    <form method="POST" action="{{ route('reports.store') }}">
        @csrf

        <p>
            <label>Номер автомобиля:</label><br>
            <input type="text" name="number" required>
        </p>

        <p>
            <label>Описание заявки:</label><br>
            <textarea name="description" rows="5" cols="40" required></textarea>
        </p>

        <p>
            <input type="submit" value="Создать">
        </p>
    </form>
</body>
</html>