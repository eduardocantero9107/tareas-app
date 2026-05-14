<form method="POST" action="/store" class="container mt-5">

@csrf

<h2>Nueva tarea</h2>

<input type="text" name="title" placeholder="Título" class="form-control mb-3">

<textarea name="description" placeholder="Descripción" class="form-control mb-3"></textarea>

<select name="status" class="form-control mb-3">
    <option>Pendiente</option>
    <option>Completada</option>
</select>

<button class="btn btn-success">
    Guardar
</button>

</form>