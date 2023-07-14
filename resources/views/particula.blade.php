@extends('layout')
@section('contenido')
        <h4 class='text-center'>Detalle Partícula</h4>
        <hr>
        <section>
            <div class="card m-auto">
                <div class="card-body">
                    <h2 class="card-title">{{$particula->nombre}} {{$particula->simbolo}} </h2>
                    <hr>
                    <h5 class="card-subtitle mb-2 text-muted">Tipo: {{$particula->tipo}}</h5>
                    <h5 class="card-subtitle mb-2 text-muted">Subtipo: {{$particula->subtipo}}</h5>
                    <hr>
                    <p class="card-text"><b>Masa: {{$particula->masa}}</b> </p>
                    <p class="card-text"><b>Carga: {{$particula->carga}}</b> </p>
                    <p class="card-text"><b>Spin: {{$particula->spin}}</b> </p>
                    <p class="card-text">Descripción: {{$particula->descripcion}} </p>
                </div>
            </div>
        </section>
        <hr>

        @endsection
