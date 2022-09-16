@extends('dispatcher.dashboard')

@section('dispatcher_content')
<div>
    <form action="{{url('cars/list')}}" method="post" style="margin-bottom: 1%;">
        @csrf
        <select name="carfilter" class="">
            <option value="*">Plus</option>
            <option value=">=">Km>=100,000km</option>
            <option value="<">Km<100,000km>
            </option>
        </select>
        <button class="btn btn-outline-light" type="submit">Filtre</button>
    </form>
</div>
<table class="table table-bordered table-striped table-hover table-light">
    <thead>
        <th>Nº</th>
        <th>Marque</th>
        <th>Modele</th>
        <th>Couleur</th>
        <th>km réel</th>
        <th>Age</th>
        <th>Statut</th>
        <th colspan="2">Option</th>
    </thead>
    <tbody>
        @foreach($Vehicles as $Vehicle)
        <tr>
            <td>{{$Vehicle->id}}</td>
            <td>{{$Vehicle->brand}}</td>
            <td>{{$Vehicle->model}}</td>
            <td>{{$Vehicle->color}}</td>
            <td>{{$Vehicle->actual_km}}Km</td>
            <td>{{$Vehicle->year}}</td>
            <td>
                <b>{{$Vehicle->status}}</b>
            </td>
            <td>

                <a href="{{url('cars/add/'.$Vehicle->id)}}  class=" badge bg-success" onclick="return confirm('Etes vous sûr de vouloir modifier?')">Modifier</a>
            </td>
            <td>
                <a href="{{url('cars/delete/'.$Vehicle->id)}}  class=" badge bg-danger" onclick="return confirm('Etes vous sûr de vouloir supprimer?')">Supprimer</a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection