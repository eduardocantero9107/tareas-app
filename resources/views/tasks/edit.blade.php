<form method="POST" action="/update/{{ $task->id }}" class="container mt-5">

@csrf

<h2>Editar tarea</h2>

<input type="text" name="title" value="{{ $task->title }}" class="form-control mb-3">

<textarea name="description" class="form-control mb-3">{{ $task->description }}</textarea>

<select name="status" class="form-control mb-3">

<option {{ $task->status == 'Pendiente' ? 'selected' : '' }}>
Pendiente
</option>

<option {{ $task->status == 'Completada' ? 'selected' : '' }}>
Completada
</option>

</select>

<button class="btn btn-primary">
Actualizar
</button>

</form>