@extends('layoutadmin')

@section('content')

<!-- contents -->
<!-- Title -->
<div class="hk-pg-header">
    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                    data-feather="users"></i></span></span>Liste des utilisateurs</h4>
</div>
<!-- /Title -->
<hr class="nav-separator">
<!-- Row -->
<div class="row">
    <div class="col-xl-12">

        <div class="row">
            <div class="col-sm">
                <div class="table-wrap">
                    <table id="datable_1" class="table table-hover w-100 display pb-30">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Matricule</th>
                                <th>Téle</th>
                                <th>Bonus</th>
                                <th>Options</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($clients as $client)
                            <tr>
                                <td>{{$client->name1.'  '.$client->name2}}</td>
                                <td>{{$client->pin}}</td>
                                <td>{{$client->numTel}}</td>
                                <td>{{$client->montant}}</td>
                                <td>
                                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                        <div class="btn-group" role="group" aria-label="Third group">
                                            <a class="text-danger" href=""><i data-feather="trash-2"></i></a>
                                            <a class="text-warning" href="users/{{$client->id}}/edit"><i data-feather="edit"></i></a>
                                            <a class="text-success" href="users/{{$client->id}}"><i data-feather="eye"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nom</th>
                                <th>Matricule</th>
                                <th>Téle</th>
                                <th>Bonus</th>
                                <th>Options</th>
                            </tr>
                        </tfoot>
                    </table>
                   
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contents -->
@endsection