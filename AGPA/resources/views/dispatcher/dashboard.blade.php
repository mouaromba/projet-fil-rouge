@extends('layouts.app')
@section('sidebare')


<ul class="nav" id="side-menu">

    <li>
        <a href="#"><i class="fa "></i>Demande<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{url('dispatcher_dashboad/ongoin')}}">En cours</a>
            </li>
            <li>
                <a href="{{url('history/Approved')}}">Approuvée</a>
            </li>
            <li>
                <a href="{{url('history/Completed')}}">Complété</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>

    <li>
        <a href="#"><i class="fa fa-users"></i>Utilisateurs<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{url('regist/Passenger')}}">Ajout de Personnel</a>
            </li>
            <li>
                <a href="{{url('regist/Driver')}}">Ajout du chauffeur</a>
            </li>
            <li>
                <a href="{{url('regist/Dispatcher')}}">Ajout du distributeur </a>
            </li>
            <li>
                <a href="{{url('userlist')}}">Liste des utilisatuers</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>

    <li>
        <a href="#"><i class="fa fa-car"></i>Voiture<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="{{url('cars/add')}}">Ajout de voiture</a>
            </li>
            <li>
                <a href="{{url('cars/list')}}">Liste des voitures</a>
            </li>
        </ul>
        <!-- /.nav-second-level -->
    </li>
</ul>
@endsection
@section('content')

@yield('dispatcher_content')
<div class="col-md-12 mt-5">
    <h4 style="text-align:center ;"> Copyrigth@2022!designed by Jusy</h4>
</div>
@endsection