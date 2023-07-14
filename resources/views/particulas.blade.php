@extends('layout')
@section('contenido')
        <h4 class='text-center'>Consulta de partículas</h4>
        <hr>
        <section>
          <table class="table table-striped">
            <thead class="table-primary">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo</th>
                <th scope="col">Subtipo</th>
              </tr>
            </thead>
            <tbody>
            @isset($particulas)
            @foreach($particulas as $particula)
              <tr>
                  <td>{{ $particula->idparticula }}</td>
                  <td><a href="/particula/{{$particula['idparticula']}}">{{ $particula->nombre }}</a></td>
                  <td>{{ $particula->descripcion }}</td>
                  <td>{{ $particula->tipo }}</td>
              </tr>
            @endforeach
            @endisset


              <tr>
                <th scope="row">idparticula'</th>
                <td><a href="#">nombre</a></td>
                <td>tipo</td>
                <td>subtipo</td>
              </tr>
              
            </tbody>
          </table>
        </section>
        <hr>

        @endsection