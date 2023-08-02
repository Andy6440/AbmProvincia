<div class="form-group">
    <label for="descripcion_provincia">Nombre de la Provincia</label>
    <input type="text" class="form-control" id="descripcion_provincia" name="descripcion_provincia" value="{{ old('descripcion_provincia', $provincia->descripcion_provincia ?? '') }}" required>
</div>

<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
