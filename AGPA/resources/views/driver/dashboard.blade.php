@extends('layouts.app')
@section('sidebare')
<ul class="nav" id="side-menu">

    <li>
        <a href="#"><i class="fa "></i>Demandes<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{url('DriverRequest/'.Auth::User()->Driver->id)}}">En attente</a>
            </li>
            <li>
                <a href="{{url('DriverPending/'.Auth::User()->Driver->id)}}">Complété</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>
</ul>
@endsection
@section('content')
@yield('driver_content')
@endsection