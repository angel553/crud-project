<x-app-layout>   
  <x-layout_crud>
    <section class="section">
      <div class="row" id="table-striped">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Libros actuales</h4>
                  </div>
                  <div class="card-content">                   
                      <!-- table striped -->
                      <div class="table-responsive">
                          <table class="table table-striped mb-0">
                              <thead>
                                  <tr>
                                      <th>Título</th>
                                      <th>Autor</th>
                                      <th>Publicación</th>
                                      <th>ISBM</th>
                                      <th>Cantidad</th>
                                      <th>Acción</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  {{-- <tr>
                                      <td class="text-bold-500">Michael Right</td>
                                      <td>$15/hr</td>
                                      <td class="text-bold-500">UI/UX</td>
                                      <td>Remote</td>
                                      <td>Austin,Taxes</td> 
                                      <td><a href="#"><i
                                                  class="badge-circle badge-circle-light-secondary font-medium-1"
                                                  data-feather="mail"></i></a></td> 
                                      </tr> --}}                                                                            
                                  @foreach ($libros as $libro)
                                      <tr>                                    
                                          <td>{{ $libro->titulo }}</td>
                                          <td>{{ $libro->autor }}</td>
                                          <td>{{ $libro->fecha }}</td>
                                          <td>{{ $libro->isbn }}</td>
                                          <td>{{ $libro->cantidad }}</td>  
                                          <td><a href="/libro/{{ $libro->id }}/edit" class="btn btn-success">Editar</a><i
                                            class="badge-circle badge-circle-light-secondary font-medium-1"
                                            data-feather="mail"></i></a>                                           
                                          </td>
                                      </tr>                                                
                                  @endforeach
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
  </x-layout_crud>
</x-app-layout>   