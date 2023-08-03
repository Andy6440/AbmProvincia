<div class="col-md-12">
    <div class="col-md-6">
        <!-- En tu archivo create.blade.php o edit.blade.php -->
        <div class="form-group">
            <label for="provincia_id">Lista de Provincias</label>
            <select class="form-control select-search" id="provincia_id" name="provincia_id">
                @foreach ($provincias as $provincia)
                    <option value="{{ $provincia->id_provincia }}">{{ $provincia->descripcion_provincia }}</option>
                @endforeach
            </select>
        </div>

    </div>
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
   
</div>

<div class="col-12">
    <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
</div>
