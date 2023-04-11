@extends('welcome')
@section('content')

    <div class="row justify-content-center relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
        <div class="col-md-5 opacidad p-5">
            <h4 class="text-center pb-3">Filtros</h4>
            <ul class="nav nav-tabs d-flex justify-content-around" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#fecha" type="button" role="tab" aria-controls="fecha" aria-selected="true">Por Fecha</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#producto_fecha" type="button" role="tab" aria-controls="producto_fecha" aria-selected="false">Por Producto y fecha</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active my-2" id="fecha" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <form class="" action="{{route('histotico.filtro')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="fecha" class="form-label">Desde Fecha</label>
                                <input type="date" class="form-control" min="{{$fecha_limite}}" max="{{$fecha_actual}}" id="fecha" name="fecha">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Consultar <i class="fa-solid fa-magnifying-glass fa-beat-fade"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade my-2" id="producto_fecha" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <form class="" action="{{route('histotico.filtro2')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="producto" class="form-label">Producto</label>
                                <select class="form-select sl2" id="producto" name="producto" data-placeholder="Seleccionar">
                                    <option value="">seleccionar</option>
                                    @foreach($productos as $key => $val )
                                        <option value="{{$val->CODIGO_ARTICULO}}">{{$val->NOMBRE_ARTICULO}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="fecha2" class="form-label">Desde Fecha</label>
                                <input type="date" class="form-control"  id="fecha2" name="fecha">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Consultar <i class="fa-solid fa-magnifying-glass fa-beat-fade"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </div>

        </div>
    </div>

@endsection