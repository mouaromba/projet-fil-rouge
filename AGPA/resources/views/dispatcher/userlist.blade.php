@extends('dispatcher.dashboard')

@section('dispatcher_content')
<div>
    <form action="{{url('userlist')}}" method="post" style="margin-bottom: 1%;">
        @csrf
        <select name="role" class="">
            <option value="*">All</option>
            <option value="2">Dispatcher</option>
            <option value="1">Chauffeur</option>
            <option value="0">Personnel</option>
        </select>
        <button class="btn btn-outline-light" type="submit">Filtre</button>
    </form>
</div>
<table class="table table-bordered table-striped table-hover table-light">
    <thead>
        <th>Nº</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Utlisateur</th>
        <th>Téléphone</th>
        <th>Rôle</th>
        <th>Email</th>
        <th>Statut</th>
        <th colspan="2">option</th>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <th>{{$user->id}}</th>
            <td>{{$user->first_name}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->mobile_phone}}</td>
            <td>{{$user->Role($user->role)}}</td>
            <td>{{$user->email}}</td>
            @if($user->role==1)
            <td>
                {{$user->Driver->status}}
            </td>
            @else
            <td>
                Non definie
            </td>
            @endif

            <td>
                <a href="{{url('regist/'.$user->Role($user->role).'/'.$user->id)}}" class="badge bg-success"onclick="return confirm('Etes vous sûr de vouloir supprimer?')">Modifier</a>
            </td>
            <td>
                <a href="{{url('user/delete/'.$user->id)}}" class="badge bg-danger" onclick="return confirm('Etes vous sûr de vouloir supprimer?')">Supprimer</a>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection