@extends('dispatcher.dashboard')

@section('dispatcher_content')
<table class="table table-bordered table-striped table-hover table-light">

    <thead>
        <th> Nº</th>
        <th>Auteur</th>
        <th>Date d'embarquement </th>
        <th>Heure d'embarquement</th>
        <th>Lieu d'embarquement</th>
        <th>Destination</th>
        <th>Description itinéraire</th>
        <th>Options</th>
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
            <td>
                <a class="btn btn-success" href="{{url('Manage/'.$request->id)}}">Traitement</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection