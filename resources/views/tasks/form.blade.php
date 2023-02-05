<div class="form-group">
    <label for="name">Your name</label>
    <input class="form-control" name="name" id="name" type="text" value="{{ old('title', $task->name ?? null) }}">
</div>

<div class="form-group">
    <label for="description">Your description</label>
    <input class="form-control" name="description" id="description" type="text" value="{{ old('description', $task->description ?? null) }}">
</div>

<div class="form-group">
    <label for="completed">Your completed</label>
    <select class="form-control" name="completed" id="completed" value="{{ old('completed', $task->completed ?? null) }}">
        <option value="1">Oui</option>
        <option value="0">Non</option>
    </select>
</div>
