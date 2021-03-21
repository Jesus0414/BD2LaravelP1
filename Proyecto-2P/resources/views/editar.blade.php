    @extends('layout')
              
    @section('content')
    <div class="container">

      <h2>EDITAR REGISTROS</h2>

          <form action="{{ url("/{$elementos->id}/editar") }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="codigo" class="form-label">Código</label>
              <input id="codigo" name="codigo" type="text" class="form-control" value="{{ $elementos->codigo }}">    
            </div>
            <div class="mb-3">
              <label for="descripcion" class="form-label">Descripción</label>
              <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{ $elementos->descripcion }}">
            </div>
            <div class="mb-3">
              <label for="cantidad" class="form-label">Cantidad</label>
              <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{ $elementos->cantidad }}">
            </div>
            <div class="mb-3">
              <label for="precio" class="form-label">Precio</label>
              <input id="precio" name="precio" type="number" step="any" class="form-control" value="{{ $elementos->precio }}">
            </div>
            <a href="/" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </form>
    </div>
    @endsection