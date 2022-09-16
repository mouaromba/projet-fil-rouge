@if($vehicle!=null)
$read="readonly";
@else
@endif
@extends('dispatcher.dashboard')
@section('dispatcher_content')
<div class="container ">
    <div class="col-md-10 d-flex ">
        <div class="col-md-6 ">
            <div id="carouselExampleDark">
                <img src=" {{ asset('assets/Images/p11.jpeg')}}" width="100%" height="430px" alt="">
            </div>
        </div>

        <div class="col-md-6 ">
            <form class=" col-6 p-5" action="@if($vehicle!=null) {{url('cars/add/'.$vehicle->id)}} @else {{url('cars/add')}} @endif" method="post">
                @csrf
                <div class="form-group">
                    <label>Marque</label>
                    <input type="text" class="form-control" @if(isset($vehicle) && $vehicle!=null){{'value='.$vehicle->brand}}@endif name="brand">
                </div>

                <div class="form-group">
                    <label>Modele</label>
                    <input type="text" class="form-control" @if(isset($vehicle) && $vehicle!=null){{'value='.$vehicle->model}}@endif name="model">
                </div>

                <div class="form-group">
                    <label>Couleur</label>
                    <input type="text" class="form-control" @if(isset($vehicle) && $vehicle!=null){{'value='.$vehicle->color}}@endif name="color">
                </div>

                <div class="form-group">
                    <label>Kilometrage</label>
                    <input type="number" class="form-control" @if(isset($vehicle) && $vehicle!=null){{'value='.$vehicle->actual_km}}@endif name="actual_km">
                </div>

                <div class="form-group">
                    <label>Année</label>
                    <input type="text" class="form-control" @if(isset($vehicle) && $vehicle!=null){{'value='.$vehicle->year}}@endif name="year">
                </div>
                <div class="form-group">
                    <label>Statut</label>
                    <select class="form-control" name="status">
                        <option value="Disponible" @if(isset($vehicule) && $vehicule->status=="Disponible"){{"selected"}}@endif>Disponible</option>
                        <option value="Indisponible" @if(isset($vehicule) && $vehicule->status=="Indisponible"){{"selected"}}@endif>Indisponible</option>
                    </select>
                </div>

                <button class="btn btn-info" type="submit">Valider</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection