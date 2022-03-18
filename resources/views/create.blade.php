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
                            <form class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Título</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" id="first-name" class="form-control" name="fname"
                                                placeholder="Título">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Autor</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="email" id="email-id" class="form-control" name="email-id"
                                                placeholder="Autor">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Fecha de publicación</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number" id="contact-info" class="form-control" name="contact"
                                                placeholder="Fecha de publicación">
                                        </div>
                                        <div class="col-md-4">
                                            <label>ISBN</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="password" class="form-control" name="password"
                                                placeholder="ISBN">
                                        </div>
                                        <div class="col-md-4">
                                        <label>Cantidad</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" id="password" class="form-control" name="password"
                                                placeholder="Cantidad">
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
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Agregar</button>
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