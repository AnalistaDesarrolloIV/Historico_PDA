@extends('welcome')
@section('content')
    <div class="row justify-content-around"> 
        <div class="col-md-4">
            <div class="d-grid gap-2">
                <a href="{{url('')}}/" class="btn btn-danger"><i class="fa-solid fa-angle-left fa-beat-fade"></i> Volver </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button" onclick="refresh()"><i class="fa-solid fa-arrows-rotate fa-spin"></i> Refrescar </button>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <table class="tbl table  table-striped" style="width:100%">
                    <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Fecha</th>
                        <th>Pedido</th>
                        <th>Cod Articulo</th>
                        <th>Descripción Articulo</th>
                        <th>Lote</th>
                        <th>Cantidad</th>
                        <th>Cantidad Post Operación</th>
                        <th>Estado</th>
                        <th>Nombre Bahia</th>
                        <th>Nombre Pasillo</th>
                        <th>Ubicaión</th>
                        <th>Operador</th>
                        <th>Bahia</th>
                        <th>Pasillo</th>
                        <th>comparimento</th>
                        <th>Tipo Operación</th>
                        <th>Cliente</th>
                        <th>Vendedor</th>
                        <th>Tiempo Picking (sec)</th>
                    </tr>
                    </thead>
                    <tbody class="table-light">
                    @foreach($histo as $key => $value)
                        <tr>
                            <td>{{$value->ID}}</td>
                            <td>{{$value->FECHA_OPERACION}}</td>
                            <td>{{$value->PEDIDO}}</td>
                            <td>{{$value->CODIGO_ARTICULO}}</td>
                            <td>{{$value->DESCRIPCION_ARTICULO}}</td>
                            <td>{{$value->LOTE}}</td>
                            <td>{{round($value->CANTIDAD)}}</td>
                            <td>{{round($value->CANTIDAD_POST_OPERACION)}}</td>
                            <td>{{$value->ESTADO}}</td>
                            <td>{{$value->NOMBRE_BAHIA}}</td>
                            <td>{{$value->NOMBRE_PASILLO}}</td>
                            <td>{{$value->UBICACION}}</td>
                            <td>{{$value->OPERADOR_QUE_EJECUTA}}</td>
                            <td>{{$value->BAHIA}}</td>
                            <td>{{$value->UDC}}</td>
                            <td>{{$value->COMPARTIMENTO}}</td>
                            <td>{{$value->NOMBRE_TIPO_OPERACION}}</td>
                            <td>{{$value->CLIENTE}}</td>
                            <td>{{$value->VENDEDOR}}</td>
                            <td>{{$value->TIEMPO_SEGUNDOS}}</td>
                        </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>

@endsection

@section('script')
    <script>
        function refresh(){
            location.reload()
        }
    </script>

@endsection