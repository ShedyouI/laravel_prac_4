<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Заявки</title>
</head>
<body>
    <h1>Список заявок</h1>
    
    <table>
        <a href="{{ route('reports.create') }}">К созданию заявки</a>
        
        <thead>
            <tr>
                <th>Номер автомобиля</th>
                <th>Описание</th>
                <th>Дата создания</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
                <tr>
                    <td>{{ $report->number }}</td>
                    <td>{{ $report->description }}</td>
                    <td>{{ $report->created_at }}</td>
                    <td>
                    <a href="{{ route('reports.edit', $report->id) }}">Редактировать</a>
                    <form method="POST" action="{{route('reports.destroy', $report->id)}}">
                        @method('delete')
                        @csrf
                        <input type="submit" value="Удалить">
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>