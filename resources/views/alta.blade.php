@extends('layout')
@section('contenido')
        <h4 class='text-center'>Alta de partícula</h4>
        <hr>
        <section>
          <form>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Nombre</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="nombre">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Tipo</label>
              <div class="col-sm-10">
                  <select class="form-control" name="tipo">
                      <option disabled selected>Seleccionar un tipo</option>
                      <option>Fermiones</option>
                      <option>Bosones</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Subtipo</label>
              <div class="col-sm-10">
                  <select class="form-control" name="subtipo">
                      <option disabled selected>Seleccionar un subtipo</option>
                      <option>Quarks</option>
                      <option>Leptones</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Masa</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="masa">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Carga</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="carga">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Spin</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="spin">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label">Simbolo</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="simbolo">
              </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Alta partícula</button>
          </form>
        </section>
        <hr>

        @endsection

        