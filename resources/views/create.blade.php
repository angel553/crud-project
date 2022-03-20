<x-app-layout> 
    <x-layout_crud>
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Agregar Libro</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body"> 

                            @isset($libro)
                                <form class="form form-horizontal" action="/libro/{{ $libro->id }}" method="POST"> {{-- update --}}                                                            
                                    @method('PATCH')
                            @else
                                <form class="form form-horizontal" action="/libro" method="POST">                            
                            @endisset                           

                            <form class="form form-horizontal" action="/libro" method="POST">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Título</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="titulo"
                                                placeholder="Título" value="{{ isset($libro) ? $libro->titulo : '' }}{{ old('titulo') }}">
                                            @error('titulo')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Autor</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="email-id" class="form-control" name="autor"
                                                placeholder="Autor" value="{{ isset($libro) ? $libro->autor : '' }}{{ old('autor') }}">
                                            @error('autor')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>Fecha de publicación</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="date" id="contact-info" class="form-control" name="fecha"
                                                placeholder="Fecha de publicación" value="{{ isset($libro) ? $libro->fecha : '' }}{{ old('fecha') }}">
                                            @error('fecha')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <label>ISBN</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="password" class="form-control" name="isbn"
                                                placeholder="ISBN" value="{{ isset($libro) ? $libro->isbn : '' }}{{ old('isbn') }}">
                                            @error('isbn')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                        <label>Cantidad</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="password" class="form-control" name="cantidad"
                                                placeholder="Cantidad" value={{ isset($libro) ? $libro->cantidad : '' }}{{ old('cantidad') }}>
                                            @error('cantidad')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        {{-- <div class="col-12 col-md-8 offset-md-4 form-group">
                                        <div class="input-group mb-3">
                                            <select class="form-select" id="inputGroupSelect01">
                                                <option selected>Choose...</option>
                                                <option value="1">Venta</option>
                                                <option value="2">Intercambio</option>                                            
                                            </select>
                                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                        </div> 
                                        </div> --}}
                                        {{-- <div class="col-12 col-md-8 offset-md-4 form-group">
                                            <div class='form-check'>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox1" class='form-check-input'
                                                        checked>
                                                    <label for="checkbox1">Remember Me</label>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Guardar</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Limpiar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </x-layout_crud>  
</x-app-layout> 