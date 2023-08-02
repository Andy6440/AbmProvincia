<div class="col-md-6">
    <label for="descripcion_provincia" class="form-label">Nombre de la Provincia</label>
    <input type="text" class="form-control @error('descripcion_provincia') is-invalid @enderror"
        id="descripcion_provincia" name="descripcion_provincia"
        value="{{ old('descripcion_provincia', $provincia->descripcion_provincia ?? '') }}" required>

    @error('descripcion_provincia')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
</div>
