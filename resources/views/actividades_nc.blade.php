@extends('layouts.template')
@section('content')
<section class="banner-acts d-flex justify-content-center align-items-center">
    <img src="./assets/images/navidad2.jpg" alt="">
    <div class="overlay"></div>
    <div class="text">
        <h1>Actividades {{$evento}}</h1>
        <div class="container filter-form py-4 my-4">
            <h2>Busca las actividades en tu Departamento</h2>
            <form action="{{route('filtrar')}}" method="get">
                <div class="row">
                    <div class="col-lg-10 col-sm-12 col-md-12 p0">
                        <select class="form-control" name="departamentos" id="departamentos">
                            <option value="0">Seleccione el departamento</option>
                            <option value="Francisco Morazán">Francisco Morazán</option>
                            <option value="Comayagua">Comayagua </option>
                            <option value="Santa Bárbara">Santa Bárbara </option>
                            <option value="Islas de la Bahía">Islas de la Bahía</option>
                            <option value="Cortés">Cortés</option>
                            <option value="EL Paraíso">EL Paraíso</option>
                            <option value="Atlántida">Atlántida</option>
                            <option value="Gracias a Dios">Gracias a Dios</option>
                            <option value="Olancho">Olancho</option>
                            <option value="Intibucá">Intibucá</option>
                            <option value="Yoro">Yoro</option>
                            <option value="Valle">Valle</option>
                            <option value="Intibucá">Intibucá</option>
                            <option value="Copán">Copán</option>
                            <option value="Colón">Colón</option>
                            <option value="Choluteca">Choluteca</option>
                            <option value="Lempira">Lempira</option>
                        </select>
                        {!! $errors->first('departamentos', '<small class="text-white">:message</small>') !!}
                        <p>*Recuerda que todas las actividades son gratuitas</p>

                    </div>
                    <div class="col-lg-1 col-sm-1 col-md-1 p-0">
                        <button class="btn btn-primary" type="submit">Encontrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<section>

  {{-- Actividades sin filtrar --}}
    @isset($Cronograma)
    <div class="container-fluid">
        <div class="row">
            @foreach ($Cronograma as $item)

            @php
            $fecha = $item->fecha;
            $fecha = str_replace('-', '', $fecha);
            $fecha = substr($fecha,4, 7);
            $mes = substr($fecha, 0, 2);
            $mes = str_replace($fecha, '12', 'DIC');
            $dia = substr($fecha, 2, 4);
            @endphp
            <div class="col-lg-2 col-md-3 col-sm-6 mt-3    mt-3">
                <div class="card-nc shadow1">
                    <div class="card-nc-img"><img src="./assets/images/img-card.png" alt=""></div>
                    <div class="overlay"></div>
                    <div class="text ">
                        <span class="fecha">{{$dia}} {{$mes}}</span>
                        <span class="tipo_actividad">{{$item->tipo_actividad}}</span>
                        <span class="municipio">{{$item->municipio}}</span>
                        <span class="departamento">{{$item->departamento}}</span>
                        <span class="hora">{{$item->hora_inicio}} - {{$item->hora_fin}}</span>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
                <div class="text-center d-flex justify-content-center mt-4">
                    {{$Cronograma->links() }}
                </div>
    </div>
    @endisset

    {{-- Avtividades Filtradas --}}
    @isset($Cronograma_filtrado)
    <div class="container-fluid">
        <div class="row">
            @foreach ($Cronograma_filtrado as $item)

            @php
            $fecha = $item->fecha;
            $fecha = str_replace('-', '', $fecha);
            $fecha = substr($fecha,4, 7);
            $mes = substr($fecha, 0, 2);
            $mes = str_replace($fecha, '12', 'DIC');
            $dia = substr($fecha, 2, 4);
            @endphp
            <div class="col-lg-2 col-md-3 col-sm-6 mt-3">
                <div class="card-nc shadow1">
                    <div class="card-nc-img"><img src="./assets/images/img-card.png" alt=""></div>
                    <div class="overlay"></div>
                    <div class="text ">
                        <span class="fecha">{{$dia}} {{$mes}}</span>
                        <span class="tipo_actividad">{{$item->tipo_actividad}}</span>
                        <span class="municipio">{{$item->municipio}}</span>
                        <span class="departamento">{{$item->departamento}}</span>
                        <span class="hora">{{$item->hora_inicio}} - {{$item->hora_fin}}</span>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
    </div>
    @endisset
</section>

@endsection
