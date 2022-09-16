@extends('passenger.dashboard')

@section('content')
<h3>Envoyer une nouvelle demande</h3>
<form action="{{url('new_request')}}" method="post" id="mt-form">
    @csrf
    <input type="text" hidden class="" value="{{Auth::User()->id}}" name="passenger_id">
    <div class="row mb-4">
        <label>Date d'embarquement:</label>
        <input type="date" class="form-control" name="p_date">
    </div><br>
    <div class="row mb-4">
        <label>Heure d'embarquement:</label>
        <input type="time" class="form-control" name="p_time">
    </div><br>
    <div class="row mb-4">
        <label>Lieu d'embarquement:</label>
        <input type="text" class="form-control" name="p_point">
    </div><br>
    <div class="row mb-4">
        <label>Destination:</label>
        <input type="text" class="form-control" name="d_location">
    </div><br>
    <div class="row mb-4">
        <label>Description itinéraire:</label>
        <input type="text" class="form-control" name="i_desc">
    </div><br>
    <br>
    <div class="row mb-4 mt-4">
        <button type="submit" class="btn btn-dark mr-3">Envoyer</button>
        <button type="reset" class="btn btn-danger">Annuler</button>
    </div>
</form>
@endsection