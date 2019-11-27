@extends('layouts.template')

@section('content')
{{-- Banner video --}}
<div class="banner_video">
    <video src="assets/video/webvideo.mp4" autoplay="true" loop="true" controls="true"></video>
    {{-- <div class="overlay-video"></div> --}}
    <div class="text-banner">
            <h1 class="paz">PAZ</h1>
            <h1 class="unidad">UNIDAD</h1>
            <h1 class="prevencion">PREVENCIÓN</h1>
        
    </div>
</div>

{{-- Navidad Catracha informacion --}}
<section >
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-7 d-flex align-items-center text-center ">
                <div class="col-lg-10 offset-lg-1 pt-4 ">
                    <h1 class="mb-4">Navidad Catracha</h1>
                    <p class="text-left">
                        La “Navidad Catracha” es un proyecto impulsado por el Gobierno de Honduras desde el año 2014, y
                        que se realiza en esta ocasión en su 6ta edición.
                    </p>
                    <p class="text-left">
                        La iniciativa del Gobierno cuenta con la participación de voluntarios, estudiantes,artistas,
                        comunicadores y líderes comunitarios a nivel nacional.
                    </p>
                    <p class="text-left">
                        El objetivo de Navidad Catracha es brindar espacios seguros para convivencia que fomenten
                        cultura de paz, unidad familiar, sana recreación, valores culturales, así como costumbres y
                        tradiciones locales de la época navideña.
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-5 img-right p-0 d-none d-lg-block">
                <img src="./assets/images/NavidadFotosWeb2.png" class="img-fluid" alt="" style="" srcset="">
            </div>
        </div>
    </div>
</section>

{{-- Eventos --}}
<section id="Actividades" class="text-center">
    <h1 class="my-4">Eventos</h1>
    <div class="owl-carousel owl-theme owl-loaded owl-drag">
        <div class="owl-stage-outer">
            <div class="owl-stage"
                style="transform: translate3d(-1386px, 0px, 0px); transition: all 0.25s ease 0s; width: 2376px;">
                @foreach ($Eventos as $item)
                <div class="owl-item" >
                    <div class="item pr-1" style="position: relative; overflow: hidden">
                        <img src="{{Storage::url($item->imagendestacada)}}" alt="" srcset=""> 
                        <div class="overlay"></div>
                        <h2 class="text-left title-act">{{$item->nombre}}</h2>
                        <div class="text-act p-3">
                            <h2 class="text-left">{{$item->nombre}}</h2>
                            <p  class="text-left">{{$item->descripcion}} </p> 
                        </div>
                    </div>
                    @php
                    $url = $item->imagendestacada;
                    $url = str_replace('\\', '/', $url);
                    @endphp
                    <div class="text-center">
                    <a class="btn btn-primary btn-block mt-2" href="actividades-{{$item->id}}" role="button">Actividades</a>
                    <a class="elem btn btn-link btn-link btn-block mt-2" style="border-radius: 0" href="{{Storage::url($url)}}" title=""
                    data-lcl-thumb="{{Storage::url($url)}}">
                    Ver Galeria</a>
                    <!--<a class="elem {{--$item->id}} btn btn-link mt-4" style="border-radius: 0"  data-lcl-thumb="{{--Storage::url($url)--}}" href="{{--Storage::url($url)--}}">Galeria</a> -->
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- Galeria --}}

<div id="Galeria" class="py-5">
        <div class="container text-center"><h1>Galería</h1></div>
    <div class="container-fluid">
        <div class="row">
            @foreach ($galeria_eventos as $item) 
            @php
            $url = $item->imagendestacada;
            $url = str_replace('\\', '/', $url);
            @endphp  
            <div class="col-sm-6 col-lg-3 shadow1 p-0" style="">
                <a class="elem" style="object-fit:cover;" href="{{Storage::url($url)}}" title=""
                    data-lcl-txt="" data-lcl-author=""
                    data-lcl-thumb="{{Storage::url($url)}}">
                    <span style="background-image:url({{Storage::url($url)}});" class="img-fluid"></span>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<section>

</section>



@endsection
