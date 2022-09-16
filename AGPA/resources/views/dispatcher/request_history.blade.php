@extends('dispatcher.dashboard')

@section('dispatcher_content')
<table class="table table-bordered table-striped table-hover table-light">

    <thead>
        <th>Nº</th>
        <th>Auteur</th>
        <th>Date d'embarquement</th>
        <th>Heure d'embarquement</th>
        <th>Lieu d'embarquement</th>
        <th>Destination</th>
        <th>Description itinéraire</th>
        <th>Chauffeur</th>
        <th>Vehicule</th>
        @if(isset($Approved) && $Approved=='Approved')

        <th>Option</th>
        @elseif(isset($Completed) && $Completed=='Completed')

        <th>Exporter</th>
        @endif
    </thead>
    <tbody>

        @foreach($trip_request as $request)
        <tr>
            <td>
                <h5>{{$request->id}}</h5>
            </td>
            <td>{{$request->User->first_name." ".$request->User->last_name}}</td>
            <td>{{$request->pickup_date}}</td>
            <td>{{$request->pickup_time}}</td>
            <td>{{$request->pickup_point}}</td>
            <td>{{$request->drop_location}}</td>
            <td>{{$request->itinerary_desc}}</td>
            <td>{{$request->Driver->User->first_name." ".$request->Driver->User->last_name}}</td>
            <td>{{$request->Vehicle->brand." ".$request->Vehicle->model}}</td>
            @if(isset($Approved) && $Approved=='Approved')
            <td>
                <a href="{{url('repport?request_id='.$request->id)}}" class="btn btn-info">Rapport</a>
                <a href="{{url('Manage/'.$request->id.'?reupdate=reupdate')}}" class="btn btn-success">Mis à jour</a>
            </td>

            @elseif(isset($Completed) && $Completed=='Completed')
            <td>
                <a href="{{url('print/'.$request->id)}}" class="badge badge-success">Imprimer</a>
            </td>

            @endif
        </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    <div>{{$trip_request->links()}}</div>
</div>
@endsection