@extends('dispatcher.dashboard')

@section('dispatcher_content')
<form action="{{url('repport/update')}}" method="post">
    @csrf
    <input type="text" hidden name="trip_request_id" value="{{$request_id}}">

    <div class="form-group">
        <label>Km parcouru</label>
        <input type="number" class="form-control" name="arriv_km">
    </div>
    <div class="form-group">
        <label>Date du rapport</label>
        <input type="date" class="form-control" name="repport_date">
    </div>
    <div class="form-group">
        <label>Heure du rapport</label>
        <input type="time" class="form-control" name="repport_time">
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" name="description"></textarea>
    </div>
    <button class="btn btn-info" type="submit">Envoyez</button>
</form>
@endsection