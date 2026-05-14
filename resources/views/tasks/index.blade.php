<!DOCTYPE html>
<html>
<head>
    <title>Lista de tareas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h1>Lista de tareas</h1>

<a href="/create" class="btn btn-primary mb-3">
    Nueva tarea
</a>

<table class="table table-bordered">

<tr>
    <th>ID</th>
    <th>Título</th>
    <th>Estado</th>
    <th>Acciones</th>
</tr>

@foreach($tasks as $task)

<tr>
    <td>{{ $task->id }}</td>
    <td>{{ $task->title }}</td>
    <td>{{ $task->status }}</td>

    <td>
        <a href="/show/{{ $task->id }}" class="btn btn-info">
            Ver
        </a>

        <a href="/edit/{{ $task->id }}" class="btn btn-warning">
            Editar
        </a>

        <a href="/delete/{{ $task->id }}" class="btn btn-danger">
            Eliminar
        </a>
    </td>

</tr>

@endforeach

</table>

</body>
</html>