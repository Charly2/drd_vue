@extends('layouts.external')

@section('content')
<div class="app_quality_surver">
    <div class="head d-flex justify-content-between align-items-center" style="opacity: 1">
        <img src="https://www.drd3d.com/images/LogoColor1.png" alt="">
        <h5 class="card-title text-white fw-bold m-0">Encuesta de Calidad en el Servicio</h5>
    </div>
    <div class="body">
        <quality-survey />
    </div>

</div>

@endsection

