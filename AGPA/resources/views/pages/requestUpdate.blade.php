@extends('dispatcher.dashboard')

@section('dispatcher_content')
<h3>Request Nº{{$trip_request}} Updating</h3>
<form action="{{url('Manage/reupdate')}}" method="post">
    @csrf
    <input type="text" hidden name="request_id" value="{{$trip_request}}">
    <div class="form-group">
        <label>Choix du chauffeur</label>
        <select class="form-control" name="driver_id">
            @foreach($Drivers as $Driver)
            <option value="{{$Driver->id}}">{{$Driver->User->first_name." ".$Driver->User->last_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Choix du Vehicule</label>
        <select class="form-control" name="vehicle_id">
            @foreach($Vehicles as $Vehicle)
            <option value="{{$Vehicle->id}}">{{$Vehicle->brand." ".$Vehicle->model}}</option>
            @endforeach
        </select>
    </div>
    <button class="btn btn-info" type="submit">Assigner</button>
</form>
@endsection