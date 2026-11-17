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
                <th>Статус</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
                <tr>
                    <td>{{ $report->number }}</td>
                    <td>{{ $report->description }}</td>
                    <td>{{ $report->created_at }}</td>
                    <td>{{ $report->status->name ?? 'Не заполнено'}}</td>
                    <td>
                    <a href="{{ route('reports.edit', $report->id) }}">Редактировать</a>
                    <form method="POST" action="{{route('reports.destroy', $report->id)}}">
                        @method('delete')
                        @csrf
                        <input type="submit" value="Удалить">
                    </form>
                    </td>
                    <div>
                        <span>Сортировка по дате создания: </span>
                        <a href="{{ route('reports.index', ['sort' => 'desc']) }}">Сначала новые.</a>
                        <a href="{{ route('reports.index', ['sort' => 'asc']) }}">Сначала старые.</a>
                    </div>
                </tr>
            @endforeach
            {{ $reports->links() }}
        </tbody>
    </table>
</body>
</html>