@extends('welcome')
@section('content')

    <div class="row justify-content-center relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
        <div class="col-md-5 opacidad p-5">
            <form class="" action="{{route('histotico.filtro')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="fecha" class="form-label">Desde Fecha</label>
                            <input type="date" class="form-control" id="fecha" name="fecha">
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

@endsection